<html>
<head>
<style>
body:before{
    background-image: url('/arabic1.jpg');
    background-repeat: no-repeat;
    background-size:cover;
    position: fixed;
    content: "";
    z-index: -20;
    width: 100%;
    height: 100%;
    top: 0;
    left:-5;
}
.arabic{
    margin-left: 550px;
    margin-top: 50px;
}
button{
    border-radius: 50px;
    padding: 12px 15px;
    background: linear-gradient(180deg,#7e46f0,#9234d1);
    font-size: 20px;
    font-family: Wonderbar;
    cursor: pointer;
    color:white;
    border: none;
}
td{
    padding-top: 80px;
    padding-right: 50px;
}
</style>
</head>
<body>
<table class="arabic">
@foreach($links as $link)

<tr>
<td><iframe width="420" height="315" src="{{$link->link}}" frameborder="0" allowfullscreen></iframe></td>
<td>
<form method="post" action="savemath/{{$link->link}}">
@csrf
<button type="submit">Level {{$link->level}}</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>