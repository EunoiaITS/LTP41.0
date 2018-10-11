<?php
require './classes/main.php';

if(isset($_POST['btn'])){
    if(isset($_POST['check'])){
            $obj_rq = new main();
            $obj_rq->reqQuote($_POST);
    }
}
?>
<div class="landing-slider-area">
    <div class="item"><img src="img/landing-img.jpg" alt=""></div>
    <div class="item"><img src="img/landing-img2.jpg" alt=""></div>
    <div class="item"><img src="img/landing-img.jpg" alt=""></div>
</div>
<!--/. end slider area -->

<div class="testimonials-area clearfix">
    <div class="container-fluid no-padding">
        <div class="subcription-area">
            <div class="provided-shadow">
                <div class="provided-link">
                    <img src="img/clock.jpg" alt="Requested Product Image">
                </div>
            </div>
            <div class="white-shadow">
                <div class="provided-clock">
                    <form action="#" class="provided-link-option">
                        <h3 class="provided-txt">Provide link below:</h3>
                        <input type="text" name="url" id="link" class="form-control elem" required>
                        <button type="button" class="btn btn-info btn-button" id="preview">Preview</button>
                        <button type="button" class="btn btn-info btn-button" id="req-quote" data-toggle="modal" data-target=".bs-example-modal-lg">Request Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="choice-site clearfix">
            <h2 class="choice-txt">Your Choice of Sites</h2>
            <div class="col-sm-offset-1 col-sm-10">
                <div id="site-carosel">
                    <div class="items-client"><a href="#"><img src="img/clients/amazon.png" alt="amazon"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/clarks.png" alt="clarks"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/ebay.png" alt="ebay"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/zara.png" alt="gucci"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/walmart.png" alt="walmart"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/amazon.png" alt="amazon"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/clarks.png" alt="clarks"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/ebay.png" alt="ebay"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/hugoboss.png" alt="gucci"></a></div>
                    <div class="items-client"><a href="#"><img src="img/clients/walmart.png" alt="walmart"></a></div>
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
</div><!--/. end testimonals-area -->

<!--===================
Request quote modal
=========================-->
<div class="modal fade bs-example-modal-lg" id="modal_id_you_want_to_hid" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title text-center" id="myModalLabel"><img src="img/anbonaki-sm-logo.png" alt=""></div>
            </div>
            <form id="my-form" action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name*" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your E-mail*" required="required">
                    </div>
                    <div class="form-group">
                        <input type="number" name="number" class="form-control" placeholder="Contact Number*" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" id="d-link" name="link" class="form-control element" placeholder="Link*" required="required">
                    </div>
                    <div class="form-group">
                        <div class="prov-link"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="coupon" class="form-control" placeholder="Coupon Code">
                    </div>
                    <div class="form-group">
                        <textarea name="remark" class="form-control" placeholder="Remarks" cols="30" rows="6"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="check" id="check" required>
                        <label for="check">I agree to the <a href="terms_condition.html">terms and conditions</a> of Anbonaki</label>
                    </div>
                </div>
                <input type="hidden" name="modal">
                <button name="btn" type="submit" class="btn btn-dark btn-flat" data-toggle="modal" data-target=".bs-example-modal-sm">Send</button>
            </form>
        </div>
    </div>
</div>
<!--<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title text-center" id="myModalLabel"><img src="img/anbonaki-sm-logo.png" alt=""></div>
            </div>
            <div class="modal-body">
                <p class="text-center">Your Request has been recieved. We will contact with you soon!</p>
            </div>
            <button type="button" class="btn btn-dark btn-flat" data-dismiss="modal">Ok</button>
        </div>
    </div>
</div>-->
