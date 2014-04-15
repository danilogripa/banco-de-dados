<!DOCTYPE html>
<html>
<head>
	<title>Banco de Dados - Update</title>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<form class="form-inline" action="updateset.php" method="post">
  <div class="form-group">
    <label class="sr-only" for="FirstName">First Name</label>
    <input type="text" class="form-control" id="FirstName" name="NewFirstName" value="<?php //echo $row['FirstName'];?>">
  </div>
  <div class="form-group">
    <label class="sr-only" for="LastName">Last Name</label>
    <input type="text" class="form-control" id="LastName" name="NewLastName" value="<?php //echo $row['LastName'];?>">
  </div>
  	<input type="hidden" id="id" name="id" value="<?php //echo $row['id'];?>">
  <button type="submit" class="btn btn-default">Submit</button>
</form>

</body>
</html>