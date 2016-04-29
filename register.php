<?php
include("header.php");
$login = 0;
$poruka = "";
if(isset($_SESSION['username'])){
	header("Location: index.php");
}

if(isset($_POST['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];
	if(strlen($username) < 5){
		$poruka .= "Username mora imati makar 5 karaktera<br/>";
		$login = 1;
	}
	if(strlen($password) < 5){
		$poruka .= "Password mora imati makar 5 karaktera";
		$login = 1;
	}
	if($poruka == ""){
		if(dodajKorisnik($username,$password)){
			$_SESSION['username'] = $username;
			header("Location: index.php");
		}else{
			$poruka = "Postoji vec korisnik sa ovim usernameom";
			$login = 1;
		}
	}
}

?>

    
    <div class="container">
	
	<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 col-xs-offset-0">
	<?php
		if($login == 1){
			
			echo '<div class="alert alert-danger">'.$poruka.'</div>';
		}
	?>
      <form class="form-signin" method="POST" action="register.php">
        <h2 class="form-signin-heading">Please register</h2>
        <label for="user" class="sr-only">Username</label>
        <input id="user" name="user" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="pass" class="sr-only">Password</label>
        <input id="pass" name="pass" class="form-control" placeholder="Password" required="" type="password">
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Register</button>
      </form>
	  
	 </div>

    </div>

    
<?php
include("footer.php");
?>
