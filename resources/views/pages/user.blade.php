<!DOCTYPE html>
<html lang="en">
<head>
  <title>Users Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">IPT Midterm Project</a>
      </div>
    <ul class="container nav navbar-nav pull-right" style="width: 300px;">
      <li><a href="{{url('/')}}">Home</a></li>
      <li><a> Users</a></li>
      <li><a href="{{url('/account')}}">Account</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
    <h3>Users</h3>
    <table class="table table-stripped">
        <tr>
            <td>User ID</td>
            <td>Last Name</td>
            <td>First Name</td>
            <td>Address</td>
        </tr>
        @foreach ($users as $u)
        <tr>
        <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->address}}</td>
        </tr>
        @endforeach
        </table>
</div>

</body>