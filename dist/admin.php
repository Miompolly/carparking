

<?php
$con = mysqli_connect('localhost', 'root', '', 'carp');

if (!$con) {
    echo 'not connected';
} else {
 

    if (isset($_POST['signup'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        // header('LOCATION:home.php');

        if ($password != $cpassword) {
        // 

       echo "Password didnot match";
        } else {


            $sqll=mysqli_query($con,"SELECT * FROM client WHERE email='$email'");
            if(mysqli_num_rows($sqll)>0){
                echo "Email already used";
                header('LOCATION:signup.php');
            }
            else{
             $sql = "INSERT INTO client(fname,lname,email,addres,pasword)values('$fname','$lname','$email','$address','$password')";
            $result = mysqli_query($con, $sql);
            if ($result) {
                header('LOCATION:home.php');
            } else {
                die(mysqli_error($con));
            }

            }
           
        }

    
    }
}
?>

