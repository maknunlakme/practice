<!DOCTYPE html>
<html>
<head>
	<title>show user</title>
</head>
<body>
	<h1>USER</h1>
	<table>
		<tr>
			<th>user name</th>
			<th>user email</th>
		</tr>
		@foreach($users as $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>