<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Darko - header</title>
  <!-- <link rel="stylesheet" href="admin/css/mystore.css"> -->
    <link rel="stylesheet" href="css/top.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  
   <!-- <--------------- font awesome ----------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <!-- <---  bootsrap --------------------->
  



</head>
<body style="background: #f1f2f6;">

<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
  $count = count($_SESSION['cart']);
}

?>
<main class = "sticky-top">
 <nav class="navbar navbar-top" id="top-nav">
       <img src="./admin/img/Brown and White Minimalist Perfume Store Logo (1).jpg" class = "logo-b" alt="">


        <ul class = "nav-menu nev-menu1">
         <i class="fas fa-user-lock nav-i"></i> 
         <?php
         if(isset($_SESSION['user'])){
           
           echo $_SESSION['user'];
           echo"<li class = 'menus'><i class='fas fa-sign-out-alt'></i><a class='menu-link'  href='logout.php'>Logout</a></li>";
         }
         else{
             echo"<li class = 'menus'><i class='fas fa-sign-out-alt'></i><a class='menu-link'  href='login.php'>Login</a></li>";
         }
         ?>


            <li class = "menus"><a class="menu-link"  href="veiwcart.php">Cart(<?php echo $count; ?>) <i class="fa-solid fa-cart-plus"></i> </a></li>
           

         
              <li class = "menus"><a class="menu-link"  href="./mystore.php">Admin</a></li>
        </ul>

        <label id = "icon"  >
            <i class = "fas fa-bars  icons icons1" ></i>
        </label>


    </nav>

<header class="navbar navbar-bottom">
    <div class="logo">
      <h3> <span>DAR</span>KO      <p>Luxury Perfume</p>
      </h3>
    </div>
    <input type="checkbox" id= "nav_check" hidden>
    <nav class = "navbar-2 ">
      <ul class = "ul-1">
        <li class = "li-1"><a class = "a-1 " href="index.php"> HOME </a></li>
        <li class = "li-1"><a class = "a-1" href="perfume.php"> PERFUMES </a></li>
        <li class = "li-1"><a class = "a-1" href="about.php"> ABOUT US </a></li>
        <li class = "li-1"><a class = "a-1" href="contact.php"> CONTACT US</a></li>
      </ul>
    </nav>
<label for="nav_check" class = "hamburger">
  <div class ="h-line"></div>
  <div class ="h-line"></div>
  <div class ="h-line"></div>
</label>
</header>

</main>

<script src="js/top.js"></script>


</body>





</html>