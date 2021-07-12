<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>E-learning For Kids</title>
<link rel="stylesheet" href="{{asset('customStyle/css/bootstrap.min.css')}}">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('customStyle/js/bootstrap.min.js')}}"></script>
<script>
$(function(){
  $(".levels").click(function(){
    $(".levels-list").toggle("slow");
  });
});
</script>
<style>
.jumbo-img{
  background-image: url('https://toysrus.in/images/gbc/landing-page.png');
  /* background-size: cover;  */
  background-size: cover;
}
.levels-list{
  display:none;
  list-style-type: none;
  padding: 8px 10px;
  background-color: transparent;
  border: 4px #1f7358 solid;
  border-radius: 50px;
}
.level{
  font-family: "Mistery Quest";
  font-size: 20px;
  font-weight: bold;
  color:#1f7358;
  padding: 8px 10px;
  text-align: center;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-info navbar-dark mb-3">
    <div class="container">
        <a href="#" class="navbar-brand mr-3">E-learning</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="{{url('profile')}}" class="nav-item nav-link">Profile</a>
                <a href="#" class="nav-item nav-link">About</a>
            </div>
            <div class="navbar-nav ml-auto">
                <!-- <a href="#" class="nav-item nav-link">Logout</a> -->
                <a href="{{ route('logout') }}" class="nav-item nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
            </div>
        </div>
    </div>    
</nav>
<div class="container">
    <div class="jumbotron jumbo-img">
        <h1 class="text-right">Learn easily from home</h1>
        <p class="lead text-right" style="font-family:'Mistery Quest';">Discover the easiest and most fun videos to help your kids learn online.</p>
        <p class="text-right"><a href="#" target="_blank" class="btn btn-success btn-lg">Get started today</a></p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h2 style="color:#0099CC;">Maths</h2>
            <p><img width="170px" src="https://www.pinclipart.com/picdir/big/538-5380855_geometry-clipart-math-project-mathematics-icon-png-transparent.png" /></p>
            <p><a href="/Math" target="_blank" class="btn btn-info">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2 style="color:#0099CC;">Arabic</h2>
            <p><img width="170px" src="https://icons-for-free.com/iconfiles/png/512/arabic+D8A3+icon-1320085909146531703.png"/></p>
            <p><a href="{{url('Arabic')}}" target="_blank" class="btn btn-info">Learn More &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2 style="color:#0099CC;">English</h2>
            <p><img width="170px" src="https://www.shareicon.net/data/2016/08/18/815259_abc_512x512.png" /></p>
            <p><a href="{{url('English')}}" target="_blank" class="btn btn-info">Learn More &raquo;</a></p>
        </div>
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright © 2019 Tutorial Republic</p>
            </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>