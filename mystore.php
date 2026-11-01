<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DARKO - Admin </title>
    <link rel="stylesheet" href="admin/css/font.css">
    <link rel="stylesheet" href="admin/css/mystore.css">
<!-- 

<script src="https://code.jquery.com/jquery-migrate-3.4.1.js"></script>
  <script>
    $(document).ready(function(){
        $('#icon').click(function(){
            $('ul').toggleClass('.show')
        });
    });
  </script> -->

   <!-- <--------------- font awesome ----------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  
  <!-- <---  bootsrap --------------------->
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  

</head>


<?php

session_start();
if(!$_SESSION['admin']){
  header("location:form/login.php");
}

?>
<body>
    <nav class ="navbar-1">
       <!-- <label for="" class="logo"><h1 class = "">sellingio</h1></label> -->
       
       <img src="admin/img/darko-logo.jpg" class= "brand-logo logo" alt="image not found">
  
        <ul class = "nav-menu">
        
            <i class="fas fa-user-lock nav-i"></i> 
         <?php echo $_SESSION['admin'];?>

        
           
           <li class = "menus"><i class="fas fa-sign-out-alt"></i><a class="menu-link"  href="./form/logout.php">Logout</a></li>
           <li class = "menus"><a class="menu-link"  href="./index.php">Userpanel</a></li>
        </ul>

        <label id = "icon"  >
            <i class = "fas fa-bars  icons" ></i>
        </label>


    </nav>

    <div class="container-tab">
        <div class="tabs">
            <h5 class = "tabhead active-1">Product</h5>
            <h5 class = "tabhead">Orders</h5>
            <h5 class = "tabhead">Vendor</h5>
            <h5 class = "tabhead">Users</h5>
            <h5 class = "tabhead">FeedBack</h5>
        </div> 
        <div class="tab-control"> 
            <!-- ######### first -->
             <div class = "active-1 tab-div ak">
                <div class="product-part">
                <h5 class = "tab-menu" > Product </h5>
                 <h4 class = "add-p"><a href="product.php" class = "add-a"><i class="fa-solid fa-plus"></i>   Add Product</a></h4>

                 </div>

                  <!-- ftach data    --------------------------------------- -->
                  <div class="container5">
              
                <div class="table-responsive">
                   <table class="table shadow">
                      <thead class = "table-primary color" >
                        <th  class = "text-center"  style="background-color: #ab8e66;color: #fff; ">ID</th>
                        <th class = "text-center" style="background-color: #ab8e66;color: #fff; " >CATEGORIES</th>
                        <th class = "text-center"  style="background-color: #ab8e66;color: #fff; ">NAME</th>
                        <th class = "text-center" style="background-color: #ab8e66;color: #fff; " >IMAGE</th>
                        <th class = "text-center"  style="background-color: #ab8e66;color: #fff; ">MRP</th>
                        <th class = "text-center"  style="background-color: #ab8e66;color: #fff; ">PRICE</th>
                        <th class = "text-center"  style="background-color: #ab8e66;color: #fff; ">DELETE </th>
                      </thead>
                      <tbody>
                        <?php
                        include 'config.php';
                        $record = mysqli_query($con , " SELECT * FROM `product data` " );
                        
                       // $row = mysqli_fetch_array($record); // only one data fetch from data base

                       //multipal data
                       $pno = 0;
                       while($row = mysqli_fetch_array($record)){

                       echo "
                        <tr>
                        <td class = 'text-center'> ";?> <?php echo ++$pno ; ?> <?php echo "</td>

                        <td  class = 'text-center'>$row[PCATEGORY]</td>

                        <td  class = 'text-center'>$row[PNAME] </td>

                        <td  class = 'text-center'><img src='$row[PIMAGE] ' height='100px' weight='100px'></td>


                        <td  class = 'text-center'> $row[PMRP]</td>

                        <td  class = 'text-center'>$row[PPRICE]</td>

                        <td  class = 'text-center'><a href='admindelete.php? ID=$row[ID]'><i class='fa-solid fa-trash fa-xl' style='color: #f93e3e;'></i></a></td>
                      </tr>
                 
                       ";
                       }
                        ?>
                      </tbody>


                   </table>
                 </div>
          </div>
     </div>
       
                
  <!-- ------ -->

           
    <!-- ----------------------------order table----------------------/ -->

          
                  <div class = "tab-div ak">
                    
                   <div class="container5">
                         <h1 class = "admin-t-h">ORDERS TABLE</h1>
                <div class="table-responsive mt-5">
                   <table class="table">
                      <thead  class = "table-primary " >
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">ID</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">product_NAME</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">Price</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">C_name</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">C_city</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">C_state</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">C_zip</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">C_no.</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">P_Method.</th>                        
                      </thead> 

                      <tbody>
                         <?php
                        include 'config.php';
                        $orecord = mysqli_query($con , " SELECT * FROM `order_data`  " );
                        $arow_count = mysqli_num_rows($orecord);
                        
                       // $row = mysqli_fetch_array($record); // only one data fetch from data base

                       //multipal data
                       $ono = 0;
                       while($row = mysqli_fetch_array($orecord)){

                       echo "
                        <tr>
                        <td class = 'text-center p-3' > ";?> <?php echo ++$ono ; ?> <?php echo "</td>
                        <td class = 'text-center'>$row[product_name]</td>
                        <td class = 'text-center'>$row[product_price] </td>
                        <td class = 'text-center'>$row[customer_name]</td>
                        <td class = 'text-center'>$row[city]</td>
                        <td class = 'text-center'>$row[state]</td>
                        <td class = 'text-center'>$row[postcode]</td>
                        <td class = 'text-center'>$row[number]</td>
                        <td class = 'text-center'>$row[payment_method]</td>
                      </tr>
                 
                       ";
                       }

                        ?>
                   </table>
                   <div class="usertablecontainer">
                   <div class = "usercount">
                    <h3>Total Orders</h3>
                    <h3><?php  echo  $arow_count;  ?></h3>
                   </div>
                   </div>
            </div>
            </div>
            </div> 

  <!-- ------ -->

            <!-- -------vendor--------- -->
          
                  <div class = "tab-div ak">
                   <div class="container5">
                    <h1 class = "admin-t-h">ADMIN TABLE</h1>
              
                <div class="table-responsive mt-5">
                   <table class="table">
                      <thead  class = "table-primary " >
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">ID</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">A.NAME</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">PASSWORD</th>
                        <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">MOBILR.NO</th>
                        
                      </thead>  
                      <tbody>
                         <?php
                        include 'config.php';
                        $vrecord = mysqli_query($con , " SELECT * FROM `vandor`  " );
                        $arow_count = mysqli_num_rows($vrecord);
                        
                       // $row = mysqli_fetch_array($record); // only one data fetch from data base

                       //multipal data
                       $vno = 0;
                       while($row = mysqli_fetch_array($vrecord)){

                       echo "
                        <tr>
                        <td class = 'text-center'> ";?> <?php echo ++$vno ; ?> <?php echo "</td>
                        <td class = 'text-center'>$row[username]</td>
                        <td class = 'text-center'>$row[upassword] </td>
                        <td class = 'text-center'>$row[mobile_no]</td>
                     
                      </tr>
                 
                       ";
                       }

                        ?>
                      </tbody>
                   </table>
                    <div class="usertablecontainer">
                   <div class = "usercount">
                    <h3>Total Vendor</h3>
                    <h3><?php  echo  $arow_count;  ?></h3>
                   </div>
                   </div>
            </div>
            </div>
            </div>
  <!-- ------ -->

