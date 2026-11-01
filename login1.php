

<?php




$name = $_POST['name'];
$password = $_POST['password'];


 $con = mysqli_connect('localhost','root','','darko-perfume-bd');

$result = mysqli_query($con , "SELECT * FROM `userlogin` WHERE (username = '$name' OR Email = '$name') AND Password = '$password' ");


session_start();
if(mysqli_num_rows($result)){

    $_SESSION['user'] = $name ; 



       echo"
        <script>
        alert('Login successfully !');
        window.location.href = 'index.php';
        </script>
        ";
}
else{
     echo"
        <script>
        alert('incorrect username/email oe password');
        window.location.href = 'login.php';
        </script>
        ";
}
?>