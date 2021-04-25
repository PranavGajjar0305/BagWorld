<?php
session_start();
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>Cart| <?php echo "" . $_SESSION["name"]; ?></title>
        <?php
        include 'cssfile.php';
        ?>

    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <header id="header"><!--header-->
            <div class="header_top navbar-fixed-top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="index.php"><i class="fa fa-home"></i> Bag World</a></li>
                                    <li><a href="tel:+9876543210"><i class="fa fa-phone"></i> +9876543210 </a></li>
                                    <li><a href="mailto:bagworld@gmail.com"><i class="fa fa-envelope"></i> bagworld@gmail.com</a></li>
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

                                    <li><a style="height: 37px;" href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span>Cart<span class="badge"> 0</span></a>
                                        <div class="dropdown-menu function_for_user" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                       <div class = "col-md-3 col-xs-3"> Order number </div>
                                                        <div class = "col-md-3 col-xs-3"> Item </div>
                                                        <div class = "col-md-3 col-xs-3"> Product name </div>
                                                        <div class = "col-md-3 col-xs-3"> Price </div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="cart_product">
                                                        
                                                    </div>
                                                </div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>&nbsp</li>
                                    <li><a style="height: 37px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user function_for_user_span"></span><?php echo "Hi, " . $_SESSION["name"]; ?></a>
                                        <ul style="height: 130px;" class="dropdown-menu">

                                            <li><a href="cart.php" style="font-size: 17px; text-decoration:none; color:blue;"><span class="fa fa-archive"> Cart </a></li>
                                            <li><a href="#popup1" style="font-size: 17px; text-decoration:none; color:blue;"><span class="fa fa-refresh"> Change the password</a></li>

                                            <li><a href="logout.php" style="font-size: 17px; text-decoration:none; color:blue;"><span class="fa fa-reply"> Log Out</a></li>
                                        </ul>
                                    </li>
        <!--                                    <li><a href="customer_registration.php" class="function_for_user"<span class="glyphicon glyphicon-user function_for_user_span"></span>Đăng kí</a></li>-->

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
                                  <li class = "menuhover"> <a href="index.php"> Home </a> </li>
                                    <li class = "menuhover"> <a href=""> Handbags </a> </li>
                                    <li class = "menuhover"> <a href=""> Backpacks </a> </li>
                                    <li class = "menuhover"> <a href=""> Wallet </a> </li>
                                    <li class = "menuhover"> <a href=""> Promotions </a> </li>
                                    <li class = "menuhover"> <a href=""> Info </a> </li>
                                    <li class = "menuhover"> <a href="contact.php"> Contact </a> </li>
                                    <!--                                    <li class="menuhover"><a href="">Cart</a></li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <!--                            <div class="">
                                                            <input type="text" class="form-control" id="search" >
                                                        </div>
                                                        <div>
                                                            <input type="button" class="btn btn-primary" id="search_btn" value="Search">
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-2 col-xs-2" id="cart_msg" style="
                         position:  fixed;
                         margin-left: 1126px;
                         margin-top: -197px;
                         z-index: 9999;
                         ">
                        <!--Cart Message--> 
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Cart</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class = "col-md-2 col-xs-2"> <b> Items </b> </div>
                                    <div class = "col-md-2 col-xs-2"> <b> Product name </b> </div>
                                    <div class = "col-md-2 col-xs-2"> <b> Quantity </b> </div>
                                    <div class = "col-md-2 col-xs-2"> <b> Delete / Update </b> </div>
                                    <div class = "col-md-2 col-xs-2"> <b> Product price </b> </div>
                                    <div class = "col-md-2 col-xs-2"> <b> Price </b> </div>
                                </div>
                                <div id="cart_checkout"></div>
                                
                            </div> 
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
                <div class="col-md-2"></div>

            </div>

        </section>
        <?php include 'footer.php'; ?>
        <div id="popup1" class="overlay">
            <div class="popup_changepassword">
                <h2>Change Password</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form method="POST">
                        <label for="">Old Password</label>
                        <input type="password" class="form-control" placeholder="Old Password" id="oldpass" name="oldpass" required/>
                        <label for="">New Password</label>
                        <input type="password" class="form-control" placeholder="New Password" id="newpass" name="newpass" required/>
                        <label for="">Enter a new password</label>
                        <input type="password" class="form-control" placeholder="Enter a new password" id="retypenewpass" name="retypenewpass" required/>
                        <p><br/></p>
                        <div id="changepass_message"></div>
                        <input type="button" class="btn btn-success" style="float:right;" id="change" name="change" value="Change Password">
                    </form>
                </div>
            </div>
        </div>
        <?php
        include 'jsfile.php';
        ?>
        <script>
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
















