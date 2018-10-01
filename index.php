<?php

include('includes/header.php');
include('includes/nav.php');
$pages = '';
if(isset($page)){
    if($page == 'about-us'){
        include 'pages/about-us-content.php';
    }elseif ($page == 'faq'){
        include 'pages/faq-content.php';
    }elseif ($page == 'sites'){
        include 'pages/sites-content.php';
    }elseif ($page == 'contact'){
        include 'pages/contact-content.php';
    }elseif ($page == 'terms'){
        include 'pages/terms-content.php';
    }
}else{
    include 'pages/main-content.php';
}
include('includes/footer.php');