$(document).ready(function () {
    const baseUrl = 'http://127.0.0.1:8000/';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $('body').on('click', '.btn-quickview', function (e) {
        e.preventDefault();
        $('.bd-example-modal-lg').modal('show');
        let url = $(this).attr('href');

        $.ajax({
            url: url,
            method: 'post',
            success: function (data) {
                $('#productQuickViewData').html(data);
            }
        })
    })
    $(document).on('click', '.color-item', function () {
        $(this).toggleClass('active')
    })

    $(document).on('click', '.add-to-cart', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        let color = $('.color-item.active').map(function (){
            return $(this).data('value');
        }).get();
        $.ajax({
            url: baseUrl + 'ajax/cart/add',
            method: 'post',
            data:{id:id,color:color},
            success: function (res) {
                if(res.status === 1){
                    toastr.info(res.message);
                    get_cart_data();
                }
            }
        })
    })
// For clear items from cart==========================================!
    $(document).on('click','.clear-cart',function (e){
        e.preventDefault();
        $.ajax({
            url: baseUrl + 'ajax/cart/clear',
            method: 'get',
            success: function (res) {
                if(res.status === 1){
                    toastr.info(res.message);
                    get_cart_data();
                }
            }
        })
    })

    function get_cart_data(){
        $.ajax({
            url: baseUrl + 'ajax/get_cart_data',
            method: 'get',
            success: function (res) {
                $("#get_cart_data").html(res)
            }
        })
    }

    $(document).on('click','.item-remove',function (e){
        e.preventDefault();
        let id = $(this).data('id');
        $.ajax({
            url: baseUrl + 'ajax/cart/remove',
            method: 'post',
            data:{id:id},
            success: function (res) {
                if(res.status === 1){
                    toastr.info(res.message);
                    get_cart_data();
                }
            }
        })
    })

})
