<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DARKO - Add product page</title>
    <link rel="stylesheet" href = "admin/css/mystore.css">
    <link rel="stylesheet" href = "admin/css/font.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  


  <!-- <--------------- font awesome ----------->

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style = 'background-color : #E5E1DA; '>


    <nav class ="navbar-1">
        <ul class = "nav-menu">
           <i class="fas fa-user-lock nav-i"></i> 
           
           <li class = "menus"><i class="fas fa-sign-out-alt"></i><a class="menu-link"  href="">Logout</a></li>
           <li class = "menus"><a class="menu-link"  href="./index.php">Userpanel</a></li>
        </ul>

        <label id = "icon"  >
            <i class = "fas fa-bars  icons" ></i>
        </label>


    </nav>



    
    <div class="container-add">
        <form action="insert.php" method = "POST" enctype = "multipart/form-data">
            <div class="product-d">
                <h3 class="product-d-h">PRODUCT  DETAIL</h3>
            </div>

            <div class="main-div">
               <label  class=" l-name ">Product Name : </label>
               <input type="text" name = "pname" class="input-name"  placeholder="Enter Product Name">
            </div>
            
            <div class="main-div">
               <label  class=" l-name ">Product Image : </label>
               <input type="file" name = "pimg" class="input-name" >
            </div>

            <div class="rs-part">
                <div class="price-part">
                    <label  class=" l-mrp ">Product MRP.  </label>
                    <input type="number" name = "pmrp" class="input-price"  placeholder="Enter Product mrp">
                </div>
                <div class="price-part">
                    <label  class=" l-mrp ">Product Price : </label>
                    <input type="number" name = "pprice" class="input-price"  placeholder="Enter Product Price">
                </div>
               
            </div>
                 <div class="main-div">
                   <label  class=" l-name ">Select Page Category : </label>
                   <!-- <input type="file" name = "pname" class="input-name"  placeholder="Enter Product Name"> -->
                   <select  class = "input-name" name="pcategories">
                    <option value="home" >Home</option>
                    <option value="perfumes">Perfumes</option>
                   </select>
                </div>

            <div class="main-div">
               <label  class=" l-name ">Product Short Description : </label>
               <textarea name="psdes" class = "input-name" cols="30" rows="3"  placeholder="Enter Short Description"></textarea>
            </div>
            <div class="main-div">
               <label  class=" l-name "> Description : </label>
               <textarea name="pdes" class = "input-name" cols="30" rows="5"  placeholder="Enter  Description"></textarea>
            </div>
            <div class="main-div">
            <button class = "btn-upload" name = "upload">Upload</button>
            </div>
        </form>
    </div>




<script src="js/mystore.js"></script>

</body>
</html>