<!-- ----------------- user-------------------------- -->


   <div class = "tab-div ak">
                   <div class="container5">
                    <h1 class = "admin-t-h">USER TABLE</h1>
              
                <div class="table-responsive mt-5">
                   <table class="table">
                      <thead  class = "table-primary">
                        <th class = 'text-center'  style="background-color: #ab8e66;color: #fff; ">ID</th>
                        <th class = 'text-center'  style="background-color: #ab8e66;color: #fff; ">USER NAME</th>
                        <th class = 'text-center'  style="background-color: #ab8e66;color: #fff; ">USER EMAIL</th>
                        <th class = 'text-center'  style="background-color: #ab8e66;color: #fff; ">PASSWORD</th>
                        <th class = 'text-center'  style="background-color: #ab8e66;color: #fff; ">MOBILR.NO</th>
                        <th class = 'text-center'  style="background-color: #ab8e66;color: #fff; ">DELETE USERS</th>
                        
                      </thead>
                      <tbody>
                         <?php
                        include 'config.php';
                        $urecord = mysqli_query($con , " SELECT * FROM `userlogin` WHERE 1" );
                        $urow_count = mysqli_num_rows($urecord);
                        
                       // $row = mysqli_fetch_array($record); // only one data fetch from data base

                       //multipal data
                       $uno = 0;
                       while($row = mysqli_fetch_array($urecord)){


                        echo "
                        <tr>
                        <td class = 'text-center p-3'> ";?> <?php echo ++$uno ; ?> <?php echo " </td>
                        <td class = 'text-center'>$row[username]</td>
                        <td class = 'text-center'>$row[Email]</td>
                        <td class = 'text-center'>$row[Password] </td>
                        <td class = 'text-center'>$row[Number]</td>
                        <td class = 'text-center'><a href='userdelete.php? ID=$row[id] '><i class='fa-solid fa-trash fa-xl' style='color: #f93e3e;'></i></a> </td>
                     
                      </tr>
                 
                       ";
                       }
     ?>
                      </tbody>
                   </table>

                   <div class="usertablecontainer">
                   <div class = "usercount">
                    <h3>Total Users</h3>
                    <h3><?php  echo  $urow_count;  ?></h3>
                   </div>
                   </div>
            </div>
            </div>
            </div>







            <!-- ------------ -->






                 
    <!-- ----------------------------order table----------------------/ -->

          
    <div class = "tab-div ak">
                    
                    <div class="container5">
                          <h1 class = "admin-t-h">FEEDBACK TABLE</h1>
                 <div class="table-responsive mt-5">
                    <table class="table">
                       <thead  class = "table-primary " >
                         <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">ID</th>
                         <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">Customer Name</th>
                         <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">Customer Email</th>
                         <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">Customer No</th>
                         <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">Customer Message</th>
                          <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">Delete</th>
                         <!-- <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">C_zip</th>
                         <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">C_no.</th>
                         <th class = 'text-center' style="background-color: #ab8e66;color: #fff; ">P_Method.</th>                         -->
                       </thead> 
 
                       <tbody>
                          <?php
                         include 'config.php';
                         $orecord = mysqli_query($con , " SELECT * FROM `customer_msg`  " );
                         $arow_count = mysqli_num_rows($orecord);
                         
                        // $row = mysqli_fetch_array($record); // only one data fetch from data base
 
                        //multipal data
                        $ono = 0;
                        while($row = mysqli_fetch_array($orecord)){
 
                        echo "
                         <tr>
                         <td class = 'text-center p-3' > ";?> <?php echo ++$ono ; ?> <?php echo "</td>
                         <td class = 'text-center'>$row[cname]</td>
                         <td class = 'text-center'>$row[cemail] </td>
                         <td class = 'text-center'>$row[cno]</td>
                         <td class = 'text-center'>$row[cmsg]</td>
                         <td class = 'text-center'><a href='feedbackdelete.php? ID=$row[id] '><i class='fa-solid fa-trash fa-xl' style='color: #f93e3e;'></i></a> </td>
                       </tr>
                  
                        ";
                        }
 
                         ?>
                    </table>
                    <div class="usertablecontainer">
                    <div class = "usercount">
                     <h3>Total FeedBack</h3>
                     <h3><?php  echo  $arow_count;  ?></h3>
                    </div>
                    </div>
             </div>
             </div>
             </div> 
 
   <!-- ------ -->
 




        </div>
    </div>  

  </div>




<script src="admin/js/mystore.js"></script>



</body>
</html>


