



<?php

$con = mysqli_connect('localhost','root','','darko-perfume-bd');




if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];



    $dup_email = mysqli_query($con , "SELECT * FROM `userlogin` WHERE Email = '$email' ");
    $dup_username = mysqli_query($con , "SELECT * FROM `userlogin` WHERE username = '$name' ");

    if(mysqli_num_rows( $dup_email)){
        echo"
        <script>
        alert('Thie Email is Already Taken');
        window.location.href = 'register.php';
        </script>
        ";
    }
    if(mysqli_num_rows( $dup_username)){
        echo"
        <script>
        alert('Thie Username is Already Taken');
        window.location.href = 'registar.php';
        </script>
        ";
    }
    else{
        
    mysqli_query($con, "INSERT INTO `userlogin`(`Username`, `Email`, `Number`, `Password`) VALUES ('$name','$email','$number','$password')");

      echo"
        <script>
        alert('Register Successfully');
        window.location.href = 'login.php';
        </script>
        ";
    }


}


?>