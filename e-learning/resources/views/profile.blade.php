<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    .search,.search-text{
        border-radius: 50px;
        padding: 8px 10px;
        position: relative;
        top: 5px;
    }
    .search-text{
      left: 500px;
    }
    .search{
     left: 560px;
    }
    body{
      background-color:#e0f7fa;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md mb-3" style="background-color:#00acc1; ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color: white;" href="/home">E-learning</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a style="color: white;" href="#">Edit</a></li>
        <li class="active"> -->
        <form action="search" method="post">
        @csrf
        <input class="search-text" type="text" name="search" placeholder="Search for friends"/>
        <input class="search" type="submit" name="submit" value="search"/>
        
        </form></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('logout') }}"  style="color: white;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav" style="background-color:white;">
      <p style="font-size: 25px; color: #517fb8">Name: {{Auth()->user()->name}}</p>
      <p><img width="200px" style="position: relative; top: 100px;" src="https://www.pinclipart.com/picdir/big/6-64019_-dear-students-owl-theme-classroom-school-clipart.png"/></p>
    </div>
    <div class="col-sm-8 text-left" style="margin-top: 150px;"> 
    <table class="table table-hover table-dark">
  <thead>
    <tr>
      <th class="text-center"scope="col">Math</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th class="text-center"scope="col">English</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th class="text-center"scope="col">Arabic</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>
    </div>
    <div class="col-sm-2 sidenav" style="background-color:white;">
      <div class="well">
      <table class="table table-hover table-dark">
      <thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center">Friends</th>
    </tr>
  </thead>
  <tbody>
  @foreach($friends as $friend)
    <tr>
    
      <td>{{$friend->name}}</td>
     
    </tr>
    @endforeach
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="background-color:#00acc1">
  <p></p>
</footer>

<div><img height="150px;" style="margin-left: 550px;" src="https://i.dlpng.com/static/png/6808076_preview.png"/></div>

</body>
</html>
