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
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>Bag World | Register</title>
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
                                    <li><a href="tel:+84123456789"><i class="fa fa-phone"></i> +84123456789 </a></li>
                                    <li><a href="mailto:ahkk9866@gmail.com"><i class="fa fa-envelope"></i> bagworld@gmail.com</a></li>
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

                                    <li class=""><a href="#" class="dropdown-toggle function_for_user" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span> Cart <span class="badge">0</span></a>
                                        <div class="dropdown-menu" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-3">Numerical order</div>
                                                        <div class="col-md-3">Items</div>
                                                        <div class="col-md-3">Product's name</div>
                                                        <div class="col-md-3">Price</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body"></div>
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
                                                        <input type="password" class="form-control" onclick="focus(this)" placeholder="Mật khẩu" id="password" required/>
                                                        <p><br/></p>
                                                        <h6><a class="register" href="customer_registration.php"><i>Register for a new account</i></a></h6>
                                                        <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
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
                                    <li class="menuhover"><a href="">Contact</a></li>
                                    <!--                                    <li class="menuhover"><a href="">Giỏ hàng</a></li>-->
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
                    <div class="col-md-2"></div>
                    <div style="
                         position: fixed;
                         margin-top: -196px;
                         margin-left: 1125px;
                         z-index: 9999;" class="col-md-2 col-xs-2" id="signup_msg">
                        <!--                    Hộp thoại thông báo-->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel" style="border-color: #15aeb4;
                             height: 690px;">
                            <div class="panel-heading">
                                <h2 class="center">Register for a new account</h2>
                            </div>
                            <div class="panel-body">

                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="f_name">Name</label>
                                            <input type="text"
                                                   placeholder="Name"
                                                   id="f_name" 
                                                   name="f_name" 
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="f_name">Surname</label>
                                            <input type="text" 
                                                   placeholder="Surname"
                                                   id="l_name" 
                                                   name="l_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="email">Email</label>
                                            <input type="text" 
                                                   placeholder="Email"
                                                   id="email" 
                                                   name="email"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="password">password</label>
                                            <input type="password"
                                                   placeholder="password"
                                                   id="password" 
                                                   name="password"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="repassword">Enter the password</label>
                                            <input type="password"
                                                   placeholder="Enter the password"
                                                   id="repassword" 
                                                   name="repassword"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="mobile">phone number</label>
                                            <input type="text" 
                                                   placeholder="phone number"
                                                   id="mobile" 
                                                   name="mobile"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address1">Address 1</label>
                                            <input type="text" 
                                                   placeholder="Address 1"
                                                   id="address1" 
                                                   name="address1"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address2">Address 2</label>
                                            <input type="text" 
                                                   placeholder="Address 2"
                                                   id="address2" 
                                                   name="address2"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="center">By registering you are agreeing with 
                                                <a class="red" href="#popup1">
                                                    terms of use
                                                </a>
                                                of Bag World </h5>
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input style="float:right;" 
                                                   value="Registration" 
                                                   type="button" 
                                                   id="signup_button" 
                                                   name="signup_button"
                                                   class="btn btn-success btn-lg">
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <aside>
                                <h1 class="picture_video_footer element_footer fadeIn">Video</h1>
                                <iframe 
                                    class="video"
                                    width="260" 
                                    height="163" 
                                    src="https://www.youtube.com/embed/ZDWmadQDIJM?start=9" 
                                    frameborder="0" 
                                    gesture="media" 
                                    allow="encrypted-media" 
                                    allowfullscreen>
                                </iframe>
                            </aside>

                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="element_footer fadeIn">Category</h1>
                                <ul class="category">
                                    <li><a href="" class="category_boder black" ><i class=""></i>The homepage </a> </li>
                                    <li><a href="" class="category_boder black"> <i class = ""></i> Bags </a> </li>
                                    <li><a href="" class="category_boder black"> <i class = ""></i> Backpacks </a> </li>
                                    <li><a href="" class="category_boder black"> <i class = ""></i> Wallet </a> </li>
                                    <li><a href="" class="category_boder black"> <i class = ""></i> Promotion </a> </li>
                                </ul>
                            </aside>

                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="infor_footer element_footer"> We</h1>
                                <a>
                                    <img class="logo_footer" alt="" src="images/logo_footer.gif">    
                                </a>
                            </aside>
                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="contact_footer element_footer">Contact</h1>
                                <address>
                                    <h4 class="center test font_thuphap"> Bag World</h4>
                                    <br>
                                    <h5><a class="phone black" href="tel:9876543210">Divyank 9876543210</a></h5>
                                    <h5><a class="phone black" href="tel:9876543210">Pranav 9876543210</a></h5>
                                    <h5><a class="phone black" href="tel:9876543210">Dhruvi 9876543210</a></h5>
                                </address>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; font-size: x-small">
                Copyright by Nirma. <br>
            </div>
        </footer>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Terms of use</h2>
                <img border="0" src="images/logo1.gif" width="200" height="40" alt="logo">
                <br>
                <a class="close" href="#" style="
                   margin-top: 66px;
                   margin-right: 73px;
                   ">&times;</a>
                <div style="overflow:auto;" class="content">

                    <table border="0" width="100%" cellspacing="0" id="table1">
                        <tbody><tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td bgcolor="#15aeb4">
                                </td>
                            </tr>
                            <tr bgcolor="#EAEAEA"><td><b>terms of use</b></td></tr>
                            <tr bgcolor="#EAEAEA"><td>
                                    1. About the user account: When registering an account, you should provide full information about full name, username, email, ... This is not required information, but when available For future risks and losses, we only accept the cases in which the above information is filled in correctly and completely. Cases of missing information or false information will not be resolved. This information will be used as a basis to support resolution.
                                    If you provide any information that is dishonest or inaccurate, or if we have grounds to suspect that the information is not true or inaccurate, we reserve the right to suspend. to verify or terminate your use of an Account and refuse all current or future use of the Service (or any portion thereof) without liability. any for you.<br>
                                    2. Password of the account: In the account management section, for an account, the user will have a password. Password is used to log into Bag World. If the user forgot his password, he / she can use his email (email) to retrieve the password. Users are responsible for maintaining their own password and email, if the password or email is exposed in any way, Bag World will not be responsible for any losses incurred. br>
                                    3. Items: With one account you can buy many products. If you want large quantities, you can contact us by email<br>
                                    4. Absolutely do not use any programs, tools or any other form to interfere with the website or alter the website's structure (hacking, cheat, bots ...). All violations when detected will be handled in accordance with the law
                                    5. It is strictly forbidden to distribute, propagate or cheer for any activity aimed at interfering with, destroying or entering data of the service as well as the server system.<br>
                                    6. When you find out the error of the website, please notify us via email xyz@gmail.com. <br>
                                    7. Not to have any behavior to illegally log in or attempt to log in illegally as well as cause damage to the server system of the service. All these acts are considered acts of destroying the property of others and will deprive the user of all rights and will be prosecuted before the law if necessary.
                                    8. Do not accept the purchase or sale of items or service account with real money or in kind on and off the website. In the event of a user breach of this term, we do not have any responsibility for the recovery of the item or service. In addition, if we detect infringing accounts, we will lock the account permanently
                                    9. When communicating with other users, you must not harass, swear, disturb or have any lack of culture towards other players.<br>
                                    10. It is strictly forbidden to offend, ridicule others in any form (ridicule, disparage, religion, sex, ethnicity….).
                                    11. It is strictly forbidden to impersonate or intentionally make other people think that you are another user in the system. All violations will be handled or account stripped. <br>
                                    12. Bag World - We will not be responsible for any system problems when you install and use the service.
                                    13. When detecting violations such as using cheats, hacks, or other errors, Bag World reserves the right to use the information you provided when registering for the account to transfer to the authorities for settlement in accordance with regulations. by law. <br>
                                    14. In case of force majeure such as electric shock, hardware, software failure, or natural disaster, etc. the user must accept the damages if any.<br>
                                    15. Bag World reserves the right to delete, correct or change the data, account information in case that person violates the above provisions without the consent of the user.
                                    16. All acts of propagating, defending and misrepresenting the government, political institutions, and state policies are strictly prohibited ... In case of discovery, not only the account is deleted, but we can also provide the person's information to the authorities for legal processing.<br>
                                </td></tr>
                            <tr>
                                <td bgcolor="#15aeb4">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small">
                                    Copyright by Nirma<br>
                                </td>
                            </tr>
                        </tbody></table>
                </div>
            </div>
        </div>

        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>

        <script src="js/jquery.js"></script>
        <script src="js/functions.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
       <!--   <script src="assets/js/bootstrap.min.js"></script>     -->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.li-scroller.1.0.js"></script>
        <script src="assets/js/jquery.newsTicker.min.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/slider.min.js"></script>
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



















