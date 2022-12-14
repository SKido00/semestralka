<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="sem.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">

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

</nav>

<div class="map-responsive">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20852.644796855835!2d18.756820572167978!3d49.208515210689384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471459482d177287%3A0x278378d8bd875274!2zxb1pbGluc2vDoSB1bml2ZXJ6aXRhIHYgxb1pbGluZQ!5e0!3m2!1ssk!2ssk!4v1665487298765!5m2!1ssk!2ssk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



</body>
</html>