
<?php
        if(isset($_POST['add_product'])){
            @include 'config.php';
           $selectd_value = $_POST['category'] ;
           $name = $_POST['title'];
           $price = $_POST['product_price'];
           $image = $_FILES['product_image']['name'];
           $image_tmp_name = $_FILES['product_image']['tmp_name'];
           $image_folder ='img/'.$image ;
           $selectd_value3 = $_POST['size'];
           $quantity = $_POST['product_quantity'];
           $discription = $_POST['discription'];
            if(empty($selectd_value) || empty($selectd_value3) || empty($name) || empty($price) || empty($image) || empty($quantity) || empty($discription)){
                $message_null = '<h3 style="color:red;" class="text-center">please fill out all</h3>';
                echo $message_null;
//                $null = 1;
//                echo '<script>Messagenull()</script>';
            }else{
                $insert = "INSERT INTO product(category,name,price,photo,size,quantity,discription) VALUES('$selectd_value','$name','$price','$image','$selectd_value3','$quantity','$discription')";
                $upload = mysqli_query($conn,$insert);
                if($upload){
                    move_uploaded_file($image_tmp_name, $image_folder);
                    $message_done = '<h3 style="color:green;" class="text-center">Product Added Sucessfully</h3>';
                    echo $message_done;
                }else{
                    $message_no = '<h3 style="color:red;" class="text-center">Did Not Added</h3>';
                    echo $message_no; 
                } 
//                $null = 0;
//                echo '<script>Messagenull()</script>';
            }
        }
       ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
<!--    <script src="admin.js"></script>-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <style>

    .btn{
        
    }
    </style>
</head>
<body>
    <h1 class="text-center">ADMIN</h1>
    <div class="container">
   <div class="admin-product-form-container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new product</h3>
         <select class="box" name="category">
             <option>Select the category</option>
             <option value="men">Men</option>
             <option value="women">Women</option>
        </select>

         <input type="text" placeholder="Enter Product Name" name="title" class="box">
         <!-- product name means mens chino pant-brown.mens chino pant-red like wiseeee-->
         <input type="number" placeholder="Enter Product Price" name="product_price" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
        <select class="box" name="size">
            <option>Select the Product Size</option>
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
            <option value="xxl">XXL</option>
        </select>
         <input type="number" placeholder="Enter Product Quantity" name="product_quantity" class="box">
         <input type="text" placeholder="Enter Product Discription" name="discription" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>
   </div>
  </div>
    
    <!-- by using database selecting the things we enterd by adding products -->
    <?php
   $select = mysqli_query($conn,"SELECT * FROM product");
   ?>
    <!-- throw the database connection selecting the data and store them in to a variable -->
    <div class="container">
        <?php while($row = mysqli_fetch_assoc($select)){?>
        <!--opening { bracket-->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <img src="img/<?php echo $row['photo'];?>" height="100" alt="">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <h3>Category : <?php echo $row['category'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <h3>Name : <?php echo $row['name'];?></h3>
                <br>
                <h3>Price : <?php echo $row['price'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                <h3>Size : <?php echo $row['size'];?></h3>
                <h3>Quantity : <?php echo $row['quantity'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <h3>Note : <?php echo $row['discription'];?></h3>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <button class="btn btn-primary">Update</button>
                <button class="btn">Remove</button>
            </div>
        </div>
        <?php } ?>
<!--closing that opend } bracket-->
    </div>
</body>
</html>


