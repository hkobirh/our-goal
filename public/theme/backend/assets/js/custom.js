$(document).ready(function (){

    $('#myDatatable').DataTable({
        ordering:false
    });

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('body').on('submit', '.create-product', function(e){
          e.preventDefault();
        $.ajax({
            url: '/staff/product',
            method: 'POST',
            data: $(this).serialize(),
            success: function (data) {
               if($.isEmptyObject(data.error)){
                   $('.error-message').css('display','none');
                   $('.success-message').html(data.success).css('display','block');
                   $('.create-product')[0].reset();

                   Toast.fire({
                       icon: 'success',
                       title: 'Signed in successfully'
                   })
               }else {
                   showErrorMessage(data.error)
               }
            }
        })
    })


})

function showErrorMessage(message){
    $('.error-message').css('display','block').find('ul').html('');
   $.each(message, function (key, value){
       $('.error-message').find('ul').append('<li>'+value+'</li>');
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

$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $(
                        $.parseHTML('<img class="img-fluid img-thumbnail" style="height: 100px; width: 100px;">')
                    ).attr("src", event.target.result).appendTo(placeToInsertImagePreview);
                };
                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $("body").on("change", "#image", function() {
        imagesPreview(this, "div.product-image")
    });
    $("body").on("change", "#thumbnail", function() {
        imagesPreview(this, "div.thumbnail");
    });

    $("body").on("change", "#peofile_image", function(e) {
        imagesPreview(this, ".pimage").attr("src", e.target.result);
    });
    $("body").on("change", "#image", function(e) {
        imagesPreview(this, "#brand-image").attr("src", e.target.result);
    });
});

$(".input").datepicker({
    changeMonth: true,
    changeYear: true,
    autoSize: true
});


