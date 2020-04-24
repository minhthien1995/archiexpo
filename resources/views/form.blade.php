<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="{{route("post.menu.add")}}" method="post" accept-charset="utf-8">
	{{ csrf_field() }}
	<label for="">name</label>
	<input type="text" name="menu_name" value="">
	<label for="">link</label>
	<input type="text" name="menu_link" value="">
	<label for="">parent</label>
	<input type="number" name="parent_id" value="">
	<input type="submit" name="" value="them">
</form>	
</body>
</html>