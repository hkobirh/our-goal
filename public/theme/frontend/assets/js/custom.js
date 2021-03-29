$(document).ready(function () {

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

})
