<!DOCTYPE html>
<html>
<head>
	<title>create a user</title>
</head>
<body>
	<h1>Create a User</h1>
	<form method="POST" action="/users">
		{{ csrf_field() }}
		<p><input type="text" name="name" placeholder="Name"></p>
		<p><input type="email" name="email" placeholder="Email"></p>
		<p><input type="password" name="password" placeholder="Password"></p>
		<p><button type="submit">Submit</button></p>
	</form>
</body>
</html>