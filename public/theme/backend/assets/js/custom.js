$(document).ready(function () {

    $('#myDatatable').DataTable({
        ordering: false
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('body').on('submit', '.create-product', function (e) {
        e.preventDefault();
        $.ajax({
            url: baseUrl + '/staff/product',
            method: 'POST',
            contentType: false,
            processData: false,
            data: new FormData(this),
            success: function (data) {
                if ($.isEmptyObject(data.error)) {
                    $('.error-message').css('display', 'none');
                    $('.success-message').html(data.success).css('display', 'block');
                    $('.create-product')[0].reset();
                    $('#specialoffershow').css('display', 'none');
                    $('#warrantyshow').css('display', 'none');
                    $('.product-gallery').empty();


                    Toast.fire({
                        icon: 'success',
                        title: 'A product create successfully.'
                    })
                } else {
                    showErrorMessage(data.error)
                }
            }
        })
    })


})

function showErrorMessage(message) {
    $('.error-message').css('display', 'block').find('ul').html('');
    $.each(message, function (key, value) {
        $('.error-message').find('ul').append('<li>' + value + '</li>');
    });
}


// Toaster alert
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

// special offer show
function specialoffer(chkspecialoffer) {
    var specialoffershow = document.getElementById("specialoffershow");
    specialoffershow.style.display = chkspecialoffer.checked ? "" : "none";
}

// warrantys how
function warrantyshow(warrantyhidden) {
    var warrantyshow = document.getElementById("warrantyshow");
    warrantyshow.style.display = warrantyhidden.checked ? "" : "none";
}

CKEDITOR.replace('texteditor');
CKEDITOR.replace('texteditor1');
CKEDITOR.replace('texteditor2');


// slug
function convertToSlug(text, place) {
    text = text.toLowerCase();
    text = text.replace(/[^a-zA-Z0-9]+/g, "-");
    $(place).val(text);
}


// image preview

$(function () {
    // Multiple images preview in browser
    var imagesPreview = function (input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    $(
                        $.parseHTML('<img class="img-fluid img-thumbnail" style="height: 100px; width: 100px;">')
                    ).attr("src", event.target.result).appendTo(placeToInsertImagePreview);
                };
                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $("body").on("change", "#image", function () {
        imagesPreview(this, "div.product-gallery")
    });
    $("body").on("change", "#thumbnail", function () {
        imagesPreview(this, "div.thumbnail");
    });

    $("body").on("change", "#peofile_image", function (e) {
        imagesPreview(this, ".pimage").attr("src", e.target.result);
    });
    $("body").on("change", "#image", function (e) {
        imagesPreview(this, "#brand-image").attr("src", e.target.result);
    });
});

$(".input").datepicker({
    changeMonth: true,
    changeYear: true,
    autoSize: true
});

//Pagination js

$('body').on('click', '.pagination .page-link', function () {
    event.preventDefault();
    let url = $(this).attr('href');
    let page = url.split('page=')[1];

    pageData(page);
})

function pageData(page) {
    let url = $('#paginationTable').data('url');
    token = $('input[name="_token"]').val();
    $.ajax({
        url: url,
        method: 'POST',
        data: {_token: token, page: page},
        success: function (result) {
            $('#paginationTable').html(result);
        }
    })
}

//Remove Item
$('body').on('click', '.remove-item', function () {
    let url = $(this).data('url');
   // let id = $(this).data('id');
    let page = $('.page-item.active .page-link').html();

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {

            $.ajax({
                    url: url,
                    type: 'delete',
                    success: function (result) {

                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                        pageData(page);0
                    }
                }
            )

        }
    })


})

//Product update
$('body').on('click','.update-product', function (e){
    e.preventDefault();
    $.ajax({
        url:$(this).attr('action'),
        method:'post',
        contentType: false,
        processData: false,
        data:new FormData(this),
        dataType:'json',
        success:function (data){

        }

    })
})
// For check all product
$('body').on('click','#checkAll',function (){
    if (this.checked){
        $('.check-item').each(function (){
            this.checked = true;
        })
    }else{
        $('.check-item').each(function (){
            this.checked = false;
        })
    }
    forActionEnable()
})
$('body').on('click','.check-item',function (){
    if($('.check-item').length === $('.check-item:checked').length){
        $('#checkAll').prop('checked',true);
    }else{
        $('#checkAll').prop('checked',false);
    }
    forActionEnable()
})

function forActionEnable(){
    if ($('.check-item:checked').length > 0){
        $('.dropdown-toggle').removeAttr('disabled');
    }else {
        $('.dropdown-toggle').attr('disabled',true);
    }
}
/////////////////////////////////////////////////////////////////////////
function submitForm(url, status){
    $.ajax({
        url:url,
        type: 'post',
        data: $('#MyForm').serialize() + '&status=' + status,
        success: function (data){
            Toast.fire({
                icon: 'success',
                title: 'A product delete successfully.'
            })
            let page = $('.page-item.active .page-link').html();
            pageData(page);
        }
    })
}

// Price update on the screen

$(document).on('change','.price-update',function (){
    let price = $(this).val();
    let url = $(this).data('url');
    // let type = $(this).data('price-type');
    $.ajax({
        url:url,
        type: 'post',
        data: { var_price: price},
        success: function (result){
                Toast.fire({
                    icon: 'success',
                    title: 'A product delete successfully.'
                })
                // let page = $('.page-item.active .page-link').html();
                // pageData(page);

        }
    })
})



