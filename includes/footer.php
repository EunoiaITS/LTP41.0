<div class="footer-area">
    <div class="container">
        <div class="col-sm-4">
            <div class="social-media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="copy-right text-center">
                <p>Powered by <a href="#">Eunoia I.T Solutions</a>
                    <br>Copyright @ <a href="#">DEX Hub</a></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="contact-information text-right">
                <p><a href="mailto:info@anbonaki.com">info@anbonaki.com</a> <img src="img/sms.png" alt=""></p>
                <p>+88017123 567 89 | +880235467 <img src="img/phone-2.png" alt="phone"></p>
            </div>
        </div>
    </div>
</div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- main js file -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<!-- bootstrap css -->
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/slick.min.js"></script>
<!-- main js file -->
<script src="js/custom.js"></script>
<script>
    $(document).ready(function () {
        var image = '';
        $('#preview').on('click',function (e) {
            var url = $('#link').val();
            var link = "<?php (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>";
            var html ='';
            $.ajax({
                type: 'POST',
                url: link+'/includes/preview.php',
                data: {'url':url},
                dataType: 'json',
                success: function(data, textStatus, xhr){
                    //console.log(data.metaTags['og:image'].value);
                    image = data.metaTags['og:image'].value;
                    html = '<img src="'+image+'">';
                    $('.provided-link').html(html);
                },
                error: function(xhr, textStatus, error){
                    alert(textStatus); //returns error
                }
            });
        });
        $('#req-quote').on('click',function (e) {
            var link = $('#link').val();
            //alert(link);
            $('#d-link').val(link);
            var link = $('#link').val();
            var html = '<img src="'+image+'">';
            $('.prov-link').append(html);
            //alert(link);
        });
    });
</script>
</body>
</html>