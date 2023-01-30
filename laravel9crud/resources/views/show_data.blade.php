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
    <a href="{{url('/add_data')}}" class="btn btn-primary my-3">ADD DATA</a>
    @if(Session::has('msg'))
    <p class="alert alert-success">{{ Session::get('msg') }}</p>
    @endif
    <table class="table table-bordered table-striped table-hover">
      <thead class="bg-dark text-light">
        <tr class="text-uppercase text-center">
          <th scope="col">id</th>
          <th scope="col">name</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="table-secondary">
        @foreach($showData as $key => $data)
        <tr>
          <td>{{$key+1}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->email}}</td>
          <td class="d-flex justify-content-around">
            <a href="{{url('/edit_data/'.$data->id)}}" class="btn btn-success">Edit</a>
            <a href="{{url('/delete_data/'.$data->id)}}" onclick="return confurm('Are you sure to delete')" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="d-flex justify-content-around">
      {{$showData->links()}}
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>