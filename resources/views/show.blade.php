<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-sm-12">
<center>
	<h2>Employee Information</h2>
	<hr>
	<div class="col-sm-8">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Name</th>
					<th>Address</th>
					<th>Salary</th>
					<th>Email</th>
					<th>Password</th>
					<th>Created At</th>
					<th>EDIT</th>
					<th>DELETE</th>
				</tr>
			</thead>
			<tbody>
			   @foreach($employees as $Key => $employee)
				<tr>
					<td>{{ $employee->name }}</td>
					<td>{{ $employee->address }}</td>
					<td>{{ $employee->salary }}</td>
					<td>{{ $employee->email }}</td>
					<td>{{ $employee->password }}</td>
					<td>{{ $dt[$Key] }}</td>
					<td><a href="/edit/{{ $employee->id }}">EDIT</a></td>
					<td><a href="/delete/{{ $employee->id }}">DELETE</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<br>
	    <h3><a href="create">Create New Employee</a></h3>
	</div>
</center> 
</div>
</body>
</html>