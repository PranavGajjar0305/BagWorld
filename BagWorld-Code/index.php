<?php
session_start();
if (isset($_SESSION["uid"])) {
    header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>Home | Bag World</title>
        <?php
        include 'cssfile.php';
        ?>

        <style>
            @media screen and (max-width:480px){
                #search{width:80%;}
                #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
            }
        </style>
    </head>
    <body>
<!--        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>-->

        <!--header-->
        <header id="header">
            <!--header_top-->
            <div class="header_top navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="index.php"><i class="fa fa-home"></i> Bag World</a></li>
                                    <li><a href="tel:+9876543210"><i class="fa fa-phone"></i> 9876543210 </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>

                                    <li class=""><a href="#" id="cart_container1" class="dropdown-toggle function_for_user" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-shopping-cart function_for_user_span">
                                            </span>Cart<span class=""><b style="color:red"> (<?php include 'count_for_guest.php';?>)</b></span></a>
                                        <div class="dropdown-menu" style="width:1002px; margin-left: -908px">
                                            <div style="width: 1000px;" class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-2 col-xs-2"><b>Product</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Items</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Amount</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Update / Delete</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Price</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Total money</b></div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="cart_product1">
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>

                                    </li>
                                    <li>&nbsp</li>
                                    <li class="">
                                        <a href="#" class=" dropdown-toggle function_for_user" data-toggle="dropdown" >
                                            <span class=" glyphicon glyphicon-user function_for_user_span"></span> Log in 
                                        </a>
                                        <ul class="dropdown-menu loginup">
                                            <div style="width:300px;">
                                                <div class="panel panel-primary">
                                                    <h2 class="center">Log in</h2> 
                                                    <div id="" class="panel-heading">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" onclick="focus(this)" placeholder="Email" id="email" required/>  
                                                        <label for="email">Password</label>
                                                        <input type="password" class="form-control"  placeholder="password" id="password" required/>
                                                        <p><br/></p>
                                                        <h6><a class="register" href="customer_registration.php"><i>Register for a new account</i></a></h6>
                                                        <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Log in">
                                                    </div>
                                                    <div style="height: 65px;" class="panel-footer" id="e_msg"></div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row" style="
                         margin-top: 37px;
                         ">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img alt="" src="images/logo1.gif"></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row menu">
                        <div class="col-sm-8">
                            <div class="navbar-header">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class=" mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li class="menuhover"><a  href="index.php">Home page</a></li>
                                    <li class="menuhover"><a href="">Hand bag</a></li>
                                    <li class="menuhover"><a href="">Backpacks</a></li>
                                    <li class="menuhover"><a href="">Wallet</a></li>
                                    <li class="menuhover"><a href="">Promotion</a></li>
                                    <li class="menuhover"><a href="">Information</a></li>
                                    <li class="menuhover"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <input type="text" class="form-control" id="search" >
                            </div>
                            <div>
                                <input  type="button" class="btn btn-primary" id="search_btn" value="Search">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section></section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-12">
                    <div id="get_category" style="border: 0.1px solid #15aeb4;">
                    </div>
                    
                    <div id="get_brand" style="border: 0.1px solid #15aeb4;">
                    </div>
                                        </div>
                <div class="col-md-9 col-xs-12">
                    <div class="row">
                        <h2 class="title text-center">Bag World</h2>
                        <div class="col-md-12 col-xs-12">

                            <div id="wrap-slider" style="height: 350px; width: 847px;">
                                <div id="slider">
<?php include 'Slider.php'; ?>
                                </div><!-- end #slider -->
                            </div><!-- end #wrap-slider  -->
                            <span id="prev-slide">Previous</span><span id="next-slide">Next</span>
                        </div>
                    </div>      
                    <br><br>

                    <div class="row">
                        <h2 class="title text-center">Product</h2>
                        <div style="position: fixed;
                             float: right;
                             margin-left: 834px;
                             margin-top: -685px;" class="col-md-2 col-xs-2" id="product_msg">
                        </div>
                    </div> 
                    <div class="panel panel-info">
                        <!--                        <div class="panel-heading">Products</div>-->
                        <div class="panel-body">
                            <div id="get_product" >
                            </div>
                        </div>
                        <div class="panel-footer">&copy; 2016</div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
    
    <?php
    include 'jsfile.php';
    ?>
    <script type="text/javascript">
        function Focus(object) {
            object.value = "Test";
        }

        function Blur(object) {
            if (object.value == "")
                object.value = "Enter the department";
        }
    </script>

</body>
</html>