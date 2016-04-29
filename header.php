<?php
session_start();
include("function.php");
$pagename = basename($_SERVER['PHP_SELF'],'.php');
	
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MET Hotel - BL 2415</title> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/full-width-pics.css" rel="stylesheet">

</head>
<body>

    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MetHotels</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="<?php if($pagename=="index") { echo "active"; }?>">
                        <a href="index.php">About</a>
                    </li>
                    <li  class="<?php if($pagename=="services") { echo "active"; }?>">
                        <a href="#">Services</a>
                    </li>
                    <li  class="<?php if($pagename=="contact") { echo "active"; }?>">
                        <a href="#">Contact</a>
                    </li>
					<?php
					if(!isset($_SESSION['username'])){
					 echo '<li  class="';
					 if($pagename=="login") { 
						echo "active"; 
					 }
					 echo'"><a href="login.php">Login</a></li>';
					  echo '<li  class="';
					 if($pagename=="register") { 
						echo "active"; 
					 }
					 echo'"><a href="register.php">Register</a></li>';
					}else{
						
						echo '<li><a href="logout.php">Logout</a></li>';
					}
					?>
                </ul>
				<?php
				if(isset($_SESSION['username'])){
				?>
				 <ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username']; ?></a></li>
				</ul>
				<?php
				}
				?>
            </div>
            
        </div>
        
    </nav>

    
    <header class="image-bg-fixed-height-1">
        
    </header>

    