<?php
    require './classes/contact.php';
    if(isset($_POST['btn'])){
        $obj_cont = new contact();
        $obj_cont->contData($_POST);
    }
?>
<div class="contact-us clearfix">
    <div class="container">
        <div class="about-anbonaki clearfix">
            <div class="col-sm-10 clearfix">
                <h2>Contact Us</h2>
                <form id="my-form" action="" method="post">
                    <div class="col-sm-6 pad-no">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6 no-pad-xs">
                        <div class="form-group">
                            <label for="number">Contact No</label>
                            <input type="text" name="number" id="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6 pad-no">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-sm-6 no-pad-xs">
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 pad-no">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <button type="submit" name="btn" class="btn btn-info btn-submit">Send</button>
                </form>
            </div>
            <div class="col-sm-10">
                <div class="our-location clearfix">
                    <h2 class="text-center">Our Location</h2>
                    <div id="map-canvas"></div>
                    <div class="map-address">
                        <p>House 81 Green Taj Center Level 2 Road 8/A , Dhanmondi Dhaka</p>
                        <div class="underline-denvor"></div>
                        <p><img src="img/sms.png" alt=""><a href="mailto:info@anbonaki.com">info@anbonaki.com</a></p>
                        <p> <img src="img/phone-2.png" alt="phone"> +880 1730-599577</p>
                    </div>
                </div>
            </div>
            <div class="gallery-img">
                <div class="col-sm-4">
                    <img src="img/img-1.jpg" alt="image 1">
                </div>
                <div class="col-sm-4">
                    <img src="img/img-2.jpg" alt="image 1">
                </div>
                <div class="col-sm-4 galley-last">
                    <img src="img/img-3.jpg" alt="image 1">
                </div>
            </div>
        </div>
    </div>
</div>
