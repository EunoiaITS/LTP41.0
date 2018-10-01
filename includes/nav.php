<body>
<div class="anbonaki-wrapper">
<div class="header-area">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php if(!isset($page)){echo 'active';}else{echo '';}?>"><a href="index.php">Home</a></li>
                    <li class="<?php if(isset($page)){if($page == 'sites'){echo 'active';}else{echo '';}}?>"><a href="sites.php">Sites</a></li>
                    <li class="<?php if(isset($page)){if($page == 'about-us'){echo 'active';}else{echo '';}}?>"><a href="about-us.php">About Us</a></li>
                    <li class="<?php if(isset($page)){if($page == 'contact'){echo 'active';}else{echo '';}}?>"><a href="contact.php">Contact Us</a></li>
                    <li class="<?php if(isset($page)){if($page == 'faq'){echo 'active';}else{echo '';}}?>"><a href="faq.php">FAQ</a></li>
                </ul>
                <div class="nav navbar-nav navbar-right">
                    <span class="phone-number"><img src="img/phone.png"> +88017123 567 89 | +880235467</span>
                </div>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>