<?php include('header.php') ?>
   <?php
$href = '';
if(isset($_GET['cs'])) {
    $success = 'Send successfully';
}
else {
    $success = '';
}
if(isset($_GET['cf'])) {
    $fail = "Send fail;";
}
else {
     $fail = '';
}
?>

<div class="container">
    <div class="row">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.133332661475!2d108.24142831471598!3d16.058569388887474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177ed39f76db%3A0x5c5df5ff4ae8738!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1514027646275" width="100%" height="400" frameborder="0" padding = "0px;"  ></iframe>


    </div>
</div> <!-- container-fluid -->
<div class="container">
    <div class = "row">
        <div class = "contact-info">
        <div class = "col-md-5 col-sm-5 col-xs-12">
            <h3> CONTACT INFO </h3>
            <br>
              <p>Born in 2021, only from a small fashion store, up to now <strong>Bag World </strong>has been constantly developing and becoming a system of young fashion stores, one of the leading fashion brands in Ahmedabad ....<br></p>
              <strong>Any question please contact</strong>
              <address><strong><p style="color: #15aeb4 ; font-size: 15px;">Bag World</p></strong><br>
                    Telephone: +91 9876543210<br>
                    E-mail: <a href="">bagworld@gmail.com</a><br>
              </address><!-- address (end) -->
        </div>
            <div class = "col-md-6 col-sm-6 col-xs-12">
                <div class = "title">
                    <h3> CONTACT </h3>
                </div>
                <span style="color:red"><?php echo $success. $fail?></span>
                <form action ="contact-back.php" method ="POST">
                    <div class="content">
                        <form action=""  method="post" accept-charset="utf-8"></div>
                    <div class="form-group">
                        <label>First and last name:<span>*</span></label>

                        <input name="contact-name" placeholder="Enter your name here" class="form-control" required="required" maxlength="255" type="text" id="contact-name">	
                    </div>
                    <div class="form-group">
                        <label>Email:<span>*</span></label>

                        <input name="contact-email" placeholder="Enter your email here" class="form-control" required="required" maxlength="255" type="email" id="contact-email">	
                    </div>
                    <div class="form-group">
                        <label>Theme:
<span>*</span></label>

                        <input name="contact-subject" placeholder="Enter your subject here" class="form-control" required="required" maxlength="255" type="text" id="contact-subject">	
                    </div>
                    <div class="form-group">
                        <label>content: <span>*</span></label>
                        <textarea name="contact-content" placeholder="Your comment..." class="form-control" rows="4" id="ContactContent" required>	
                        </textarea>			
                    </div>
                    <button style="background-color:#15aeb4 ; float: right; color: white" type="submit" name ="sendcontact" class="btn btn-default">send the contact</button>
                    <br>
                </form>
            </div>

        </div>
        
    </div>
</div>
<br>	
	<?php include("footer.php") ?>
</body>
</html>