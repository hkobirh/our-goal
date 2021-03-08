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

               }else {
                   showErrorMessage(data.error)
               }
            }
        })
    })


})

function showErrorMessage(message){
    $('.error-message').find('ul').html('');

    $('.error-message').css('display','block');
   $.each(message, function (key, value){
       $('.error-message').find('ul').append('<li>'+value+'</li>');
   });
}
