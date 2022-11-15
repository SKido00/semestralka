<!DOCTYPE html>
<html lang="en">
<head>
  <title>FLIGHT LIST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="sem.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="ajax/Aircraft_ajax.js"></script>
    <link rel="stylesheet" href="sem.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<div class="btn-group" role="group">
    <button type="button" class="btn btn-dark" onclick="location.href='Login_Form.php'">Login</button>
    <button type="button" class="btn btn-dark" onclick="location.href='Signup_Form.php'">Sign Up</button>
    <button type="button" class="btn btn-dark" onclick="location.href='Map_Page.php'">Map</button>
    <div class="dropdown">
        <button class="dropbtn btn-dark">Flight</button>
        <div class="dropdown-content">
            <a href="#" onclick="location.href='Aircraft_List.php'">Aircraft</a>
            <a href="#" onclick="location.href='FPL_Form.php'">Create Flight Plan</a>
            <a href="#" onclick="location.href='FPL_List.php'">List of Flight Plans</a>
        </div>
    </div>
    <button type="button" class="btn btn-dark" onclick="location.href='About_Page.php'">About</button>
</div>
<div class="container">
  <h2>FPL List</h2>
	<table class="table table-bordered table-sm" >
    <thead>
      <tr>
        <th>Flight</th>
        <th>Aircraft</th>
        <th>ADEP</th>
		<th>ADES</th>
		<th>EET</th>
		<th>Route</th>
      </tr>
    </thead>
    <tbody id="table">
      
    </tbody>
  </table>
</div>
<script>
	$.ajax({
		url: "View_ajax.php",
		type: "POST",
		cache: false,
		success: function(data){
			alert(data);
			$('#table').html(data); 
		}
	});
</script>
</body>
</html>

 