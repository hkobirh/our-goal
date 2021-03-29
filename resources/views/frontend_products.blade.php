<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

</head>
<body>
<div id="data">
    <ul></ul>
</div>

<script src="{{asset('theme/frontend/assets/js/jquery.min.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    load_more_data();
    function load_more_data(id=""){
        $.ajax({
            url: '{{ route('load_more_data') }}',
            type: 'post',
            data:{id:id},
            success: function (data){
                $('#loadMoreBtn').remove();
                $('#data ul').append(data);
            }
        })
    }
    $('body').on('click','#loadMoreBtn',function (){
        let id = $(this).data('id');
        load_more_data(id);
    })
</script>
</body>
</html>
