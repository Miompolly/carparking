

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iwawe hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<header>
        <div id="menu-bar" class="fas fa-bars"></div>
<a href="index.php" class="logo"><span>Rwanda  Car </span>Parking Booking</a>
<nav class="navbar">
    <a href="signup.php">Register</a>
    <a href="login.php">Login</a>
    

</nav>

 <form action="admin.php" class="search-bar-container">
    <input type="text" class="search" id="search-bar" placeholder="Search here ...">
    <label for="search-bar" class="fas fa-search"></label>
 </form>
 </header>

 <div class="sign-form-container">
    
    <form action="admin.php" id="form-signup" method="POST" autocomplete="off">
        <h3>Sign up</h3>
        
        <input type="text" class="box" name="fname" placeholder="Enter your First name" required>
        <input type="text" class="box" name="lname" placeholder="Enter your Last Name" required >
        <input type="email" class="box" name="email" placeholder="Enter your Email" required>
        <input type="text" class="box" name="address" placeholder="Enter your Address" required>
        <input type="password" class="box" name="password" placeholder="Enter your Password" required>
        <input type="password" class="box" name="cpassword" placeholder="Confirm Password" required>
   
        
        <!-- <input type="submit" value="Sign up" class="btn"> -->
        <button class="btn" id="signup" name="signup">Sign Up</button>

        <p>Have account ? <a href="login.php">Login now</a></p>

    </form>
 </div>

 

 <section class="home" id="home">
<div class="content">
        <h3>Welcome Rwanda Car parking Booking</h3>
        <p>Deal  with us ,Great things are waiting for you ...</p>
        <a href="#" class="btn">Come you will get more</a>
    </div>

<div class="cotv">
    <div class="controls">
        <span class="vid-btn active" data-src="vdeo/vi3.mp4"></span>
        <!-- <span class="vid-btn" data-src="vdeo/v11.pm4"></span> -->
        <span class="vid-btn" data-src="vdeo/v9.mp4"></span>
        <span class="vid-btn" data-src="vdeo/v6.mp4"></span>
        <span class="vid-btn" data-src="vdeo/vi5.mp4"></span>
    
    </div>
    
    <div class="video-container">
        <video src="vdeo/vi3.mp4" id="video-slider" loop autoplay muted></video>
    </div>
    
</div>
</section>



</body>
</html> 