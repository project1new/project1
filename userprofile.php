<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Banner-Heading-Image-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
    <link rel="stylesheet" href="userprofile.css">

     
</head>

<body> 

    <nav class="navbar navbar-light navbar-expand-lg" style="background-color:#87CBB9">
        &ensp;
        <a href="" class="navbar-brand"><img src="src_images/logo new.png" style="width:50px; height:50px;"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav_tings"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="nav_tings">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="#"class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Cart</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Customize Products</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Wishlist</a></li>
                <li class="nav-item"><a href="#" class='fas fa-user-circle nav-link d-flex'>Login</a></li>
            </ul>
        </div>
    </nav>

    <div class="container-xl px-4 mt-4">
     
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4" >
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0" style="background-color:#F5F5F5">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" src="https://t4.ftcdn.net/jpg/02/22/39/63/240_F_222396357_KlP0TQwV3X1U6rJWzlLcIpJ7ZLpxGcQR.jpg" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Upload new image</button>
                </div>

                 


            </div>

            
        </div>


        
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4"  style="background-color:#F5F5F5">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">Username </label>
                            <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value=" ">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">First name</label>
                                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value=" ">
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">Last name</label>
                                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value=" ">
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (Address)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">Address</label>
                                <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value=" ">
                            </div>
                            
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder=" " value=" ">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value=" ">
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value=" ">
                            </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-primary" type="button">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




    <!-- fotter -->
<hr>
<div class="container-fluid back">
 <div class="row">
     <div class="col-12 col-md-3">
         <img src="src_images/logo new.png" style="width:200px; height:200px;">
     </div>
     <div class="col-md-3">
         <h6>Contact us</h6>
         <a href="#" class="fa fa-facebook"></a>&ensp;&ensp;
         <a href="#" class="fa fa-twitter"></a>&ensp;&ensp;
         <a href="#" class="fa fa-instagram"></a>&ensp;&ensp;
         <a href="#" class="fa fa-google"></a>&ensp;&ensp;
         <a href="#" class="fa fa-linkedin"></a><br><br>
         <a href="mailto:sanjayakasun44@gmail.com" class="d-flex" style="Text-decoration:none;"><span class="material-symbols-outlined">mail</span>vestario@gmail.com</span>&ensp;</a>
         <a href="#" class="d-flex" style="Text-decoration:none;"><span class="material-symbols-outlined">call</span>&ensp;0712209112</a>
         <a href="#" class="d-flex" style="Text-decoration:none;"><span class="material-symbols-outlined">call</span>&ensp;0716123050</a>
     </div>
     <div class="col-md-3">
         <h6>
             Services
         </h6>
         <ul>
             <a href="" style="text-decoration:none; color:black"><li>Customize products</li></a>
             <a href="" style="text-decoration:none; color:black"><li>Order Clothes</li></a>
             <a href="" style="text-decoration:none; color:black"><li>Delivery</li></a>
             <a href="" style="text-decoration:none; color:black"><li>Sign-up</li></a>
             <a href="" style="text-decoration:none; color:black"><li>Help</li></a>
         </ul>
     </div>
     <!-- <div class="col-md-3">
         <h6>
             About us
         </h6>
         <p>    
         Welcome to our online clothing store,  When we consider the past era of the apparel industry they had the opportunity to sell their 
         products only from the physical stores. 
         Online shopping platforms often provide customer reviews and ratings for products. This 
        allows customers to read feedback from other buyers, helping them make informed 
        decisions about the quality, fit, and overall satisfaction of the products. 
         </p>
     </div> -->
 </div>
</div>
<hr>
<div class="container-fluid back">
 <div class="row">
     <div class="col-12 col-md-6">
         <h6>This site is protected by Google Privacy Policy and Terms of Service apply.</h6>
     </div>
     <div class="col-md-6">
         <h6 class="text-center">&copy;2023 VESTARIO Technologies</h6>
    </div>
 </div>
 </div>
 <hr><hr>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


    
</body>

</html>