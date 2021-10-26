<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <title>Movie On Click</title>
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="dns-prefetch" href="//s.w.org" />
        <link rel="stylesheet" id="wp-block-library-css" href="wp-includes/css/dist/block-library/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="wp-block-library-theme-css" href="wp-includes/css/dist/block-library/theme.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-comingsoon-launch-section-css" href="css/comingsoon-launch-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-viewcounts-section-css" href="css/landing-viewcounts-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-faq-section-css" href="css/faq-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-features-list-css" href="css/landing-features-list/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-featured-video-css" href="css/landing-featured-video/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-tabs-features-css" href="css/landing-tabs-features/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-movies-carousel-css" href="css/landing-movies-carousel/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-featured-section-css" href="css/landing-featured-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-hero-banner-css" href="css/landing-hero-banner/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-full-width-banner-css" href="css/section-full-width-banner/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-video-section-css" href="css/video-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-tv-show-section-css" href="css/tv-show-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-hot-premieres-block-css" href="css/hot-premieres-block/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-movie-section-aside-header-css" href="css/movie-section-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-video-section-aside-header-css" href="css/video-section-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-movies-carousel-aside-header-css" href="css/section-movies-carousel-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-videos-carousel-aside-header-css" href="css/section-videos-carousel-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-movies-carousel-nav-header-css" href="css/section-movies-carousel-nav-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-videos-carousel-nav-header-css" href="css/section-videos-carousel-nav-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-movies-carousel-flex-header-css" href="css/section-movies-carousel-flex-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-videos-carousel-flex-header-css" href="css/section-videos-carousel-flex-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="section-featured-post-css" href="css/section-featured-post/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="videos-with-featured-video-css" href="css/videos-with-featured-video/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-featured-movies-carousel-css" href="css/featured-movies-carousel/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-featured-movie-css" href="css/section-featured-movie/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-featured-tv-show-css" href="css/section-featured-tv-show/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-banner-with-section-tv-shows-css" href="css/banner-with-section-tv-shows/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-list-section-css" href="css/blog-list-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-grid-section-css" href="css/blog-grid-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-tab-section-css" href="css/blog-tab-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-slider-movies-css" href="css/slider-movies/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-live-videos-css" href="css/section-live-videos/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-videos-slider-css" href="css/videos-slider/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-movies-slider-css" href="css/movies-slider/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-tv-shows-slider-css" href="css/tv-shows-slider/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-coming-soon-videos-css" href="css/section-coming-soon-videos/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-movies-list-css" href="css/movies-list/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-grid-with-list-section-css" href="css/blog-grid-with-list-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-recent-comments-css" href="css/recent-comments/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-event-category-list-css" href="css/section-event-category-list/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-featured-blog-with-blog-grid-section-css" href="css/featured-blog-with-blog-grid-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-active-videos-css" href="css/active-videos/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-playlist-carousel-css" href="css/section-playlist-carousel/style.min.css" type="text/css" media="all" />
        <link
            rel="stylesheet"
            id="vodi-section-tv-episodes-carousel-aside-header-css"
            href="css/section-tv-episodes-carousel-aside-header/style.min.css"
            type="text/css"
            media="all"/>
        <link
            rel="stylesheet"
            id="vodi-section-tv-episodes-carousel-flex-header-css"
            href="css/section-tv-episodes-carousel-flex-header/style.min.css"
            type="text/css"
            media="all"/>
        <link rel="stylesheet" id="vodi-tv-show-section-aside-header-css" href="css/tv-show-section-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-tv-shows-carousel-nav-header-css" href="css/section-tv-shows-carousel-nav-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-episodes-with-featured-episode-css" href="css/episodes-with-featured-episode/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-block-styles-css" href="themes/assets/css/gutenberg-blocks.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="contact-form-7-css" href="plugins/contact-form-7/includes/css/styles.css" type="text/css" media="all" />
        <link rel="stylesheet" id="wpcdt-public-css-css" href="plugins/countdown-timer-ultimate/assets/css/wpcdt-timecircles.css" type="text/css" media="all" />
        <link rel="stylesheet" id="photoswipe-css" href="plugins/masvideos/assets/css/photoswipe/photoswipe.css" type="text/css" media="all" />
        <link rel="stylesheet" id="photoswipe-default-skin-css" href="plugins/masvideos/assets/css/photoswipe/default-skin/default-skin.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-style-css" href="themes/style.css" type="text/css" media="all" />
        <link rel="stylesheet" id="fontawesome-css" href="themes/assets/css/fontawesome.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-fancybox-css" href="themes/assets/css/jquery.fancybox.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-theme-css" href="themes/assets/css/theme.css" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css" href="themes/assets/css/animate.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-masvideos-css" href="themes/assets/css/masvideos.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-color-css" href="themes/assets/css/colors/blue.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800%7cOpen+Sans:400,600,700&#038;subset=latin%2Clatin-ext" type="text/css" media="all" />
        <link rel="stylesheet" id="jetpack_css-css" href="plugins/jetpack/css/jetpack.css" type="text/css" media="all" />
        <script type="text/javascript" src="wp-includes/js/jquery/jquery.js"></script>
        <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="home page-template-default page page-id-343 wp-embed-responsive masvideos-no-js full-width">
        <div id="page" class="hfeed site">

            <!-- NavBar -->
            <header id="site-header" class="site-header header-v1 desktop-header stick-this light" role="banner" style="">
                <div class="container-fluid">
                    <div class="site-header__inner">
                        <div class="site-header__right">
                            <div class="site-header__logo">
                                <a href="" rel="home" class="navbar-brand">
                                    <h4>MOVIE ON CLICK</h4>
                                </a>
                            </div>
                            <div class="site_header__primary-nav">
                                <ul id="menu-primary-menu" class="nav yamm">
                                    <li id="menu-item-5553" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5553">
                                        <a href="" aria-current="page">Home</a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-5215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5215">
                                                <a title="" href="?mas_static_content=home">Home</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="site-header__left">
                            <div class="site-header__search">
                                <form role="search" method="get" class="search-form masvideos-search masvideos-search-video" action="">
                                    <label class="screen-reader-text" for="masvideos-search-field-0">Search for:</label>
                                    <input type="search" id="masvideos-search-field-0" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                                    <button type="submit" class="search-submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                            <path
                                                d="M7 0C11-0.1 13.4 2.1 14.6 4.9 15.5 7.1 14.9 9.8 13.9 11.4 13.7 11.7 13.6 12 13.3 12.2 13.4 12.5 14.2 13.1 14.4 13.4 15.4 14.3 16.3 15.2 17.2 16.1 17.5 16.4 18.2 16.9 18 17.5 17.9 17.6 17.9 17.7 17.8 17.8 17.2 18.3 16.7 17.8 16.4 17.4 15.4 16.4 14.3 15.4 13.3 14.3 13 14.1 12.8 13.8 12.5 13.6 12.4 13.5 12.3 13.3 12.2 13.3 12 13.4 11.5 13.8 11.3 14 10.7 14.4 9.9 14.6 9.2 14.8 8.9 14.9 8.6 14.9 8.3 14.9 8 15 7.4 15.1 7.1 15 6.3 14.8 5.6 14.8 4.9 14.5 2.7 13.6 1.1 12.1 0.4 9.7 0 8.7-0.2 7.1 0.2 6 0.3 5.3 0.5 4.6 0.9 4 1.8 2.4 3 1.3 4.7 0.5 5.2 0.3 5.7 0.2 6.3 0.1 6.5 0 6.8 0.1 7 0ZM7.3 1.5C7.1 1.6 6.8 1.5 6.7 1.5 6.2 1.6 5.8 1.7 5.4 1.9 3.7 2.5 2.6 3.7 1.9 5.4 1.7 5.8 1.7 6.2 1.6 6.6 1.4 7.4 1.6 8.5 1.8 9.1 2.4 11.1 3.5 12.3 5.3 13 5.9 13.3 6.6 13.5 7.5 13.5 7.7 13.5 7.9 13.5 8.1 13.5 8.6 13.4 9.1 13.3 9.6 13.1 11.2 12.5 12.4 11.4 13.1 9.8 13.6 8.5 13.6 6.6 13.1 5.3 12.2 3.1 10.4 1.5 7.3 1.5Z"
                                            />
                                        </svg>
                                        <span class="screen-reader-text">Search</span>
                                    </button>
                                    <input type="hidden" name="post_type" value="video" />
                                </form>
                            </div>
                            <div class="site-header__user-account dropdown">
                            <?php
                                if (isset($_SESSION["username"])){
                                    echo '<span>'.$_SESSION["username"].'</span>
                                        <a href="my-account/" class="site-header__user-account--link" data-toggle="dropdown">
                                            <svg width="32px" height="32px">
                                                <image
                                                    x="0px"
                                                    y="0px"
                                                    width="32px"
                                                    height="32px"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACB1BMVEW7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu3t7eys7KztLO4uLi6u7q0tbSxsrG2t7awsrC7vLu8vLy1trW8vby1tbWysrK6urq3uLe5urm9vr24ubitrq2wsbCsrazV1dXs7Oz29vb39/fw8PDe3t6vsK/v7+/////5+vnLy8urrKuxsbHGx8aur67k5OT4+Pizs7P9/f3R0tGurq7Oz87j4+OsrqzU1NTo6OiusK7+/v7k5eT4+fjGyMa7u7v6+vrMzMyrq6u+vr7Ky8ri4uLt7e3u7u7m5+bT1NOwsLC+v77Q0NDe397f39/T09O/v7/FxsX5+fn09PS9vb37+/v09fTNzs3g4ODh4uHX2Nf8/PzY2djIyMjIycjU1dTl5uXx8fHm5ubV1tVi3+TsAAAAUnRSTlMADleWxOHwxphZESftmiuDiBvN0iAq8TAW9xzX340dI5ymCPj9VV+lydDl5/P05srRnqdjCvr+EKCqipTd5Pb7IfI31NmLkAQvojIVn+PLoWIYYNJBTgAAAAFiS0dEca8HXOIAAAAHdElNRQfjBQECDwMxTbKCAAACG0lEQVQ4y21T90PTQBQ+RKpY3FisExcuEHEvFPdeXLikJLnakjbVgjESSEutqIiKIo66R90L/SNtbzTp+H66e9/37r17A4ACqqZUT63xeGqmTa+dAcrhra7rhEIXQl2iFPDMnFXKz0bdoqzIBIosdqM5RfTceYKKZRdwUJhf7/AL6iD35lAU6Gvg/ELfJe4eCgd62FGT/IuYYDGkPI5E9RASYiK9anAJyw8yFx1evhLv7buKYwoJqMCleX4ZUskVG+iaSXC936ICFS3PCRoHyItKUOw1OQZtYsMDKwBYuUqgEaxEgTeTQxFiE1dXgTWdlFdxyhGYN9LM2gQaJVoB46aLN4ctWg19LVjH/nDrtltwJ42IFa4HG8JUMFLpBTm8ETSHeA53K+SAmkELE8jWqMPfY7/ICzYFWHfcdbhv40KIVok3Z+RBH6XHHj7ivYWbQZvOL+N6+vHEk6fPnoejCh8dfQuo5SHkjB158fLV6zdvg3aGj4e6FWzbTkqtida74SQN8T4xGBM0UuodOwHYlW+WZosT7jok1HROgfXduW7WI1HRoviDWYT4eEzLtdubH4g98GOmZ8wsQVY2NLiXjtQ+Q/pkliE+ZLTzod/fb1bA5wMdfKwbDn4p57/6DzmL0XH42/diOvXjiLdot47+TLgkqdFfx46XLOeJtpbffyaT2Wxy8u8//8lTFfb7dNOZ1rMeX/u58xcuOtb/keQ/CDzeyUsAAAAASUVORK5CYII="
                                                />
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="php/logout.php">Logout</a>
                                            </li>
                                        </ul>';
                                }
                                else {
                                    echo '<a href="my-account/" class="site-header__user-account--link" data-toggle="dropdown">
                                            <svg width="32px" height="32px">
                                                <image
                                                    x="0px"
                                                    y="0px"
                                                    width="32px"
                                                    height="32px"
                                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAACB1BMVEW7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu7vLu3t7eys7KztLO4uLi6u7q0tbSxsrG2t7awsrC7vLu8vLy1trW8vby1tbWysrK6urq3uLe5urm9vr24ubitrq2wsbCsrazV1dXs7Oz29vb39/fw8PDe3t6vsK/v7+/////5+vnLy8urrKuxsbHGx8aur67k5OT4+Pizs7P9/f3R0tGurq7Oz87j4+OsrqzU1NTo6OiusK7+/v7k5eT4+fjGyMa7u7v6+vrMzMyrq6u+vr7Ky8ri4uLt7e3u7u7m5+bT1NOwsLC+v77Q0NDe397f39/T09O/v7/FxsX5+fn09PS9vb37+/v09fTNzs3g4ODh4uHX2Nf8/PzY2djIyMjIycjU1dTl5uXx8fHm5ubV1tVi3+TsAAAAUnRSTlMADleWxOHwxphZESftmiuDiBvN0iAq8TAW9xzX340dI5ymCPj9VV+lydDl5/P05srRnqdjCvr+EKCqipTd5Pb7IfI31NmLkAQvojIVn+PLoWIYYNJBTgAAAAFiS0dEca8HXOIAAAAHdElNRQfjBQECDwMxTbKCAAACG0lEQVQ4y21T90PTQBQ+RKpY3FisExcuEHEvFPdeXLikJLnakjbVgjESSEutqIiKIo66R90L/SNtbzTp+H66e9/37r17A4ACqqZUT63xeGqmTa+dAcrhra7rhEIXQl2iFPDMnFXKz0bdoqzIBIosdqM5RfTceYKKZRdwUJhf7/AL6iD35lAU6Gvg/ELfJe4eCgd62FGT/IuYYDGkPI5E9RASYiK9anAJyw8yFx1evhLv7buKYwoJqMCleX4ZUskVG+iaSXC936ICFS3PCRoHyItKUOw1OQZtYsMDKwBYuUqgEaxEgTeTQxFiE1dXgTWdlFdxyhGYN9LM2gQaJVoB46aLN4ctWg19LVjH/nDrtltwJ42IFa4HG8JUMFLpBTm8ETSHeA53K+SAmkELE8jWqMPfY7/ICzYFWHfcdbhv40KIVok3Z+RBH6XHHj7ivYWbQZvOL+N6+vHEk6fPnoejCh8dfQuo5SHkjB158fLV6zdvg3aGj4e6FWzbTkqtida74SQN8T4xGBM0UuodOwHYlW+WZosT7jok1HROgfXduW7WI1HRoviDWYT4eEzLtdubH4g98GOmZ8wsQVY2NLiXjtQ+Q/pkliE+ZLTzod/fb1bA5wMdfKwbDn4p57/6DzmL0XH42/diOvXjiLdot47+TLgkqdFfx46XLOeJtpbffyaT2Wxy8u8//8lTFfb7dNOZ1rMeX/u58xcuOtb/keQ/CDzeyUsAAAAASUVORK5CYII="
                                                />
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="my-account/" data-toggle="modal" data-target="#modal-register-login">Sign in</a>
                                            </li>
                                            <li>
                                                <a href="my-account/" data-toggle="modal" data-target="#modal-register-login">Register</a>
                                            </li>
                                        </ul>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- NavBar End -->

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <div class="site-content__inner">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main" role="main">
                                <article id="post-343" class="post-343 page type-page status-publish hentry">
                                    <div class="page__content">

                                        <!-- Movie Sliders -->
                                        <div id="movies-sliders-6144843e1fd24" class="movies-sliders style-v1">
                                            <div
                                                class="movies-sliders-single-content"
                                                data-ride="vodi-slick-carousel"
                                                data-wrap=".movies-sliders-single-content__inner"
                                                data-slick='{"infinite":false,"slidesToShow":1,"slidesToScroll":1,"arrows":false,"asNavFor":"#movies-sliders-6144843e1fd24 .movies-sliders-gallery-images__inner"}'>
                                                <div class="movies-sliders-single-content__inner">

                                                    <!-- Movie -->
                                                    <?php
                                                    include 'php/db.php';
                                                    $query = "SELECT * FROM movie WHERE category='recomended'";
                                                    $result = mysqli_query($connect, $query);
                                                    while($row = mysqli_fetch_array($result)){
                                                        echo '<div class="movie-slide" style="background-image: url(uploads/'.$row["image"].');">
                                                                <style>.movie-slide{background-size: cover; background-image: url("uploads/'.$row["image"].'"); height: 676px;}</style>
                                                                <div class="container">
                                                                    <div class="single-featured-movie">
                                                                        <div class="single-featured-movie__inner">
                                                                            <a href="movie/" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                <h3 class="masvideos-loop-movie__title movie__title">
                                                                                '.$row["name"].'
                                                                                </h3>
                                                                            </a>
                                                                            <div class="movie__meta">
                                                                                <span class="movie__meta--release-year">'.$row["year"].'</span><span class="movie__meta--genre"><a href="movie-genre/comedy/" rel="tag">Comedy</a></span>
                                                                                <span class="movie__meta--duration">'.$row["duration"].'</span>
                                                                            </div>
                                                                            <div class="movie__actions">
                                                                                <a href="movie/?id='.$row["id"].'" class="movie-actions--link_watch">Watch Now</a>
                                                                                <div class="movie-actions--link_add-to-playlist dropdown">
                                                                                    <a class="dropdown-toggle" href="movie/" data-toggle="dropdown">+ Playlist</a>
                                                                                    <div class="dropdown-menu">
                                                                                        <a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>';
                                                    }
                                                    ?>
                                                    <!-- Movie End -->
                                                </div>
                                            </div>
                                            <div class="movies-sliders-gallery-images-wrap">
                                                <h4 class="gallery-title">Todays Recomendation</h4>
                                                <div
                                                    class="movies-sliders-gallery-images"
                                                    data-ride="vodi-slick-carousel"
                                                    data-wrap=".movies-sliders-gallery-images__inner"
                                                    data-slick='{"infinite":false,"slidesToShow":1,"slidesToScroll":1,"arrows":true,"dots":false,"focusOnSelect":true,"touchMove":true,"asNavFor":"#movies-sliders-6144843e1fd24 .movies-sliders-single-content__inner","rows":3,"slidesPerRow":3,"responsive":[{"breakpoint":767,"settings":{"rows":1,"slidesPerRow":1,"slidesToShow":2}},{"breakpoint":992,"settings":{"rows":1,"slidesPerRow":1,"slidesToShow":3,"slidesToScroll":3}},{"breakpoint":1200,"settings":{"rows":1,"slidesPerRow":1,"slidesToShow":4,"slidesToScroll":4}}]}'>
                                                    <div class="movies-sliders-gallery-images__inner">
                                                        <?php
                                                        include 'php/db.php';
                                                        $query = "SELECT * FROM movie WHERE category='recomended'";
                                                        $result = mysqli_query($connect, $query);
                                                        $i = 0;
                                                        while($row = mysqli_fetch_array($result)){
                                                            echo '<figure class="movie-slide-gallery-image" data-thumb="'.$i.'">
                                                                    <img width="235" height="147" src="uploads/'.$row["image"].'" class="movsie-slide-gallery-image" alt="" />
                                                                </figure>';
                                                            $i++;
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Movie Sliders End -->

                                        <!-- Popular Movie -->
                                        <section class="home-section home-movie-section-aside-header has-bg-color dark" style="padding-bottom: 13px; padding-top: 9px;">
                                            <div class="container">
                                                <div class="home-movie-section-aside-header__inner">
                                                    <div class="masvideos masvideos-movies">
                                                        <div class="movies columns-7">
                                                            <div class="movies__inner">
                                                                <header class="home-section__header">
                                                                    <h2 class="home-section__title">
                                                                        Popular Movies <br />
                                                                        to Watch Now
                                                                    </h2>
                                                                    <p class="home-section__subtitle">
                                                                        Most watched movies by days
                                                                    </p>
                                                                    <div class="home-section__action">
                                                                        <a href="#" class="home-section__action-link">View all</a>
                                                                    </div>
                                                                </header>

                                                                <!-- Card -->
                                                                <?php
                                                                include 'php/db.php';
                                                                $query = "SELECT * FROM movie WHERE category='popular'";
                                                                $result = mysqli_query($connect, $query);
                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo '<div class="post-2930 movie type-movie status-publish has-post-thumbnail hentry movie_genre-action">
                                                                            <div class="movie__poster">
                                                                                <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                    <img
                                                                                        width="300"
                                                                                        height="450"
                                                                                        src="uploads/'.$row["image"].'"
                                                                                        class="movie__poster--image"
                                                                                        alt=""
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                            <div class="movie__body">
                                                                                <div class="movie__info">
                                                                                    <div class="movie__info--head">
                                                                                        <div class="movie__meta">
                                                                                            <span class="movie__meta--release-year">2017</span><span class="movie__meta--genre"><a href="movie-genre/action/" rel="tag">Action</a></span>
                                                                                        </div>
                                                                                        <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                            <h3 class="masvideos-loop-movie__title movie__title">
                                                                                                '.$row["name"].'
                                                                                            </h3>
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="movie__short-description">
                                                                                        <div>
                                                                                            <p>
                                                                                                strange black entity from another world bonds with Peter Parker and causes inner turmoil as he contends with new villains, temptations, and revenge.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="movie__actions">
                                                                                        <a href="movie/?id='.$row["id"].'" class="movie-actions--link_watch">Watch Now</a>
                                                                                        <div class="movie-actions--link_add-to-playlist dropdown">
                                                                                            <a class="dropdown-toggle" href="movie/?id='.$row["id"].'" data-toggle="dropdown">+ Playlist</a>
                                                                                            <div class="dropdown-menu">
                                                                                                <a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="movie__review-info">
                                                                                    <a href="movie/?id='.$row["id"].'#reviews" class="avg-rating">
                                                                                        <span class="rating-with-count">
                                                                                            <svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
                                                                                                <title>play</title>
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
                                                                                                />
                                                                                            </svg>
                                                                                            <span class="avg-rating-number"> 8.0</span>
                                                                                        </span>
                                                                                        <span class="rating-number-with-text">
                                                                                            <span class="avg-rating-number"> 8.0</span>
                                                                                            <span class="avg-rating-text"> <span>1</span> Vote </span>
                                                                                        </span>
                                                                                    </a>
                                                                                    <div class="viewers-count"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>';
                                                                }
                                                                ?>
                                                                <!-- Card End -->

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="home-section__footer-view-more-action">
                                                <span class="home-section__footer-view-more-action__inner">
                                                    <a href="movies/" class="home-section__footer-view-more-action--link">+ View more</a>
                                                </span>
                                            </div> -->
                                        </section>
                                        <!-- Popular Movie End -->

                                        <!-- Romantic Movie -->
                                        <section
                                            id="section-movies-carousel-aside-header-6144843e357f1"
                                            class="home-section section-movies-carousel-aside-header has-section-header has-bg-color light header-right"
                                            style="padding-bottom: 11px;">
                                            <div class="container">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Today</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">This week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Last 30 days</a>
                                                    </li>
                                                </ul>
                                                <div class="section-movies-carousel-aside-header__inner">
                                                    <header class="home-section__header section-movies-carousel-aside-header__header">
                                                        <h2 class="home-section__title">
                                                            Romantic for Valentines Day
                                                        </h2>
                                                        <div class="section-movies-carousel-aside-header__custom-arrows"></div>
                                                        <div class="home-section__action">
                                                            <a href="#" class="home-section__action-link">View All</a>
                                                        </div>
                                                    </header>
                                                    <div class="section-movies-carousel__carousel">
                                                        <div
                                                            class="movies-carousel__inner"
                                                            data-ride="vodi-slick-carousel"
                                                            data-wrap=".movies__inner"
                                                            data-slick='{"slidesToShow":6,"slidesToScroll":1,"dots":false,"arrows":true,"autoplay":false,"infinite":false,"responsive":[{"breakpoint":768,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":3,"slidesToScroll":1}},{"breakpoint":1200,"settings":{"slidesToShow":4,"slidesToScroll":1}}],"appendArrows":"#section-movies-carousel-aside-header-6144843e357f1 .section-movies-carousel-aside-header__custom-arrows"}'
                                                        >
                                                            <div class="masvideos masvideos-movies">
                                                                <div class="movies columns-6">
                                                                    <div class="movies__inner">
                                                                        <!-- Card -->
                                                                        <?php
                                                                        include 'php/db.php';
                                                                        $query = "SELECT * FROM movie WHERE category='romantic'";
                                                                        $result = mysqli_query($connect, $query);
                                                                        while($row = mysqli_fetch_array($result)){
                                                                            echo '<div class="post-2930 movie type-movie status-publish has-post-thumbnail hentry movie_genre-action">
                                                                                        <div class="movie__poster">
                                                                                            <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                                <img
                                                                                                    width="300"
                                                                                                    height="450"
                                                                                                    src="uploads/'.$row["image"].'"
                                                                                                    class="movie__poster--image"
                                                                                                    alt=""
                                                                                                />
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="movie__body">
                                                                                            <div class="movie__info">
                                                                                                <div class="movie__info--head">
                                                                                                    <div class="movie__meta">
                                                                                                        <span class="movie__meta--release-year">2017</span><span class="movie__meta--genre"><a href="movie-genre/action/" rel="tag">Action</a></span>
                                                                                                    </div>
                                                                                                    <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                                        <h3 class="masvideos-loop-movie__title movie__title">
                                                                                                            '.$row["name"].'
                                                                                                        </h3>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="movie__short-description">
                                                                                                    <div>
                                                                                                        <p>
                                                                                                            strange black entity from another world bonds with Peter Parker and causes inner turmoil as he contends with new villains, temptations, and
                                                                                                            revenge.
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="movie__actions">
                                                                                                    <a href="movie/?id='.$row["id"].'" class="movie-actions--link_watch">Watch Now</a>
                                                                                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                                                                                        <a class="dropdown-toggle" href="movie/?id='.$row["id"].'" data-toggle="dropdown">+ Playlist</a>
                                                                                                        <div class="dropdown-menu">
                                                                                                            <a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="movie__review-info">
                                                                                                <a href="movie/?id='.$row["id"].'#reviews" class="avg-rating">
                                                                                                    <span class="rating-with-count">
                                                                                                        <svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
                                                                                                            <title>play</title>
                                                                                                            <path
                                                                                                                fill-rule="evenodd"
                                                                                                                d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
                                                                                                            />
                                                                                                        </svg>
                                                                                                        <span class="avg-rating-number"> 8.0</span>
                                                                                                    </span>
                                                                                                    <span class="rating-number-with-text">
                                                                                                        <span class="avg-rating-number"> 8.0</span>
                                                                                                        <span class="avg-rating-text"> <span>1</span> Vote </span>
                                                                                                    </span>
                                                                                                </a>
                                                                                                <div class="viewers-count"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>';
                                                                        }
                                                                        ?>
                                                                        <!-- Card End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Romantic Movie End -->

                                        <!-- Action And Drama Movies -->
                                        <section
                                            id="section-movies-carousel-aside-header-6144843e3b314"
                                            class="home-section section-movies-carousel-aside-header has-section-header has-bg-color dark header-right"
                                            style="padding-bottom: 9px; padding-top: 60px;">
                                            <div class="container">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Today</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">This week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Last 30 days</a>
                                                    </li>
                                                </ul>
                                                <div class="section-movies-carousel-aside-header__inner">
                                                    <header class="home-section__header section-movies-carousel-aside-header__header">
                                                        <h2 class="home-section__title">
                                                            Action &amp; <br />
                                                            Drama Movies
                                                        </h2>
                                                        <div class="section-movies-carousel-aside-header__custom-arrows"></div>
                                                        <div class="home-section__action">
                                                            <a href="#" class="home-section__action-link">View All</a>
                                                        </div>
                                                    </header>
                                                    <div class="section-movies-carousel__carousel">
                                                        <div
                                                            class="movies-carousel__inner"
                                                            data-ride="vodi-slick-carousel"
                                                            data-wrap=".movies__inner"
                                                            data-slick='{"slidesToShow":6,"slidesToScroll":1,"dots":false,"arrows":true,"autoplay":false,"infinite":false,"responsive":[{"breakpoint":768,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":3,"slidesToScroll":1}},{"breakpoint":1200,"settings":{"slidesToShow":4,"slidesToScroll":1}}],"appendArrows":"#section-movies-carousel-aside-header-6144843e3b314 .section-movies-carousel-aside-header__custom-arrows"}'
                                                        >
                                                            <div class="masvideos masvideos-movies">
                                                                <div class="movies columns-6">
                                                                    <div class="movies__inner">
                                                                        <!-- Card -->
                                                                        <?php
                                                                        include 'php/db.php';
                                                                        $query = "SELECT * FROM movie WHERE category='action' OR category='drama'";
                                                                        $result = mysqli_query($connect, $query);
                                                                        while($row = mysqli_fetch_array($result)){
                                                                        echo '<div class="post-722 movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-comedy movie_tag-4k-ultra movie_tag-brother movie_tag-premieres movie_tag-viking">
                                                                                <div class="movie__poster">
                                                                                    <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                        <img
                                                                                            width="300"
                                                                                            height="450"
                                                                                            src="uploads/'.$row["image"].'"
                                                                                            class="movie__poster--image"
                                                                                            alt=""
                                                                                        />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="movie__body">
                                                                                    <div class="movie__info">
                                                                                        <div class="movie__info--head">
                                                                                            <div class="movie__meta">
                                                                                                <span class="movie__meta--release-year">2018</span>
                                                                                                <span class="movie__meta--genre"><a href="movie-genre/action/" rel="tag">Action</a>, <a href="movie-genre/comedy/" rel="tag">Comedy</a></span>
                                                                                            </div>
                                                                                            <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                                <h3 class="masvideos-loop-movie__title movie__title">
                                                                                                    '.$row["name"].'
                                                                                                </h3>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="movie__short-description">
                                                                                            <div>
                                                                                                <p>
                                                                                                    A lonely woman living in Tokyo decides to take an English class where she discovers her alter ego, Lucy.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="movie__actions">
                                                                                            <a href="movie/?id='.$row["id"].'" class="movie-actions--link_watch">Watch Now</a>
                                                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                                                <a class="dropdown-toggle" href="movie/?id='.$row["id"].'" data-toggle="dropdown">+ Playlist</a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="movie__review-info">
                                                                                        <a href="movie/?id='.$row["id"].'#reviews" class="avg-rating">
                                                                                            <span class="rating-with-count">
                                                                                                <svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
                                                                                                    <title>play</title>
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
                                                                                                    />
                                                                                                </svg>
                                                                                                <span class="avg-rating-number"> 8.0</span>
                                                                                            </span>
                                                                                            <span class="rating-number-with-text">
                                                                                                <span class="avg-rating-number"> 8.0</span>
                                                                                                <span class="avg-rating-text"> <span>1</span> Vote </span>
                                                                                            </span>
                                                                                        </a>
                                                                                        <div class="viewers-count"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                        }
                                                                        ?>
                                                                        <!-- Card End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Action And Drama Movies End -->

                                        <!-- Funniest Comedy Movies -->
                                        <section
                                            id="section-movies-carousel-aside-header-6144843e3f3a2"
                                            class="home-section section-movies-carousel-aside-header has-section-header has-bg-color dark more-dark"
                                            style="padding-top: 59px; padding-bottom: 18px;">
                                            <div class="container">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Today</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">This week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Last 30 days</a>
                                                    </li>
                                                </ul>
                                                <div class="section-movies-carousel-aside-header__inner">
                                                    <header class="home-section__header section-movies-carousel-aside-header__header">
                                                        <h2 class="home-section__title">
                                                            Funniest Comedy Movies of 2018
                                                        </h2>
                                                        <div class="section-movies-carousel-aside-header__custom-arrows"></div>
                                                        <div class="home-section__action">
                                                            <a href="#" class="home-section__action-link">View All</a>
                                                        </div>
                                                    </header>
                                                    <div class="section-movies-carousel__carousel">
                                                        <div
                                                            class="movies-carousel__inner"
                                                            data-ride="vodi-slick-carousel"
                                                            data-wrap=".movies__inner"
                                                            data-slick='{"slidesToShow":6,"slidesToScroll":1,"dots":false,"arrows":true,"autoplay":false,"infinite":false,"responsive":[{"breakpoint":768,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":3,"slidesToScroll":1}},{"breakpoint":1200,"settings":{"slidesToShow":4,"slidesToScroll":1}}],"appendArrows":"#section-movies-carousel-aside-header-6144843e3f3a2 .section-movies-carousel-aside-header__custom-arrows"}'
                                                        >
                                                            <div class="masvideos masvideos-movies">
                                                                <div class="movies columns-6">
                                                                    <div class="movies__inner">
                                                                        <!-- Card -->
                                                                        <?php
                                                                        include 'php/db.php';
                                                                        $query = "SELECT * FROM movie WHERE category='funny'";
                                                                        $result = mysqli_query($connect, $query);
                                                                        while($row = mysqli_fetch_array($result)){
                                                                        echo '<div class="post-722 movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-comedy movie_tag-4k-ultra movie_tag-brother movie_tag-premieres movie_tag-viking">
                                                                                <div class="movie__poster">
                                                                                    <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                        <img
                                                                                            width="300"
                                                                                            height="450"
                                                                                            src="uploads/'.$row["image"].'"
                                                                                            class="movie__poster--image"
                                                                                            alt=""
                                                                                        />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="movie__body">
                                                                                    <div class="movie__info">
                                                                                        <div class="movie__info--head">
                                                                                            <div class="movie__meta">
                                                                                                <span class="movie__meta--release-year">2018</span>
                                                                                                <span class="movie__meta--genre"><a href="movie-genre/action/" rel="tag">Action</a>, <a href="movie-genre/comedy/" rel="tag">Comedy</a></span>
                                                                                            </div>
                                                                                            <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                                <h3 class="masvideos-loop-movie__title movie__title">
                                                                                                    '.$row["name"].'
                                                                                                </h3>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="movie__short-description">
                                                                                            <div>
                                                                                                <p>
                                                                                                    A lonely woman living in Tokyo decides to take an English class where she discovers her alter ego, Lucy.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="movie__actions">
                                                                                            <a href="movie/?id='.$row["id"].'" class="movie-actions--link_watch">Watch Now</a>
                                                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                                                <a class="dropdown-toggle" href="movie/?id='.$row["id"].'" data-toggle="dropdown">+ Playlist</a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="movie__review-info">
                                                                                        <a href="movie/?id='.$row["id"].'#reviews" class="avg-rating">
                                                                                            <span class="rating-with-count">
                                                                                                <svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
                                                                                                    <title>play</title>
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
                                                                                                    />
                                                                                                </svg>
                                                                                                <span class="avg-rating-number"> 8.0</span>
                                                                                            </span>
                                                                                            <span class="rating-number-with-text">
                                                                                                <span class="avg-rating-number"> 8.0</span>
                                                                                                <span class="avg-rating-text"> <span>1</span> Vote </span>
                                                                                            </span>
                                                                                        </a>
                                                                                        <div class="viewers-count"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                        }
                                                                        ?>
                                                                        <!-- Card End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Funniest Comedy Movies End -->

                                        <!-- Popular TV Series -->
                                        <section class="home-section home-tv-show-section-aside-header has-section-header has-bg-color light more-light">
                                            <div class="container">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Today</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">This week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Last 30 days</a>
                                                    </li>
                                                </ul>
                                                <div class="home-tv-show-section-aside-header__inner">
                                                    <div class="masvideos masvideos-tv-shows">
                                                        <div class="tv-shows columns-6">
                                                            <div class="tv-shows__inner">
                                                                <header class="home-section__header">
                                                                    <h2 class="home-section__title">
                                                                        Popular TV Series <br />
                                                                        Right Now
                                                                    </h2>
                                                                </header>
                                                                
                                                                <!-- Card -->
                                                                <?php
                                                                    include 'php/db.php';
                                                                    $query = "SELECT * FROM movie WHERE category='tv_series'";
                                                                    $result = mysqli_query($connect, $query);
                                                                    while($row = mysqli_fetch_array($result)){
                                                                        echo '<div class="tv-show post-2571 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                                            <div class="tv-show__poster">
                                                                                <a href="movie/?id='.$row["id"].'" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
                                                                                    <img
                                                                                        width="970"
                                                                                        height="550"
                                                                                        src="uploads/'.$row["image"].'"
                                                                                        class="tv-show__poster--image tv_show__poster--image"
                                                                                        alt=""
                                                                                    />
                                                                                </a>
                                                                            </div>
                                                                            <div class="tv-show__body">
                                                                                <div class="tv-show__info">
                                                                                    <div class="tv-show__info--head">
                                                                                        <div class="tv-show__meta">
                                                                                            <span class="tv-show__meta--genre"><a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a></span>
                                                                                            <span class="tv-show__meta--release-year">2015 to 2016 &#8211; 2016</span>
                                                                                        </div>
                                                                                        <a href="movie/?id='.$row["id"].'" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
                                                                                            <h3 class="masvideos-loop-tv-show__title tv-show__title">
                                                                                                '.$row["name"].'
                                                                                            </h3>
                                                                                        </a>
                                                                                        <div class="tv-show__episode">
                                                                                            Newest Episode:
                                                                                            <a href="episode/brothers-keeper-2/" class="tv-show__episode--link">S01E04</a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="tv-show__short-description">
                                                                                        <div>
                                                                                            <p>
                                                                                                An emotional thrill ride through the day-to-day chaos of the city&#8217;s most explosive hospital and the courageous team of doctors who hold it
                                                                                                together.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="tv-show__actions">
                                                                                        <a href="movie/?id='.$row["id"].'" class="tv-show-actions--link_watch">Watch Now</a>
                                                                                        <div class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                            <a class="dropdown-toggle" href="movie/?id='.$row["id"].'" data-toggle="dropdown">+ Playlist</a>
                                                                                            <div class="dropdown-menu">
                                                                                                <a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tv-show__review-info">
                                                                                    <div class="viewers-count"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tv-show__hover-area">
                                                                                <div class="tv-show__hover-area--inner">
                                                                                    <div class="tv-show__hover-area--poster">
                                                                                        <div class="tv-show__poster">
                                                                                            <a href="movie/?id='.$row["id"].'" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
                                                                                                <img
                                                                                                    width="970"
                                                                                                    height="550"
                                                                                                    src="uploads/'.$row["image"].'"
                                                                                                    class="tv-show__poster--image tv_show__poster--image"
                                                                                                    alt=""
                                                                                                    
                                                                                                />
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="tv-show__info--head">
                                                                                            <div class="tv-show__meta">
                                                                                                <span class="tv-show__meta--genre"><a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a></span>
                                                                                                <span class="tv-show__meta--release-year">2015 to 2016 &#8211; 2016</span>
                                                                                            </div>
                                                                                            <a href="movie/?id='.$row["id"].'" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
                                                                                                <h3 class="masvideos-loop-tv-show__title tv-show__title">
                                                                                                    Chicago Med
                                                                                                </h3>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="tv-show__hover-area--body">
                                                                                        <div class="tv-show__season-info">
                                                                                            <div class="tv-show__seasons">
                                                                                                Seasons #:
                                                                                                <a href="movie/?id='.$row["id"].'" class="tv-show__episode--link">Season 1</a><a href="movie/?id='.$row["id"].'" class="tv-show__episode--link">Season 2</a>
                                                                                            </div>
                                                                                            <div class="tv-show__episode">
                                                                                                Newest Episode:
                                                                                                <a href="episode/brothers-keeper-2/" class="tv-show__episode--link">S01E04</a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="tv-show__review-info">
                                                                                            <div class="tv-show__avg-rating"></div>
                                                                                            <div class="viewers-count"></div>
                                                                                        </div>
                                                                                        <div class="tv-show__actions">
                                                                                            <a href="movie/?id='.$row["id"].'" class="tv-show-actions--link_watch">Watch Now</a>
                                                                                            <div class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                <a class="dropdown-toggle" href="movie/?id='.$row["id"].'" data-toggle="dropdown">+ Playlist</a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>';
                                                                    }
                                                                ?>
                                                                <!-- Card End -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Popular TV Series End -->

                                        <!-- Featured TV Episode -->
                                        <section
                                            id="section-tv-episodes-carousel-6144843e5e2b0"
                                            class="home-section section-tv-episodes-carousel has-section-header has-bg-color dark header-right"
                                            style="padding-top: 53px; padding-bottom: 32px;">
                                            <div class="container">
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#">Today</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">This week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Last 30 days</a>
                                                    </li>
                                                </ul>
                                                <div class="section-tv-episodes-carousel__inner">
                                                    <header class="home-section__header section-tv-episodes-carousel__header">
                                                        <h2 class="home-section__title">
                                                            Featured TV Episode<br />
                                                            Premieres
                                                        </h2>
                                                        <div class="section-tv-episodes-carousel__custom-arrows"></div>
                                                    </header>
                                                    <div class="section-tv-episodes-carousel__carousel">
                                                        <div
                                                            class="tv-episodes-carousel__inner"
                                                            data-ride="vodi-slick-carousel"
                                                            data-wrap=".episodes__inner"
                                                            data-slick='{"slidesToShow":4,"slidesToScroll":1,"dots":false,"arrows":true,"autoplay":false,"infinite":false,"responsive":[{"breakpoint":768,"settings":{"slidesToShow":1,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":3,"slidesToScroll":1}},{"breakpoint":1200,"settings":{"slidesToShow":4,"slidesToScroll":1}}],"appendArrows":"#section-tv-episodes-carousel-6144843e5e2b0 .section-tv-episodes-carousel__custom-arrows"}'
                                                        >
                                                            <div class="masvideos masvideos-episodes">
                                                                <div class="episodes columns-4">
                                                                    <div class="episodes__inner">
                                                                        <!-- Card -->
                                                                        <?php
                                                                        include 'php/db.php';
                                                                        $query = "SELECT * FROM movie WHERE category='tv_episodes'";
                                                                        $result = mysqli_query($connect, $query);
                                                                        while($row = mysqli_fetch_array($result)){
                                                                        echo '<div class="post-722 movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-comedy movie_tag-4k-ultra movie_tag-brother movie_tag-premieres movie_tag-viking">
                                                                                <div class="movie__poster">
                                                                                    <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                        <img
                                                                                            width="300"
                                                                                            height="450"
                                                                                            src="uploads/'.$row["image"].'"
                                                                                            class="movie__poster--image"
                                                                                            alt=""
                                                                                        />
                                                                                    </a>
                                                                                </div>
                                                                                <div class="movie__body">
                                                                                    <div class="movie__info">
                                                                                        <div class="movie__info--head">
                                                                                            <div class="movie__meta">
                                                                                                <span class="movie__meta--release-year">2018</span>
                                                                                                <span class="movie__meta--genre"><a href="movie-genre/action/" rel="tag">Action</a>, <a href="movie-genre/comedy/" rel="tag">Comedy</a></span>
                                                                                            </div>
                                                                                            <a href="movie/?id='.$row["id"].'" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
                                                                                                <h3 class="masvideos-loop-movie__title movie__title">
                                                                                                    '.$row["name"].'
                                                                                                </h3>
                                                                                            </a>
                                                                                        </div>
                                                                                        <div class="movie__short-description">
                                                                                            <div>
                                                                                                <p>
                                                                                                    A lonely woman living in Tokyo decides to take an English class where she discovers her alter ego, Lucy.
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="movie__actions">
                                                                                            <a href="movie/?id='.$row["id"].'" class="movie-actions--link_watch">Watch Now</a>
                                                                                            <div class="movie-actions--link_add-to-playlist dropdown">
                                                                                                <a class="dropdown-toggle" href="movie/?id='.$row["id"].'" data-toggle="dropdown">+ Playlist</a>
                                                                                                <div class="dropdown-menu">
                                                                                                    <a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="movie__review-info">
                                                                                        <a href="movie/?id='.$row["id"].'#reviews" class="avg-rating">
                                                                                            <span class="rating-with-count">
                                                                                                <svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
                                                                                                    <title>play</title>
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
                                                                                                    />
                                                                                                </svg>
                                                                                                <span class="avg-rating-number"> 8.0</span>
                                                                                            </span>
                                                                                            <span class="rating-number-with-text">
                                                                                                <span class="avg-rating-number"> 8.0</span>
                                                                                                <span class="avg-rating-text"> <span>1</span> Vote </span>
                                                                                            </span>
                                                                                        </a>
                                                                                        <div class="viewers-count"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                        }
                                                                        ?>
                                                                        <!-- Card End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Featured TV Episode End -->

                                    </div>
                                </article>
                            </main>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer id="colophon" class="site-footer site__footer--v1 desktop-footer dark" role="contentinfo">
                <div class="container">
                    <div class="footer-top-bar">
                        <div class="site-footer__logo footer-logo">
                            <a href="" rel="home">
                                <h4>Movie On Click</h4>
                            </a>
                        </div>
                        <div class="footer-social-icons social-label">
                            <ul id="menu-footer-social-menu" class="social-icons">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom social-media-item social-media-item-5164">
                                    <a title="" href="#" class="footer-social-icon">
                                        <span class="fa-stack"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-facebook-f social-media-item__icon fa-stack-1x fa-inverse" aria-hidden="true"></i> </span>
                                        <span class="social-media-item__title">Facebook</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom social-media-item social-media-item-5165">
                                    <a title="" href="#" class="footer-social-icon">
                                        <span class="fa-stack"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-twitter social-media-item__icon fa-stack-1x fa-inverse" aria-hidden="true"></i> </span>
                                        <span class="social-media-item__title">Twitter</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom social-media-item social-media-item-5166">
                                    <a title="" href="#" class="footer-social-icon">
                                        <span class="fa-stack"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-google-plus-g social-media-item__icon fa-stack-1x fa-inverse" aria-hidden="true"></i> </span>
                                        <span class="social-media-item__title">Google+</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom social-media-item social-media-item-5167">
                                    <a title="" href="#" class="footer-social-icon">
                                        <span class="fa-stack"><i class="fas fa-circle fa-stack-2x"></i><i class="fas fa-globe social-media-item__icon fa-stack-1x fa-inverse" aria-hidden="true"></i> </span>
                                        <span class="social-media-item__title">Vimeo</span>
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom social-media-item social-media-item-5168">
                                    <a title="" href="#" class="footer-social-icon">
                                        <span class="fa-stack"><i class="fas fa-circle fa-stack-2x"></i><i class="fas fa-rss social-media-item__icon fa-stack-1x fa-inverse" aria-hidden="true"></i> </span>
                                        <span class="social-media-item__title">RSS</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-widgets">
                        <div class="footer-widgets-inner row-1 col-3 fix">
                            <div class="block footer-widget-1">
                                <div id="nav_menu-1" class="widget widget_nav_menu">
                                    <div class="widget-header">
                                        <span class="widget-title">Movie Categories</span>
                                    </div>
                                    <div class="menu-footer-movie-genres-container">
                                        <ul id="menu-footer-movie-genres" class="menu">
                                            <li id="menu-item-5169" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5169">
                                                <a title="" href="movie-genre/action/">Action</a>
                                            </li>
                                            <li id="menu-item-5170" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5170">
                                                <a title="" href="movie-genre/adventure/">Adventure</a>
                                            </li>
                                            <li id="menu-item-5171" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5171">
                                                <a title="" href="movie-genre/animation/">Animation</a>
                                            </li>
                                            <li id="menu-item-5172" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5172">
                                                <a title="" href="movie-genre/comedy/">Comedy</a>
                                            </li>
                                            <li id="menu-item-5173" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5173">
                                                <a title="" href="movie-genre/crime/">Crime</a>
                                            </li>
                                            <li id="menu-item-5174" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5174">
                                                <a title="" href="movie-genre/drama/">Drama</a>
                                            </li>
                                            <li id="menu-item-5175" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5175">
                                                <a title="" href="movie-genre/fantacy/">Fantacy</a>
                                            </li>
                                            <li id="menu-item-5176" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5176">
                                                <a title="" href="movie-genre/horror/">Horror</a>
                                            </li>
                                            <li id="menu-item-5177" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5177">
                                                <a title="" href="movie-genre/mystrey/">Mystrey</a>
                                            </li>
                                            <li id="menu-item-5178" class="menu-item menu-item-type-taxonomy menu-item-object-movie_genre menu-item-5178">
                                                <a title="" href="movie-genre/romance/">Romance</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="block footer-widget-2">
                                <div id="nav_menu-2" class="widget widget_nav_menu">
                                    <div class="widget-header">
                                        <span class="widget-title">TV Series</span>
                                    </div>
                                    <div class="menu-footer-tv-show-genres-container">
                                        <ul id="menu-footer-tv-show-genres" class="menu">
                                            <li id="menu-item-5179" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5179">
                                                <a title="" href="tv-show-genre/action/">Valentine Day</a>
                                            </li>
                                            <li id="menu-item-5180" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5180">
                                                <a title="" href="tv-show-genre/adventure/">Underrated Comedies</a>
                                            </li>
                                            <li id="menu-item-5181" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5181">
                                                <a title="" href="tv-show-genre/animation/">Scary TV Series</a>
                                            </li>
                                            <li id="menu-item-5183" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5183">
                                                <a title="" href="tv-show-genre/comedy/">Best 2018 Documentaries</a>
                                            </li>
                                            <li id="menu-item-5182" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5182">
                                                <a title="" href="tv-show-genre/biography/">Classic Shows</a>
                                            </li>
                                            <li id="menu-item-5184" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5184">
                                                <a title="" href="tv-show-genre/crime/">Big TV Premieres</a>
                                            </li>
                                            <li id="menu-item-5185" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5185">
                                                <a title="" href="tv-show-genre/crime-drama/">Reality TV Shows</a>
                                            </li>
                                            <li id="menu-item-5186" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5186">
                                                <a title="" href="tv-show-genre/drama/">Original Shows</a>
                                            </li>
                                            <li id="menu-item-5187" class="menu-item menu-item-type-taxonomy menu-item-object-tv_show_genre menu-item-5187">
                                                <a title="" href="tv-show-genre/fantacy/">Suprise of the Year Shows</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="block footer-widget-3">
                                <div id="nav_menu-3" class="widget widget_nav_menu">
                                    <div class="widget-header">
                                        <span class="widget-title">Support</span>
                                    </div>
                                    <div class="menu-footer-support-links-container">
                                        <ul id="menu-footer-support-links" class="menu">
                                            <li id="menu-item-5220" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5220">
                                                <a title="" href="">My Account</a>
                                            </li>
                                            <li id="menu-item-5221" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-343 current_page_item menu-item-5221">
                                                <a title="" href="" aria-current="page">FAQ</a>
                                            </li>
                                            <li id="menu-item-5222" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5222">
                                                <a title="" href="">Watch on TV</a>
                                            </li>
                                            <li id="menu-item-5223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5223">
                                                <a title="" href="">Help Center</a>
                                            </li>
                                            <li id="menu-item-5224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5224">
                                                <a title="" href="">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-bar">
                    <div class="container">
                        <div class="footer-bottom-bar-inner">
                            <div class="site-footer__info site-info">
                                Copyright &copy; 2021, Anandh. All Rights Reserved
                            </div>
                            <ul id="menu-footer-quick-links" class="footer-quick-links nav">
                                <li id="menu-item-5251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5251">
                                    <a title="" href="contact/">
                                        Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <footer class="site-footer handheld-footer dark">
                <div class="container">
                    <div class="site-footer__info site-info">
                        Copyright &copy; 2021, Anandh. All Rights Reserved
                    </div>
                </div>
            </footer>
            <!-- Footer End -->

        </div>

        <!-- Signin & Register -->
        <div class="modal-register-login-wrapper">
            <div class="modal fade modal-register-login" id="modal-register-login" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="masvideos">
                                <div class="masvideos-notices-wrapper"></div>
                                <div class="masvideos-register-login">
                                    <div class="masvideos-register">
                                        <div class="masvideos-register__inner">
                                            <h2>Register</h2>
                                            <form action="php/register-user.php" method="post" class="masvideos-form masvideos-form-register register">
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Name&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class="masvideos-Input masvideos-Input--text input-text" name="name" id="reg_email" autocomplete="name" value="" />
                                                </p>
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                                    <input type="email" class="masvideos-Input masvideos-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="" />
                                                </p>
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Password&nbsp;<span class="required">*</span></label>
                                                    <input type="password" class="masvideos-Input masvideos-Input--text input-text" name="password" id="reg_email" autocomplete="" value="" />
                                                </p>
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Confirm Password&nbsp;<span class="required">*</span></label>
                                                    <input type="password" class="masvideos-Input masvideos-Input--text input-text" name="cpassword" id="reg_email" autocomplete="" value="" />
                                                </p>
                                                <p class="masvideos-FormRow form-row">
                                                    <input type="hidden" id="masvideos-register-nonce" name="masvideos-register-nonce" value="6fc1f0adb1" /><input type="hidden" name="_wp_http_referer" value="/vodi-demos/main/" />
                                                    <button type="submit" class="masvideos-Button button" name="register" value="Register">
                                                        Register
                                                    </button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="masvideos-login">
                                        <div class="masvideos-login__inner">
                                            <h2>Login</h2>
                                            <form action="php/login.php" class="masvideos-form masvideos-form-login login" method="post">
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="username">Email address&nbsp;<span class="required">*</span></label>
                                                    <input type="email" class="masvideos-Input masvideos-Input--text input-text" name="email" id="username" autocomplete="email" value="" />
                                                </p>
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                                                    <input class="masvideos-Input masvideos-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                                                </p>
                                                <p class="form-row">
                                                    <input type="hidden" id="masvideos-login-nonce" name="masvideos-login-nonce" /><input type="hidden" name="_wp_http_referer" />
                                                    <button type="submit" class="masvideos-Button button" name="login" value="Log in">
                                                        Log in
                                                    </button>
                                                    <label class="masvideos-form__label masvideos-form__label-for-checkbox inline">
                                                        <input class="masvideos-form__input masvideos-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" />
                                                        <span>Remember me</span>
                                                    </label>
                                                </p>
                                                <p class="masvideos-LostPassword lost_password">
                                                    <a href="https://demo3.madrasthemes.com/vodi-demos/wp-login.php?action=lostpassword">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="close-button" data-dismiss="modal" aria-label="Close"><i class="la la-close"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Signin & Register End -->

        <script type="text/javascript" src="plugins/contact-form-7/includes/js/scripts.js"></script>
        <script type="text/javascript" src="plugins/masvideos/assets/js/frontend/playlist-tv-show.min.js"></script>
        <script type="text/javascript" src="plugins/masvideos/assets/js/frontend/playlist-video.min.js"></script>
        <script type="text/javascript" src="plugins/masvideos/assets/js/frontend/playlist-movie.min.js"></script>
        <script type="text/javascript" src="plugins/masvideos/assets/js/frontend/gallery-flip.min.js"></script>
        <script type="text/javascript" src="plugins/masvideos/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1"></script>
        <script type="text/javascript" src="plugins/masvideos/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1"></script>
        <script type="text/javascript" src="plugins/wp-ulike/assets/js/wp-ulike.min.js?ver=4.2.2"></script>
        <script type="text/javascript" src="themes/assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="themes/assets/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="themes/assets/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="themes/assets/js/scrollup.min.js"></script>
        <script type="text/javascript" src="themes/assets/js/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="themes/assets/js/readmore.min.js?ver=3.0.0"></script>
        <script type="text/javascript" src="themes/assets/js/simplebar.min.js"></script>
        <script type="text/javascript" src="themes/assets/js/slick.min.js"></script>
        <script type="text/javascript" src="themes/assets/js/vodi-slick.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                var single = $("#movies-sliders-6144843e1fd24 .movies-sliders-single-content__inner");
                var gallery = $("#movies-sliders-6144843e1fd24 .movies-sliders-gallery-images__inner");
                var killit = false;

                $(".movie-slide-gallery-image > img").on("click", function (e) {
                    if (!killit) {
                        e.stopPropagation();
                        var idx = $(this).closest(".movie-slide-gallery-image").data("thumb");
                        single.slick("slickGoTo", idx);
                    }
                });

                // need to register a flag that doesn't let us click the slider
                // as we are trying to swipe it.

                gallery
                    .on("beforeChange", function () {
                        killit = true;
                    })
                    .on("afterChange", function () {
                        killit = false;
                    });
            });
        </script>
        <script type="text/javascript" src="themes/assets/js/vodi.min.js"></script>
        <script type="text/javascript" src="wp-includes/js/wp-embed.min.js"></script>
        <script type="text/javascript" src="https://stats.wp.com/e-202137.js" async="async" defer="defer"></script>
    </body>
</html>
