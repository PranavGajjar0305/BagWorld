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
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div style="
                         position: fixed;
                         margin-top: -196px;
                         margin-left: 1125px;
                         z-index: 9999;" class="col-md-2 col-xs-2" id="signup_msg">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel" style="border-color: #15aeb4;
                             height: 720px;">
                            <div class="panel-heading">
                                <h2 class="center">Register for payment information</h2>
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
                                                   class="form-control"><br>
                                            
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
                                                <a class="red" href="dieukhoan.php">
                                                    terms of use
                                                </a>
                                                of the Bag World</h5>
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input style="float:right;" 
                                                   value="Registration" 
                                                   type="button" 
                                                   id="signup_button1" 
                                                   name="signup_button1"
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
        <div id=""></div>
        <?php include 'jsfile.php'; ?>

    </body>
</html>