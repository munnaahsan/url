<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> <table class="table table-success table-striped">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th>Destination Url</th>
        <th>IP Address</th>
        <th>Operating System</th>
        <th>Browser</th>
    </tr>
    </thead>
    <tbody>
    @foreach($short_url as $url)
        <tr>
            <th scope="row">1</th>
            <td>{{$url->destination_url}}</td>
            <td>{{$url->track_ip_address}}</td>
            <td>{{$url->track_operating_system}}</td>
            <td>{{$url->track_browser}}</td>
        </tr>
    @endforeach

    </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



