<?php

namespace APP\View;

class Header{
    final public static function init($title)
    {
        echo '
        <!doctype html>
        <html lang="en">
        
        <head>
            <title>'.$title.'</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">
        
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/animate.css">
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
        
            <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
            <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
        
        
            <!-- Theme Style -->
            <link rel="stylesheet" href="css/style.css">
        </head>

        <body>

    <div class="site-wrap">

        <a href="#" class="offcanvas-toggle js-offcanvas-toggle">Menu</a>
        <div class="offcanvas_menu" id="offcanvas_menu">
            <ul class="mb-5">
                <li class="active"><a href="index.html">Bio</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="resume.html">Resume</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

            <ul class="social">
                <li>
                    <a href="#" class="fa fa-twitter"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-facebook"></a>
                </li>
                <li>
                    <a href="#" class="fa fa-instagram"></a>
                </li>
            </ul>

            </br>
            <!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can\'t be removed. Template is licensed under CC BY 3.0. -->

        </div>
        ';
    }
}