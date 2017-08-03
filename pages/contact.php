<?php 

    if(isset($_POST['send'])){
        $to = "info@wandamobile.org";  // Your email here
        $from = $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $headers = "From: $from";
        $subject = "Wandamobile limited Website Contact form.";
        $fields = array();
        $fields{"name"} = "name";
        $fields{"email"} = "Email";
        $fields{"phone"} = "phone";
        $fields{"message"} = "Message";

        $body = "Here is the Message From the Wandamobile limited Website Contact form.:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

        $send = mail($to, $subject, $body, $headers);

        echo '<script> alert("Message Sent. Thank you for contacting us. Will get back to you shortly using the details you provided..")</script>';    
    }
?>
<section id="content">
<div id="container">
    <div class="row">
        <div class="col-md-12">
        <div class="container">           
            <div class="row text-center" data-scroll-reveal="enter from the bottom after .5s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h2 class="">CONTACT US</h2>
                    <p> </p>
                    <br />
                </div>                  
            </div>
            <div class="row ">
                <div class="col-lg-6  col-md-6  col-sm-6 cont-div">
                    <form method="post" action="">
                        <div class="form-group" data-scroll-reveal="enter from the left after .6s">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Your Name">
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .7s">
                            <input type="email" name="email" class="form-control" required="required" placeholder="Your Email">
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .7s">
                            <input type="number" name="phone" class="form-control" required="required" placeholder="Your phone number">
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .8s">
                            <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group" data-scroll-reveal="enter from the left after .9s">
                            <button type="submit" class="btn btn-success" name="send">Submit Request</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" data-scroll-reveal="enter from the right after .8s">
                    <h3><strong>OUR LOCATION </strong></h3>
                    <p>Head Office</p>
                    <p>4th Floor Metropolis (Crater), Mombasa Road</p>
                    <p><strong>Address :</strong> P.O Box 51323-00100, Nairobi, Kenya</p>
                    <p><strong>Tel.No :</strong> 0800721750, +254 (0) 204343600</p>
                    <p><strong>Office.No :</strong>+254 (0) 204343600</p>
                    <p><strong>Email:</strong> info@wandamobile.org</p>
                    <br />
                </div>              
            </div>
        </div>
        </div>

    </div>
</div>
</section>
