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
	<h2>{{ $employee->name }}'s Information</h2>
	<hr>
	<div class="col-sm-6">
		<form action="/update/{{ $employee->id }}"  method="post" enctype="multipart/form-data">
		<table class="table table-bordered table-hover">
			<tr>
			   <div class="form-group">		   	 
					<th>Name</th>
					<td>
					   <input type="text" name="name" value="{{ $employee->name }}" class="form-control" required />
					   <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</td>
			   </div>
			</tr>
			<tr>
			    <div class="form-group">		   	 
					<th>Address</th>
				    <td>
				        <textarea name="address" class="form-control" required>{{ $employee->address }}</textarea>
				        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
				    </td>
			   </div>
			</tr>
			<tr>
			    <div class="form-group">		   	 
					<th>Salary</th>
					<td>
						<input type="number" class="form-control" name="salary" value="{{ $employee->salary }}" required />
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</td>
			   </div>	
			</tr>
			<tr>
			    <div class="form-group">		   	 
					<th>Email</th>
					<td>
						<input type="email" name="email" value="{{ $employee->email }}" class="form-control" required />
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</td>
			   </div>	
			</tr>
			<tr>
			    <div class="form-group">		   	 
					<th>Password</th>
					<td>
						<input type="text" name="password" value="{{ $employee->password }}" class="form-control" required />
						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</td>
			   </div>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" name="submit" value="UpdateInfo"></td>
			</tr>
		</table>
	</form>
	</div>
</center> 
</div>
</body>
</html>