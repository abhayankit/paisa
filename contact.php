<?php include('header.php');?> 
    <!-- Banner Area --> 
    <section class="banner_area">
    	<div class="container">
    		<h6>Contact with us</h6>
    		<h2>Contact Us</h2>
    		<ol class="breadcrumb">
                <li><a href="index">Home</a></li>   
                <li><a href="contact" class="active">Contact</a></li> 
            </ol>
    	</div>
    </section>
    <!-- Banner Area --> 
    
    <!-- Contact info Area --> 
    <section class="contact_info">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-4 col-md-6">
    				<div class="info">
    					<i class="flaticon-call"></i>
    					<h6>Phone : <a href="#">+91 7289986361</a></h6>
    					<h6>Phone : <a href="#">  011-41554503</a></h6>
                        <br>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6">
    				<div class="info mail">
    					<i class="flaticon-mail"></i>
    					<h6>Email : <a href="#">info@paisabricks.com</a></h6>
                        <br><br><br>
    				</div>
    			</div>
    			<div class="col-lg-4 col-md-6">
    				<div class="info">
    					<i class="flaticon-placeholder-1"></i>
    					<h6>Office no. 520 5th Floor Suneja Tower -2 District Centre Janakpuri New Delhi - 110058</h6> 
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Contact info Area -->     
    
    <!-- Map and From Area --> 
    <section class="map_from_area">
        <div class="map_area">
            <div class="map_content"> 
               <img src="images/loan-card.png" alt="">
               <div class="marker_area"> 
					<i class="flaticon-placeholder"></i>
					<h4>28 Green Tower, Street <br>New York City, USA</h4>
               </div>
            </div>
        </div> 
        <?php 
		                if(isset($_POST['submit'])){
                            include('connection.php');
                            $date = date('Y-m-d');
                            $insert="INSERT into `inquiry` (`name`,`mobile`,`email`,`subject`,`message`,`date`)
                            values('".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['subject']."',
                            '".$_POST['message']."','".$date."')";
                            $query=mysqli_query($conn,$insert);
		                $email = $_POST['email'];          
		                $to = "$email,info@paisabricks.com";
                        $subject = "PaisaBricks Fincorp Inquiry ";
                        $message = "
                        <html>
                        <head>
                            <title>PaisaBricks Fincorp Inquiry</title>
                        </head>
                        <body>
                            <center><h1 style='color:green;font-weight:bold'>PaisaBricks Fincorp Inquiry</h1></center>
                        <table border=1>
                            <tr style='background-color:orange;color:white'>
                                <th>Name</th><th>Phone</th><th>Email</th><th>Message</th><th>Subject</th><th>Date</th>
                            </tr>
                            <tr style='background-color:#56E4B9'>
                                <td>".$_POST['name']."</td>
                                <td>".$_POST['mobile']."</td>
                                <td>".$_POST['email']."</td>
                                <td>".$_POST['subject']."</td>
                                <td>".$_POST['message']."</td>
                                <td>".date('d-m-Y')."</td>
                            </tr>
                        </table>
                        </body>
                        </html>";
                        // Always set content-type when sending HTML email
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        // More headers
                        $headers .= 'PaisaBricks Fincorp Inquiry: <info@paisabricks.com>' . "\r\n";
                        $headers .= 'Cc: info@paisabricks.com' . "\r\n";
                        $mail=mail($to,$subject,$message,$headers);
                            echo "<script>alert('Message sent successful')</script>";
		                }
                    ?>
        <div class="contact_inner">   
            <form class="from_main" method="post" id="phpcontactform" novalidate="novalidate"> 
               <h4>Do you have any questions to ask <br> please let us know.</h4>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number">
                </div>  
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your valid Email">
                </div>
                <div class="form-group">   
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"> 
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" name="message" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group">
                    <button class="theme_btn btn" id="js-contact-btn" name="submit" type="submit">Submit</button> 
                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Map and From Area --> 
	<!-- End get started -->
	<?php include('footer.php');?>