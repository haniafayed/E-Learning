<html>
<head>
<link rel="stylesheet" href="{{asset('customStyle/css/bootstrap.min.css')}}">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('customStyle/js/bootstrap.min.js')}}"></script>
<style>
body{
    background: linear-gradient(180deg,#0097a7 ,#80deea);
}
.my-table{
    width: 300px;
    margin-left: 600px;
    margin-top: 200px;
    padding: 22px 25px;
    border-radius: 20px;
}
</style>
</head>
<body>
<table  class="table table-striped table-dark table-hover my-table">
<thead>
<tr>
<th class="text-center">Search Results<th>
</tr>
</thead>
<tbody>
@foreach($friends as $friend)
<tr>
<td>{{$friend->name}}</td>
<td><form method="post" action="/follow/{{$friend->id}}">
@csrf 
<input type="submit" name="follow" value="Follow"/></form></td>
</tr>
@endforeach
</tbody>
</table>

</body>
</html>