<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container pt-3">
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
  <h2>Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $p)
       <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->password}}</td>
            <td><a href={{route('edit',$p->id)}} class="btn btn-info">Edit</a></td>
             <td><a href="{{route('delete',$p->id)}}" class="btn btn-info">Delete</a></td>
       </tr>
      @endforeach
    </tbody>
  </table>
  {{$data->links()}}
</div>

</body>
</html>
