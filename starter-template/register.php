<?php 
include ("model.php");
$connect = new Connect("localhost", "root", "", "Lesson15");

if(isset($_POST['action'])){
  $name=$_POST['name'];
  $surname=$_POST['surname'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $add = new Reg($connect->connect, $name, $surname, $email, $password);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="ca-color" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">oxu.az</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">CONTACTS</a></li>
        <li><a href="login.php">LOG IN</a></li>
        <li><a href="register.php">REGISTER  </a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!-- <div class="container"> -->
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
	    <form class="col s12" method="POST">

	    <h4>REGISTER HERE</h4>
	      <div class="row">
	        <div class="input-field col s6">
	          <input name="name" id="first_name" type="text" class="validate">
	          <label for="first_name">First Name</label>
	        </div>

	        <div class="input-field col s6">
	          <input name="surname" id="last_name" type="text" class="validate">
	          <label for="last_name">Last Name</label>
	        </div>
	      </div>

        <div class="row">
          <div class="input-field col s12">
            <input name="email" id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
	      
	      <div class="row">
	        <div class="input-field col s12">
	          <input name="password" id="password" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	      </div>



	     <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    		<i class="material-icons right">send</i>
  		</button>

	    </form>
  	</div>

    </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
