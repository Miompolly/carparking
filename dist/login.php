
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

 <form action="" class="search-bar-container">
    <input type="text" class="search" id="search-bar" placeholder="Search here ...">
    <label for="search-bar" class="fas fa-search"></label>
 </form>
 </header>

 <div class="sign-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <form action="" id="form-signup">
        <h3>Login form</h3>
        
        <input type="email" class="box" id="semail" placeholder="Enter your Email">
        <input type="password" class="box" id="spassword" placeholder="Enter your Password">
        <!-- <input type="submit" value="Sign up" class="btn"> -->
        <button class="btn" id="login">Login</button>

       
        <p>Have account ? <a href="signup.php">Register</a></p>

    </form>
 </div>

 


<!-- /* home section starts */ -->


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


    <script src="main.js"></script>
    <!-- <script src="auth.js"></script> -->
</body>
</html> 