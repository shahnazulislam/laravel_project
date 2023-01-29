<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel crud operation</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <a href="{{url('/')}}" class="btn btn-primary my-4">SHOW DATA</a>
        <form action="{{url('/store_data')}}" method="post">
            @csrf
            <div class="form-grup">
                <label for="name">Name:</label>
                <input class="form-control" id="name" name="name" type="text" placeholder="Please type Your name">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-grup">
                <label for="email">Email:</label>
                <input class="form-control" id="email" name="email" type="text" placeholder="Please type Your email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary my-3" value="submit">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>