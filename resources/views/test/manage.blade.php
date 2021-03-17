<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
@csrf
<script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
</script>
<div id="tableData">
    @include('test.pagination')
</div>
<script>
    $('body').on('click', 'a', function () {
        event.preventDefault();
        let url = $(this).attr('href');
        let page = url.split('page=')[1];

        pageData(page);
    })

    function pageData(page) {
        token = $('input[name="_token"]').val();
        $.ajax({
            url: '{{route('get_data')}}',
            method: 'POST',
            data: {_token: token, page: page},
            success: function (result) {
                $('#tableData').html(result);
            }
        })
    }
</script>

</body>
</html>
