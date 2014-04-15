<!DOCTYPE html>
<html>
<head>
	<title>banco de dados - Insert</title>
</head>
<body>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<form class="form-inline" action="insertinto.php" method="post">
		<div class="form-group">
			<label class="sr-only" for="FirstName">First Name</label>
			<input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name">
		</div>
		<div class="form-group">
			<label class="sr-only" for="LastName">Last Name</label>
			<input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</body>
</html>