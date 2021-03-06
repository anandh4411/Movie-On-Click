<?php $id = $_GET["id"]; ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <link rel="pingback" href="xmlrpc.php" />
        <title>American Made</title>
        <link rel="stylesheet" id="wp-block-library-css" href="wp-includes/css/dist/block-library/style.min.css" type="text/css" media="all" />
        <style id="wp-block-library-inline-css" type="text/css">
            .has-text-align-justify {
                text-align: justify;
            }
        </style>
        <link rel="stylesheet" id="wp-block-library-theme-css" href="wp-includes/css/dist/block-library/theme.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-comingsoon-launch-section-css" href="../css/" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-viewcounts-section-css" href="../css/landing-viewcounts-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-faq-section-css" href="../css/faq-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-features-list-css" href="../css/landing-features-list/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-featured-video-css" href="../css/landing-featured-video/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-tabs-features-css" href="../css/landing-tabs-features/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-movies-carousel-css" href="../css/landing-movies-carousel/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-featured-section-css" href="../css/landing-featured-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-landing-hero-banner-css" href="../css/landing-hero-banner/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-full-width-banner-css" href="../css/section-full-width-banner/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-video-section-css" href="../css/video-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-tv-show-section-css" href="../css/tv-show-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-hot-premieres-block-css" href="../css/hot-premieres-block/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-movie-section-aside-header-css" href="../css/movie-section-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-video-section-aside-header-css" href="../css/video-section-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-movies-carousel-aside-header-css" href="../css/section-movies-carousel-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-videos-carousel-aside-header-css" href="../css/section-videos-carousel-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-movies-carousel-nav-header-css" href="../css/section-movies-carousel-nav-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-videos-carousel-nav-header-css" href="../css/section-videos-carousel-nav-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-movies-carousel-flex-header-css" href="../css/section-movies-carousel-flex-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-videos-carousel-flex-header-css" href="../css/section-videos-carousel-flex-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="section-featured-post-css" href="../css/section-featured-post/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="videos-with-featured-video-css" href="../css/videos-with-featured-video/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-featured-movies-carousel-css" href="../css/featured-movies-carousel/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-featured-movie-css" href="../css/section-featured-movie/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-featured-tv-show-css" href="../css/section-featured-tv-show/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-banner-with-section-tv-shows-css" href="../css/banner-with-section-tv-shows/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-list-section-css" href="../css/blog-list-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-grid-section-css" href="../css/blog-grid-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-tab-section-css" href="../css/blog-tab-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-slider-movies-css" href="../css/slider-movies/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-live-videos-css" href="../css/section-live-videos/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-videos-slider-css" href="../css/videos-slider/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-movies-slider-css" href="../css/movies-slider/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-tv-shows-slider-css" href="../css/tv-shows-slider/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-coming-soon-videos-css" href="../css/section-coming-soon-videos/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-movies-list-css" href="../css/movies-list/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-blog-grid-with-list-section-css" href="../css/blog-grid-with-list-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-recent-comments-css" href="../css/recent-comments/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-event-category-list-css" href="../css/section-event-category-list/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-featured-blog-with-blog-grid-section-css" href="../css/featured-blog-with-blog-grid-section/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-active-videos-css" href="../css/active-videos/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-playlist-carousel-css" href="../css/section-playlist-carousel/style.min.css" type="text/css" media="all" />
        <link
            rel="stylesheet"
            id="vodi-section-tv-episodes-carousel-aside-header-css"
            href="../css/section-tv-episodes-carousel-aside-header/style.min.css"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="vodi-section-tv-episodes-carousel-flex-header-css"
            href="../css/section-tv-episodes-carousel-flex-header/style.min.css"
            type="text/css"
            media="all"
        />
        <link rel="stylesheet" id="vodi-tv-show-section-aside-header-css" href="../css/tv-show-section-aside-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-section-tv-shows-carousel-nav-header-css" href="../css/section-tv-shows-carousel-nav-header/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-episodes-with-featured-episode-css" href="../css/episodes-with-featured-episode/style.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-block-styles-css" href="../themes/" type="text/css" media="all" />
        <link rel="stylesheet" id="contact-form-7-css" href="../plugins/contact-form-7/includes/css/styles.css" type="text/css" media="all" />
        <link rel="stylesheet" id="wpcdt-public-css-css" href="../plugins/countdown-timer-ultimate/assets/css/wpcdt-timecircles.css" type="text/css" media="all" />
        <link rel="stylesheet" id="photoswipe-css" href="../plugins/masvideos/assets/css/photoswipe/photoswipe.css" type="text/css" media="all" />
        <link rel="stylesheet" id="photoswipe-default-skin-css" href="../plugins/masvideos/assets/css/photoswipe/default-skin/default-skin.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-style-css" href="../themes/style.css" type="text/css" media="all" />
        <link rel="stylesheet" id="fontawesome-css" href="../themes/assets/css/fontawesome.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-fancybox-css" href="../themes/assets/css/jquery.fancybox.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-theme-css" href="../themes/assets/css/theme.css" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css" href="../themes/assets/css/animate.min.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-masvideos-css" href="../themes/assets/css/masvideos.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-color-css" href="../themes/assets/css/colors/blue.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vodi-fonts-css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800%7cOpen+Sans:400,600,700&#038;subset=latin%2Clatin-ext" type="text/css" media="all" />
        <link rel="stylesheet" id="jetpack_css-css" href="../plugins/jetpack/css/jetpack.css" type="text/css" media="all" />
        <script type="text/javascript" src="wp-includes/js/jquery/jquery.js"></script>
        <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min.js"></script>
    </head>
    <body class="movie-template-default single single-movie postid-268 wp-embed-responsive masvideos masvideos-page masvideos-single masvideos-no-js single-movie-v1 full-width dark">
        <div id="page" class="hfeed site">

			<!-- NavBar -->
			<header id="site-header" class="site-header header-v1 desktop-header stick-this light" role="banner" style="">
				<div class="container-fluid">
					<div class="site-header__inner">
						<div class="site-header__right">
							<div class="site-header__logo">
								<a href="" rel="home" class="navbar-brand">
									<h4 style="color: lightblue;">MOVIE ON CLICK</h4>
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
									<li id="menu-item-5551" class="yamm-fw menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5551">
										<a href="movies/">Movies</a>
										<ul class="sub-menu">
											<li id="menu-item-5204" class="menu-item menu-item-type-post_type menu-item-object-mas_static_content menu-item-5204">
												<a title="						" href="?mas_static_content=movies-megamenu">Movies Megamenu</a>
												<div class="yamm-content">
													<div class="wp-block-columns has-3-columns">
														<div class="wp-block-column">
															<h2>Movie of the Day</h2>
															<div class="masvideos masvideos-movies vodi-megamenu-movie">
																<div class="movies columns-1">
																	<div class="movies__inner">
																		<div
																			class="post-322 movie type-movie status-publish has-post-thumbnail hentry movie_genre-adventure movie_genre-comedy movie_genre-romance movie_tag-4k-ultra movie_tag-king movie_tag-premieres movie_tag-viking"
																		>
																			<div class="movie__poster">
																				<a href="movie/the-big-sick/" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
																					<img
																						width="300"
																						height="450"
																						src="uploads/sites/2/2019/04/36-cztery-lwy-300x450.jpg"
																						class="movie__poster--image"
																						alt=""
																						srcset="
																							uploads/sites/2/2019/04/36-cztery-lwy-300x450.jpg 300w,
																							uploads/sites/2/2019/04/36-cztery-lwy-66x98.jpg    66w,
																							uploads/sites/2/2019/04/36-cztery-lwy-600x900.jpg 600w,
																							uploads/sites/2/2019/04/36-cztery-lwy-150x225.jpg 150w
																						"
																						sizes="(max-width: 300px) 100vw, 300px"
																					/>
																				</a>
																			</div>
																			<div class="movie__body">
																				<div class="movie__info">
																					<div class="movie__info--head">
																						<div class="movie__meta">
																							<span class="movie__meta--release-year">2017</span>
																							<span class="movie__meta--genre">
																								<a href="movie-genre/adventure/" rel="tag">Adventure</a>, <a href="movie-genre/comedy/" rel="tag">Comedy</a>,
																								<a href="movie-genre/romance/" rel="tag">Romance</a>
																							</span>
																						</div>
																						<a href="movie/the-big-sick/" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
																							<h3 class="masvideos-loop-movie__title movie__title">
																								The Big Sick
																							</h3>
																						</a>
																					</div>
																					<div class="movie__short-description">
																						<div>
																							<p>
																								Pakistan-born comedian Kumail Nanjiani and grad student Emily Gardner fall in love but struggle as their cultures clash. When Emily contracts a
																								mysterious illness, Kumail finds himself forced to face her feisty parents, his family&#8217;s expectations, and his true feelings
																							</p>
																						</div>
																					</div>
																					<div class="movie__actions">
																						<a href="movie/the-big-sick/" class="movie-actions--link_watch">Watch Now</a>
																						<div class="movie-actions--link_add-to-playlist dropdown">
																							<a class="dropdown-toggle" href="movie/the-big-sick/" data-toggle="dropdown">+ Playlist</a>
																							<div class="dropdown-menu">
																								<a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="movie__review-info">
																					<a href="movie/the-big-sick/#reviews" class="avg-rating">
																						<span class="rating-with-count">
																							<svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
																								<title>play</title>
																								<path
																									fill-rule="evenodd"
																									d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
																								/>
																							</svg>
																							<span class="avg-rating-number"> 5.0</span>
																						</span>
																						<span class="rating-number-with-text">
																							<span class="avg-rating-number"> 5.0</span>
																							<span class="avg-rating-text"> <span>1</span> Vote </span>
																						</span>
																					</a>
																					<div class="viewers-count"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="wp-block-column">
															<h2>Movies Genre</h2>
															<ul class="menu">
																<li><a href="movies">Action</a></li>
																<li><a href="movies">Adventure</a></li>
																<li><a href="movies">Comedy</a></li>
																<li><a href="movies">Drama</a></li>
																<li><a href="movies">Sci-Fi</a></li>
																<li><a href="movies">Thriller</a></li>
																<li><a href="movies">Biography</a></li>
																<li><a href="movies">Family</a></li>
																<li><a href="movies">Romance</a></li>
																<li><a href="movies">Animation</a></li>
																<li><a href="movies">Thriller</a></li>
																<li><a href="movies">Adventure</a></li>
																<li><a href="movies">Biography</a></li>
																<li><a href="movies">Action</a></li>
																<li><a href="movies">Family</a></li>
																<li><a href="movies">Sci-Fi</a></li>
																<li><a href="movies">Romance</a></li>
																<li><a href="movies">Drama</a></li>
																<li><a href="movies">Comedy</a></li>
															</ul>
														</div>
														<div class="wp-block-column">
															<h2>Movie Trailer</h2>
															<section id="section-videos-carousel-flex-header-6144843e02292" class="home-section section-videos-carousel-flex-header style-2" style="padding-left: 40px; padding-right: 40px;">
																<div class="container">
																	<div class="home-section__inner">
																		<div class="section-videos-carousel__carousel">
																			<div
																				class="videos-carousel__inner"
																				data-ride="vodi-slick-carousel"
																				data-wrap=".videos__inner"
																				data-slick='{"slidesToShow":1,"slidesToScroll":1,"dots":false,"arrows":true,"autoplay":false,"infinite":false,"responsive":[{"breakpoint":768,"settings":{"slidesToShow":1,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":3,"slidesToScroll":1}},{"breakpoint":1200,"settings":{"slidesToShow":4,"slidesToScroll":1}}]}'
																			>
																				<div class="masvideos masvideos-videos">
																					<div class="videos columns-1">
																						<div class="videos__inner">
																							<div class="post-1478 video type-video status-publish has-post-thumbnail hentry video_cat-tennis">
																								<div class="video__container">
																									<div class="video__poster">
																										<a href="video/anderson-fights-his-way-to-glory/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																											<img
																												width="480"
																												height="270"
																												src="uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-480x270.jpg"
																												class="video__poster--image"
																												alt=""
																												data-gallery-images="[]"
																												srcset="
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-480x270.jpg   480w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-270x153.jpg   270w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-220x125.jpg   220w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-244x138.jpg   244w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-339x192.jpg   339w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-327x185.jpg   327w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-300x169.jpg   300w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-768x432.jpg   768w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-1024x576.jpg 1024w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-640x360.jpg   640w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk-120x67.jpg    120w,
																													uploads/sites/2/2019/04/video-thumbnail-K5h2cd4QtKk.jpg          1280w
																												"
																												sizes="(max-width: 480px) 100vw, 480px"
																											/>
																										</a>
																									</div>
																								</div>
																								<div class="video__body">
																									<div class="video__info">
																										<div class="video__info--head">
																											<a href="video/anderson-fights-his-way-to-glory/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																												<h3 class="masvideos-loop-video__title video__title">
																													Anderson Fights His Way to Glory
																												</h3>
																											</a>
																											<div class="video__views-meta">
																												<div class="vodi-jetpack-views">
																													<span>2.6K views</span>
																												</div>
																												<div class="video__meta">
																													<span class="video__meta--last-update">3 years ago</span>
																												</div>
																											</div>
																										</div>
																										<div class="video__short-description">
																											<div>
																												Kevin Anderson is a South African professional tennis player who is ranked world No. 5 in men&#8217;s singles by the Association
																												of Tennis Professionals as of 28 January 2019.
																											</div>
																										</div>
																										<div class="video__actions">
																											<a href="video/anderson-fights-his-way-to-glory/" class="video-actions--link_watch">Watch Now</a>
																											<div class="video-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="video/anderson-fights-his-way-to-glory/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/video-playlists/">Sign in to add this video to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="video__review-info">
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																							</div>
																							<div class="post-1475 video type-video status-publish has-post-thumbnail hentry video_cat-cricket">
																								<div class="video__container">
																									<div class="video__poster">
																										<a href="video/unstoppable-vihari-cruises-with-151/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																											<img
																												width="480"
																												height="270"
																												src="uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-480x270.jpg"
																												class="video__poster--image"
																												alt=""
																												data-gallery-images="[]"
																												srcset="
																													uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-480x270.jpg 480w,
																													uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-270x153.jpg 270w,
																													uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-220x125.jpg 220w,
																													uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-244x138.jpg 244w,
																													uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-339x192.jpg 339w,
																													uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-327x185.jpg 327w,
																													uploads/sites/2/2019/04/video-thumbnail-KXVlVCix6NI-120x67.jpg  120w
																												"
																												sizes="(max-width: 480px) 100vw, 480px"
																											/>
																										</a>
																									</div>
																								</div>
																								<div class="video__body">
																									<div class="video__info">
																										<div class="video__info--head">
																											<a href="video/unstoppable-vihari-cruises-with-151/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																												<h3 class="masvideos-loop-video__title video__title">
																													Unstoppable Vihari Cruises with 151*
																												</h3>
																											</a>
																											<div class="video__views-meta">
																												<div class="vodi-jetpack-views">
																													<span>1.9K views</span>
																												</div>
																												<div class="video__meta">
																													<span class="video__meta--last-update">3 years ago</span>
																												</div>
																											</div>
																										</div>
																										<div class="video__short-description">
																											<div>
																												Hanuma Vihari is an Indian cricketer who plays for Andhra in Indian domestic cricket. A right-handed batsman and occasional
																												right arm off break bowler, he was a member of the India Under-19 cricket team that won the 2012 ICC Under-19 Cricket World Cup
																												in Australia. He made his Test debut for India in September 2018.
																											</div>
																										</div>
																										<div class="video__actions">
																											<a href="video/unstoppable-vihari-cruises-with-151/" class="video-actions--link_watch">Watch Now</a>
																											<div class="video-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="video/unstoppable-vihari-cruises-with-151/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/video-playlists/">Sign in to add this video to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="video__review-info">
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																							</div>
																							<div class="post-1473 video type-video status-publish has-post-thumbnail hentry video_cat-football">
																								<div class="video__container">
																									<div class="video__poster">
																										<a href="video/spain-vs-netherlands/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																											<img
																												width="480"
																												height="270"
																												src="uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-480x270.jpg"
																												class="video__poster--image"
																												alt=""
																												data-gallery-images='["https:\/\/demo3.madrasthemes.com\/vodi-demos\/main\/wp-content\/uploads\/sites\/2\/2019\/02\/hi-res-a032b247f1362a4640fe20a86c536c8b_crop_north.jpg","https:\/\/demo3.madrasthemes.com\/vodi-demos\/main\/wp-content\/uploads\/sites\/2\/2019\/02\/iniesta_650x360_061414020515.jpg","https:\/\/demo3.madrasthemes.com\/vodi-demos\/main\/wp-content\/uploads\/sites\/2\/2019\/02\/netherlands-vs-spain_650x360_061314103658.jpg","https:\/\/demo3.madrasthemes.com\/vodi-demos\/main\/wp-content\/uploads\/sites\/2\/2019\/02\/spain-vs-netherlands-world-cup-final.jpg"]'
																												srcset="
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-480x270.jpg   480w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-270x153.jpg   270w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-220x125.jpg   220w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-244x138.jpg   244w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-339x192.jpg   339w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-327x185.jpg   327w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-300x169.jpg   300w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-768x432.jpg   768w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-1024x576.jpg 1024w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-640x360.jpg   640w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo-120x67.jpg    120w,
																													uploads/sites/2/2019/04/video-thumbnail-agm8CNZEvyo.jpg          1280w
																												"
																												sizes="(max-width: 480px) 100vw, 480px"
																											/>
																										</a>
																									</div>
																								</div>
																								<div class="video__body">
																									<div class="video__info">
																										<div class="video__info--head">
																											<a href="video/spain-vs-netherlands/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																												<h3 class="masvideos-loop-video__title video__title">
																													Spain vs Netherlands
																												</h3>
																											</a>
																											<div class="video__views-meta">
																												<div class="vodi-jetpack-views">
																													<span>1.7K views</span>
																												</div>
																												<div class="video__meta">
																													<span class="video__meta--last-update">3 years ago</span>
																												</div>
																											</div>
																										</div>
																										<div class="video__short-description">
																											<div>
																												<p>
																													Netherlands produced a sensational second-half performance to annihilate reigning champions Spain in a stunned Arena Fonte
																													Nova.
																												</p>
																											</div>
																										</div>
																										<div class="video__actions">
																											<a href="video/spain-vs-netherlands/" class="video-actions--link_watch">Watch Now</a>
																											<div class="video-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="video/spain-vs-netherlands/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/video-playlists/">Sign in to add this video to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="video__review-info">
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																							</div>
																							<div class="post-1471 video type-video status-publish has-post-thumbnail hentry video_cat-hockey">
																								<div class="video__container">
																									<div class="video__poster">
																										<a href="video/steyn-betters-kapil-arsenal-lose/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																											<img
																												width="480"
																												height="270"
																												src="uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-480x270.jpg"
																												class="video__poster--image"
																												alt=""
																												data-gallery-images="[]"
																												srcset="
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-480x270.jpg   480w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-270x153.jpg   270w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-220x125.jpg   220w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-244x138.jpg   244w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-339x192.jpg   339w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-327x185.jpg   327w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-300x169.jpg   300w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-768x432.jpg   768w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-1024x576.jpg 1024w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-640x360.jpg   640w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI-120x67.jpg    120w,
																													uploads/sites/2/2019/04/video-thumbnail-8qWC_-4zqWI.jpg          1280w
																												"
																												sizes="(max-width: 480px) 100vw, 480px"
																											/>
																										</a>
																									</div>
																								</div>
																								<div class="video__body">
																									<div class="video__info">
																										<div class="video__info--head">
																											<a href="video/steyn-betters-kapil-arsenal-lose/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																												<h3 class="masvideos-loop-video__title video__title">
																													Steyn Betters Kapil, Arsenal Lose
																												</h3>
																											</a>
																											<div class="video__views-meta">
																												<div class="vodi-jetpack-views">
																													<span>1.5K views</span>
																												</div>
																												<div class="video__meta">
																													<span class="video__meta--last-update">3 years ago</span>
																												</div>
																											</div>
																										</div>
																										<div class="video__short-description">
																											<div>
																												Arsenal suffered a shock 1-0 defeat at BATE Borisov on a night forward Alexandre Lacazette will want to forget after being sent
																												off late on, while Chelsea, Inter Milan, and Napoli all won away in Europa League last 32 first-leg ties on Thursday.
																											</div>
																										</div>
																										<div class="video__actions">
																											<a href="video/steyn-betters-kapil-arsenal-lose/" class="video-actions--link_watch">Watch Now</a>
																											<div class="video-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="video/steyn-betters-kapil-arsenal-lose/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/video-playlists/">Sign in to add this video to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="video__review-info">
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																							</div>
																							<div class="post-1469 video type-video status-publish has-post-thumbnail hentry video_cat-cricket">
																								<div class="video__container">
																									<div class="video__poster">
																										<a href="video/all-india-selection-committee-meet/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																											<img
																												width="480"
																												height="270"
																												src="uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-480x270.jpg"
																												class="video__poster--image"
																												alt=""
																												data-gallery-images="[]"
																												srcset="
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-480x270.jpg 480w,
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-270x153.jpg 270w,
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-220x125.jpg 220w,
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-244x138.jpg 244w,
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-339x192.jpg 339w,
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-327x185.jpg 327w,
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-640x360.jpg 640w,
																													uploads/sites/2/2019/04/video-thumbnail-N_PBcj9LLs-120x67.jpg  120w
																												"
																												sizes="(max-width: 480px) 100vw, 480px"
																											/>
																										</a>
																									</div>
																								</div>
																								<div class="video__body">
																									<div class="video__info">
																										<div class="video__info--head">
																											<a href="video/all-india-selection-committee-meet/" class="masvideos-LoopVideo-link masvideos-loop-video__link video__link">
																												<h3 class="masvideos-loop-video__title video__title">
																													All-India Selection Committee Meet
																												</h3>
																											</a>
																											<div class="video__views-meta">
																												<div class="vodi-jetpack-views">
																													<span>62 views</span>
																												</div>
																												<div class="video__meta">
																													<span class="video__meta--last-update">3 years ago</span>
																												</div>
																											</div>
																										</div>
																										<div class="video__short-description">
																											<div>
																												Indian National Cricket Selectors is a committee of cricket administrators (usually ex-cricket players) whose responsibility is
																												the selection of cricket team to represent India at various levels. The term for the selectors was increased from 1-year to 2
																												years in 2006[1] with a provision for an additional year based on performance. Technically, there are 2 groups of selector
																											</div>
																										</div>
																										<div class="video__actions">
																											<a href="video/all-india-selection-committee-meet/" class="video-actions--link_watch">Watch Now</a>
																											<div class="video-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="video/all-india-selection-committee-meet/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/video-playlists/">Sign in to add this video to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="video__review-info">
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li id="menu-item-5552" class="yamm-fw menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5552">
										<a href="tv-shows/">TV Shows</a>
										<ul class="sub-menu">
											<li id="menu-item-5206" class="menu-item menu-item-type-post_type menu-item-object-mas_static_content menu-item-5206">
												<a title="						" href="?mas_static_content=tv-shows-megamenu">TV Shows Megamenu</a>
												<div class="yamm-content">
													<div class="wp-block-columns has-2-columns">
														<div class="wp-block-column">
															<ul>
																<li class="highlight">
																	<a href="tv-shows/">Trending TV Shows</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">Popular Now</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">New This Month</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">Vodi Exclusives</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">Just for Kids</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">Featured Shows</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">TV Show Genres</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">TV Series: Drama</a>
																</li>
																<li class="highlight">
																	<a href="tv-shows/">TV Series: Comedy</a>
																</li>
															</ul>
															<p></p>
														</div>
														<div class="wp-block-column">
															<h2>Picked for You: Madras Themes</h2>
															<section id="section-tv-show-carousel-6144843e0b863" class="home-section section-tv-show-carousel">
																<div class="container">
																	<div class="section-tv-show-carousel__inner">
																		<div class="tv-show-carousel">
																			<div
																				class="tv-show-carousel__inner"
																				data-ride="vodi-slick-carousel"
																				data-wrap=".tv-shows__inner"
																				data-slick='{"slidesToShow":5,"slidesToScroll":5,"dots":true,"arrows":false,"autoplay":false,"infinite":false,"responsive":[{"breakpoint":768,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":992,"settings":{"slidesToShow":3,"slidesToScroll":1}},{"breakpoint":1200,"settings":{"slidesToShow":4,"slidesToScroll":1}}]}'
																			>
																				<div class="masvideos masvideos-tv-shows">
																					<div class="tv-shows columns-5">
																						<div class="tv-shows__inner">
																							<div
																								class="tv-show post-2571 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/chicago-med-2/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/42-limit.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/42-limit.jpg         970w,
																												uploads/sites/2/2019/04/42-limit-270x153.jpg 270w,
																												uploads/sites/2/2019/04/42-limit-220x125.jpg 220w,
																												uploads/sites/2/2019/04/42-limit-324x184.jpg 324w,
																												uploads/sites/2/2019/04/42-limit-272x155.jpg 272w,
																												uploads/sites/2/2019/04/42-limit-214x122.jpg 214w,
																												uploads/sites/2/2019/04/42-limit-244x138.jpg 244w,
																												uploads/sites/2/2019/04/42-limit-339x192.jpg 339w,
																												uploads/sites/2/2019/04/42-limit-327x185.jpg 327w,
																												uploads/sites/2/2019/04/42-limit-300x170.jpg 300w,
																												uploads/sites/2/2019/04/42-limit-768x435.jpg 768w,
																												uploads/sites/2/2019/04/42-limit-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																												</span>
																												<span class="tv-show__meta--release-year">2015 to 2016 &#8211; 2016</span>
																											</div>
																											<a href="tv-show/chicago-med-2/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													Chicago Med
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
																													An emotional thrill ride through the day-to-day chaos of the city&#8217;s most explosive hospital and the courageous team of
																													doctors who hold it together.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/chicago-med-2/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/chicago-med-2/" data-toggle="dropdown">+ Playlist</a>
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
																												<a href="tv-show/chicago-med-2/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/42-limit.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/42-limit.jpg         970w,
																															uploads/sites/2/2019/04/42-limit-270x153.jpg 270w,
																															uploads/sites/2/2019/04/42-limit-220x125.jpg 220w,
																															uploads/sites/2/2019/04/42-limit-324x184.jpg 324w,
																															uploads/sites/2/2019/04/42-limit-272x155.jpg 272w,
																															uploads/sites/2/2019/04/42-limit-214x122.jpg 214w,
																															uploads/sites/2/2019/04/42-limit-244x138.jpg 244w,
																															uploads/sites/2/2019/04/42-limit-339x192.jpg 339w,
																															uploads/sites/2/2019/04/42-limit-327x185.jpg 327w,
																															uploads/sites/2/2019/04/42-limit-300x170.jpg 300w,
																															uploads/sites/2/2019/04/42-limit-768x435.jpg 768w,
																															uploads/sites/2/2019/04/42-limit-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																													</span>
																													<span class="tv-show__meta--release-year">2015 to 2016 &#8211; 2016</span>
																												</div>
																												<a href="tv-show/chicago-med-2/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
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
																													<a href="tv-show/chicago-med-2/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/chicago-med-2/" class="tv-show__episode--link">Season 2</a>
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
																												<a href="tv-show/chicago-med-2/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/chicago-med-2/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="tv-show post-2560 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-comedy tv_show_genre-drama tv_show_tag-4k-ultra tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/the-last-man-on-the-earth/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/41-light.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/41-light.jpg         970w,
																												uploads/sites/2/2019/04/41-light-270x153.jpg 270w,
																												uploads/sites/2/2019/04/41-light-220x125.jpg 220w,
																												uploads/sites/2/2019/04/41-light-324x184.jpg 324w,
																												uploads/sites/2/2019/04/41-light-272x155.jpg 272w,
																												uploads/sites/2/2019/04/41-light-214x122.jpg 214w,
																												uploads/sites/2/2019/04/41-light-244x138.jpg 244w,
																												uploads/sites/2/2019/04/41-light-339x192.jpg 339w,
																												uploads/sites/2/2019/04/41-light-327x185.jpg 327w,
																												uploads/sites/2/2019/04/41-light-300x170.jpg 300w,
																												uploads/sites/2/2019/04/41-light-768x435.jpg 768w,
																												uploads/sites/2/2019/04/41-light-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/comedy/" rel="tag">Comedy</a>,
																													<a href="tv-show-genre/drama/" rel="tag">Drama</a>
																												</span>
																												<span class="tv-show__meta--release-year">2015 &#8211; 2015</span>
																											</div>
																											<a href="tv-show/the-last-man-on-the-earth/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													The Last Man on the earth
																												</h3>
																											</a>
																											<div class="tv-show__episode">
																												Newest Episode:
																												<a href="episode/crickets/" class="tv-show__episode--link">S02E05</a>
																											</div>
																										</div>
																										<div class="tv-show__short-description">
																											<div>
																												<p>
																													Almost two years after a virus wiped out most of the human race, Phil Miller only wishes for some company, but soon gets
																													more than he bargained for when that company shows up in the form of other survivors.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/the-last-man-on-the-earth/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/the-last-man-on-the-earth/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="tv-show__review-info">
																										<a href="tv-show/the-last-man-on-the-earth/#reviews" class="avg-rating">
																											<span class="rating-with-count">
																												<svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
																													<title>play</title>
																													<path
																														fill-rule="evenodd"
																														d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
																													/>
																												</svg>
																												<span class="avg-rating-number"> 6.0</span>
																											</span>
																											<span class="rating-number-with-text">
																												<span class="avg-rating-number"> 6.0</span>
																												<span class="avg-rating-text">
																													<span>1</span>
																													Vote
																												</span>
																											</span>
																										</a>
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																								<div class="tv-show__hover-area">
																									<div class="tv-show__hover-area--inner">
																										<div class="tv-show__hover-area--poster">
																											<div class="tv-show__poster">
																												<a href="tv-show/the-last-man-on-the-earth/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/41-light.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/41-light.jpg         970w,
																															uploads/sites/2/2019/04/41-light-270x153.jpg 270w,
																															uploads/sites/2/2019/04/41-light-220x125.jpg 220w,
																															uploads/sites/2/2019/04/41-light-324x184.jpg 324w,
																															uploads/sites/2/2019/04/41-light-272x155.jpg 272w,
																															uploads/sites/2/2019/04/41-light-214x122.jpg 214w,
																															uploads/sites/2/2019/04/41-light-244x138.jpg 244w,
																															uploads/sites/2/2019/04/41-light-339x192.jpg 339w,
																															uploads/sites/2/2019/04/41-light-327x185.jpg 327w,
																															uploads/sites/2/2019/04/41-light-300x170.jpg 300w,
																															uploads/sites/2/2019/04/41-light-768x435.jpg 768w,
																															uploads/sites/2/2019/04/41-light-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/comedy/" rel="tag">Comedy</a>,
																														<a href="tv-show-genre/drama/" rel="tag">Drama</a>
																													</span>
																													<span class="tv-show__meta--release-year">2015 &#8211; 2015</span>
																												</div>
																												<a href="tv-show/the-last-man-on-the-earth/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<h3 class="masvideos-loop-tv-show__title tv-show__title">
																														The Last Man on the earth
																													</h3>
																												</a>
																											</div>
																										</div>
																										<div class="tv-show__hover-area--body">
																											<div class="tv-show__season-info">
																												<div class="tv-show__seasons">
																													Seasons #:
																													<a href="tv-show/the-last-man-on-the-earth/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/the-last-man-on-the-earth/" class="tv-show__episode--link">Season 2</a>
																												</div>
																												<div class="tv-show__episode">
																													Newest Episode:
																													<a href="episode/crickets/" class="tv-show__episode--link">S02E05</a>
																												</div>
																											</div>
																											<div class="tv-show__review-info">
																												<div class="tv-show__avg-rating">
																													<a href="tv-show/the-last-man-on-the-earth/#reviews" class="avg-rating">
																														<div class="avg-rating__inner">
																															<span class="avg-rating__number"> 6.0</span>
																															<span class="avg-rating__text">
																																<span>1</span>
																																Vote
																															</span>
																														</div>
																													</a>
																												</div>
																												<div class="viewers-count"></div>
																											</div>
																											<div class="tv-show__actions">
																												<a href="tv-show/the-last-man-on-the-earth/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/the-last-man-on-the-earth/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="tv-show post-2547 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-comedy tv_show_genre-drama tv_show_tag-4k-ultra tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-king tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/unbreakable-kimmy-schmidt/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/40-keep-going.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/40-keep-going.jpg         970w,
																												uploads/sites/2/2019/04/40-keep-going-270x153.jpg 270w,
																												uploads/sites/2/2019/04/40-keep-going-220x125.jpg 220w,
																												uploads/sites/2/2019/04/40-keep-going-324x184.jpg 324w,
																												uploads/sites/2/2019/04/40-keep-going-272x155.jpg 272w,
																												uploads/sites/2/2019/04/40-keep-going-214x122.jpg 214w,
																												uploads/sites/2/2019/04/40-keep-going-244x138.jpg 244w,
																												uploads/sites/2/2019/04/40-keep-going-339x192.jpg 339w,
																												uploads/sites/2/2019/04/40-keep-going-327x185.jpg 327w,
																												uploads/sites/2/2019/04/40-keep-going-300x170.jpg 300w,
																												uploads/sites/2/2019/04/40-keep-going-768x435.jpg 768w,
																												uploads/sites/2/2019/04/40-keep-going-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/comedy/" rel="tag">Comedy</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																												</span>
																												<span class="tv-show__meta--release-year">2015 &#8211; 2016</span>
																											</div>
																											<a href="tv-show/unbreakable-kimmy-schmidt/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													Unbreakable Kimmy Schmidt
																												</h3>
																											</a>
																											<div class="tv-show__episode">
																												Newest Episode:
																												<a href="episode/kimmy-gives-up/" class="tv-show__episode--link">S02E05</a>
																											</div>
																										</div>
																										<div class="tv-show__short-description">
																											<div>
																												<p>
																													Praesent iaculis, purus ac vehicula mattis, arcu lorem blandit nisl, non laoreet dui mi eget elit. Donec porttitor ex vel
																													augue maximus luctus. Vivamus finibus nibh eu nunc volutpat suscipit. Nam vulputate libero quis nisi euismod rhoncus. Sed eu
																													euismod felis. Aenean ullamcorper dapibus odio ac tempor. Aliquam iaculis, quam vitae imperdiet consectetur, mi ante semper
																													metus, ac efficitur nisi justo ut eros. Maecenas suscipit turpis fermentum elementum scelerisque.
																												</p>
																												<p>
																													Sed leo elit, volutpat quis aliquet eu, elementum eget arcu. Aenean ligula tellus, malesuada eu ultrices vel, vulputate sit
																													amet metus. Donec tincidunt sapien ut enim feugiat, sed egestas dolor ornare.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/unbreakable-kimmy-schmidt/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/unbreakable-kimmy-schmidt/" data-toggle="dropdown">+ Playlist</a>
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
																												<a href="tv-show/unbreakable-kimmy-schmidt/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/40-keep-going.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/40-keep-going.jpg         970w,
																															uploads/sites/2/2019/04/40-keep-going-270x153.jpg 270w,
																															uploads/sites/2/2019/04/40-keep-going-220x125.jpg 220w,
																															uploads/sites/2/2019/04/40-keep-going-324x184.jpg 324w,
																															uploads/sites/2/2019/04/40-keep-going-272x155.jpg 272w,
																															uploads/sites/2/2019/04/40-keep-going-214x122.jpg 214w,
																															uploads/sites/2/2019/04/40-keep-going-244x138.jpg 244w,
																															uploads/sites/2/2019/04/40-keep-going-339x192.jpg 339w,
																															uploads/sites/2/2019/04/40-keep-going-327x185.jpg 327w,
																															uploads/sites/2/2019/04/40-keep-going-300x170.jpg 300w,
																															uploads/sites/2/2019/04/40-keep-going-768x435.jpg 768w,
																															uploads/sites/2/2019/04/40-keep-going-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/comedy/" rel="tag">Comedy</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																													</span>
																													<span class="tv-show__meta--release-year">2015 &#8211; 2016</span>
																												</div>
																												<a href="tv-show/unbreakable-kimmy-schmidt/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<h3 class="masvideos-loop-tv-show__title tv-show__title">
																														Unbreakable Kimmy Schmidt
																													</h3>
																												</a>
																											</div>
																										</div>
																										<div class="tv-show__hover-area--body">
																											<div class="tv-show__season-info">
																												<div class="tv-show__seasons">
																													Seasons #:
																													<a href="tv-show/unbreakable-kimmy-schmidt/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/unbreakable-kimmy-schmidt/" class="tv-show__episode--link">Season 2</a>
																												</div>
																												<div class="tv-show__episode">
																													Newest Episode:
																													<a href="episode/kimmy-gives-up/" class="tv-show__episode--link">S02E05</a>
																												</div>
																											</div>
																											<div class="tv-show__review-info">
																												<div class="tv-show__avg-rating"></div>
																												<div class="viewers-count"></div>
																											</div>
																											<div class="tv-show__actions">
																												<a href="tv-show/unbreakable-kimmy-schmidt/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/unbreakable-kimmy-schmidt/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="tv-show post-2534 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-king tv_show_tag-premieres tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/house-of-cards/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/39-journey.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/39-journey.jpg         970w,
																												uploads/sites/2/2019/04/39-journey-270x153.jpg 270w,
																												uploads/sites/2/2019/04/39-journey-220x125.jpg 220w,
																												uploads/sites/2/2019/04/39-journey-324x184.jpg 324w,
																												uploads/sites/2/2019/04/39-journey-272x155.jpg 272w,
																												uploads/sites/2/2019/04/39-journey-214x122.jpg 214w,
																												uploads/sites/2/2019/04/39-journey-244x138.jpg 244w,
																												uploads/sites/2/2019/04/39-journey-339x192.jpg 339w,
																												uploads/sites/2/2019/04/39-journey-327x185.jpg 327w,
																												uploads/sites/2/2019/04/39-journey-300x170.jpg 300w,
																												uploads/sites/2/2019/04/39-journey-768x435.jpg 768w,
																												uploads/sites/2/2019/04/39-journey-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																												</span>
																												<span class="tv-show__meta--release-year">2013 &#8211; 2015</span>
																											</div>
																											<a href="tv-show/house-of-cards/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													House of cards
																												</h3>
																											</a>
																											<div class="tv-show__episode">
																												Newest Episode:
																												<a href="episode/chapter-18/" class="tv-show__episode--link">S02E05</a>
																											</div>
																										</div>
																										<div class="tv-show__short-description">
																											<div>
																												<p>
																													A Congressman works with his equally conniving wife to exact revenge on the people who betrayed him.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/house-of-cards/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/house-of-cards/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="tv-show__review-info">
																										<a href="tv-show/house-of-cards/#reviews" class="avg-rating">
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
																												<span class="avg-rating-text">
																													<span>1</span>
																													Vote
																												</span>
																											</span>
																										</a>
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																								<div class="tv-show__hover-area">
																									<div class="tv-show__hover-area--inner">
																										<div class="tv-show__hover-area--poster">
																											<div class="tv-show__poster">
																												<a href="tv-show/house-of-cards/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/39-journey.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/39-journey.jpg         970w,
																															uploads/sites/2/2019/04/39-journey-270x153.jpg 270w,
																															uploads/sites/2/2019/04/39-journey-220x125.jpg 220w,
																															uploads/sites/2/2019/04/39-journey-324x184.jpg 324w,
																															uploads/sites/2/2019/04/39-journey-272x155.jpg 272w,
																															uploads/sites/2/2019/04/39-journey-214x122.jpg 214w,
																															uploads/sites/2/2019/04/39-journey-244x138.jpg 244w,
																															uploads/sites/2/2019/04/39-journey-339x192.jpg 339w,
																															uploads/sites/2/2019/04/39-journey-327x185.jpg 327w,
																															uploads/sites/2/2019/04/39-journey-300x170.jpg 300w,
																															uploads/sites/2/2019/04/39-journey-768x435.jpg 768w,
																															uploads/sites/2/2019/04/39-journey-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/action/" rel="tag">Action</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																													</span>
																													<span class="tv-show__meta--release-year">2013 &#8211; 2015</span>
																												</div>
																												<a href="tv-show/house-of-cards/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<h3 class="masvideos-loop-tv-show__title tv-show__title">
																														House of cards
																													</h3>
																												</a>
																											</div>
																										</div>
																										<div class="tv-show__hover-area--body">
																											<div class="tv-show__season-info">
																												<div class="tv-show__seasons">
																													Seasons #:
																													<a href="tv-show/house-of-cards/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/house-of-cards/" class="tv-show__episode--link">Season 2</a>
																												</div>
																												<div class="tv-show__episode">
																													Newest Episode:
																													<a href="episode/chapter-18/" class="tv-show__episode--link">S02E05</a>
																												</div>
																											</div>
																											<div class="tv-show__review-info">
																												<div class="tv-show__avg-rating">
																													<a href="tv-show/house-of-cards/#reviews" class="avg-rating">
																														<div class="avg-rating__inner">
																															<span class="avg-rating__number"> 8.0</span>
																															<span class="avg-rating__text">
																																<span>1</span>
																																Vote
																															</span>
																														</div>
																													</a>
																												</div>
																												<div class="viewers-count"></div>
																											</div>
																											<div class="tv-show__actions">
																												<a href="tv-show/house-of-cards/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/house-of-cards/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="tv-show post-2521 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-drama tv_show_genre-romance tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/greys-anatomy/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/38-holidays.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/38-holidays.jpg         970w,
																												uploads/sites/2/2019/04/38-holidays-270x153.jpg 270w,
																												uploads/sites/2/2019/04/38-holidays-220x125.jpg 220w,
																												uploads/sites/2/2019/04/38-holidays-324x184.jpg 324w,
																												uploads/sites/2/2019/04/38-holidays-272x155.jpg 272w,
																												uploads/sites/2/2019/04/38-holidays-214x122.jpg 214w,
																												uploads/sites/2/2019/04/38-holidays-244x138.jpg 244w,
																												uploads/sites/2/2019/04/38-holidays-339x192.jpg 339w,
																												uploads/sites/2/2019/04/38-holidays-327x185.jpg 327w,
																												uploads/sites/2/2019/04/38-holidays-300x170.jpg 300w,
																												uploads/sites/2/2019/04/38-holidays-768x435.jpg 768w,
																												uploads/sites/2/2019/04/38-holidays-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/drama/" rel="tag">Drama</a>, <a href="tv-show-genre/romance/" rel="tag">Romance</a>
																												</span>
																												<span class="tv-show__meta--release-year">2005 &#8211; 2005</span>
																											</div>
																											<a href="tv-show/greys-anatomy/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													Grey&#039;s anatomy
																												</h3>
																											</a>
																											<div class="tv-show__episode">
																												Newest Episode:
																												<a href="episode/bring-the-pain/" class="tv-show__episode--link">S02E05</a>
																											</div>
																										</div>
																										<div class="tv-show__short-description">
																											<div>
																												<p>
																													A drama centered on the personal and professional lives of five surgical interns and their supervisors.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/greys-anatomy/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/greys-anatomy/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="tv-show__review-info">
																										<a href="tv-show/greys-anatomy/#reviews" class="avg-rating">
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
																												<span class="avg-rating-text">
																													<span>1</span>
																													Vote
																												</span>
																											</span>
																										</a>
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																								<div class="tv-show__hover-area">
																									<div class="tv-show__hover-area--inner">
																										<div class="tv-show__hover-area--poster">
																											<div class="tv-show__poster">
																												<a href="tv-show/greys-anatomy/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/38-holidays.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/38-holidays.jpg         970w,
																															uploads/sites/2/2019/04/38-holidays-270x153.jpg 270w,
																															uploads/sites/2/2019/04/38-holidays-220x125.jpg 220w,
																															uploads/sites/2/2019/04/38-holidays-324x184.jpg 324w,
																															uploads/sites/2/2019/04/38-holidays-272x155.jpg 272w,
																															uploads/sites/2/2019/04/38-holidays-214x122.jpg 214w,
																															uploads/sites/2/2019/04/38-holidays-244x138.jpg 244w,
																															uploads/sites/2/2019/04/38-holidays-339x192.jpg 339w,
																															uploads/sites/2/2019/04/38-holidays-327x185.jpg 327w,
																															uploads/sites/2/2019/04/38-holidays-300x170.jpg 300w,
																															uploads/sites/2/2019/04/38-holidays-768x435.jpg 768w,
																															uploads/sites/2/2019/04/38-holidays-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/drama/" rel="tag">Drama</a>, <a href="tv-show-genre/romance/" rel="tag">Romance</a>
																													</span>
																													<span class="tv-show__meta--release-year">2005 &#8211; 2005</span>
																												</div>
																												<a href="tv-show/greys-anatomy/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<h3 class="masvideos-loop-tv-show__title tv-show__title">
																														Grey&#039;s anatomy
																													</h3>
																												</a>
																											</div>
																										</div>
																										<div class="tv-show__hover-area--body">
																											<div class="tv-show__season-info">
																												<div class="tv-show__seasons">
																													Seasons #:
																													<a href="tv-show/greys-anatomy/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/greys-anatomy/" class="tv-show__episode--link">Season 2</a>
																												</div>
																												<div class="tv-show__episode">
																													Newest Episode:
																													<a href="episode/bring-the-pain/" class="tv-show__episode--link">S02E05</a>
																												</div>
																											</div>
																											<div class="tv-show__review-info">
																												<div class="tv-show__avg-rating">
																													<a href="tv-show/greys-anatomy/#reviews" class="avg-rating">
																														<div class="avg-rating__inner">
																															<span class="avg-rating__number"> 8.0</span>
																															<span class="avg-rating__text">
																																<span>1</span>
																																Vote
																															</span>
																														</div>
																													</a>
																												</div>
																												<div class="viewers-count"></div>
																											</div>
																											<div class="tv-show__actions">
																												<a href="tv-show/greys-anatomy/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/greys-anatomy/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="tv-show post-2508 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-drama tv_show_genre-fantasy tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/dom-grozypeeny-dreadful/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/37-hater.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/37-hater.jpg         970w,
																												uploads/sites/2/2019/04/37-hater-270x153.jpg 270w,
																												uploads/sites/2/2019/04/37-hater-220x125.jpg 220w,
																												uploads/sites/2/2019/04/37-hater-324x184.jpg 324w,
																												uploads/sites/2/2019/04/37-hater-272x155.jpg 272w,
																												uploads/sites/2/2019/04/37-hater-214x122.jpg 214w,
																												uploads/sites/2/2019/04/37-hater-244x138.jpg 244w,
																												uploads/sites/2/2019/04/37-hater-339x192.jpg 339w,
																												uploads/sites/2/2019/04/37-hater-327x185.jpg 327w,
																												uploads/sites/2/2019/04/37-hater-300x170.jpg 300w,
																												uploads/sites/2/2019/04/37-hater-768x435.jpg 768w,
																												uploads/sites/2/2019/04/37-hater-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/drama/" rel="tag">Drama</a>, <a href="tv-show-genre/fantasy/" rel="tag">Fantasy</a>
																												</span>
																												<span class="tv-show__meta--release-year">2014 &#8211; 2015</span>
																											</div>
																											<a href="tv-show/dom-grozypeeny-dreadful/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													Dom grozy(Peeny Dreadful)
																												</h3>
																											</a>
																											<div class="tv-show__episode">
																												Newest Episode:
																												<a href="episode/little-scorpion/" class="tv-show__episode--link">S02E05</a>
																											</div>
																										</div>
																										<div class="tv-show__short-description">
																											<div>
																												<p>
																													Explorer Sir Malcolm Murray, American gunslinger Ethan Chandler, scientist Victor Frankenstein, and medium Vanessa Ives
																													unite to combat supernatural threats in Victorian London.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/dom-grozypeeny-dreadful/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/dom-grozypeeny-dreadful/" data-toggle="dropdown">+ Playlist</a>
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
																												<a href="tv-show/dom-grozypeeny-dreadful/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/37-hater.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/37-hater.jpg         970w,
																															uploads/sites/2/2019/04/37-hater-270x153.jpg 270w,
																															uploads/sites/2/2019/04/37-hater-220x125.jpg 220w,
																															uploads/sites/2/2019/04/37-hater-324x184.jpg 324w,
																															uploads/sites/2/2019/04/37-hater-272x155.jpg 272w,
																															uploads/sites/2/2019/04/37-hater-214x122.jpg 214w,
																															uploads/sites/2/2019/04/37-hater-244x138.jpg 244w,
																															uploads/sites/2/2019/04/37-hater-339x192.jpg 339w,
																															uploads/sites/2/2019/04/37-hater-327x185.jpg 327w,
																															uploads/sites/2/2019/04/37-hater-300x170.jpg 300w,
																															uploads/sites/2/2019/04/37-hater-768x435.jpg 768w,
																															uploads/sites/2/2019/04/37-hater-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/drama/" rel="tag">Drama</a>, <a href="tv-show-genre/fantasy/" rel="tag">Fantasy</a>
																													</span>
																													<span class="tv-show__meta--release-year">2014 &#8211; 2015</span>
																												</div>
																												<a href="tv-show/dom-grozypeeny-dreadful/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<h3 class="masvideos-loop-tv-show__title tv-show__title">
																														Dom grozy(Peeny Dreadful)
																													</h3>
																												</a>
																											</div>
																										</div>
																										<div class="tv-show__hover-area--body">
																											<div class="tv-show__season-info">
																												<div class="tv-show__seasons">
																													Seasons #:
																													<a href="tv-show/dom-grozypeeny-dreadful/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/dom-grozypeeny-dreadful/" class="tv-show__episode--link">season 2</a>
																												</div>
																												<div class="tv-show__episode">
																													Newest Episode:
																													<a href="episode/little-scorpion/" class="tv-show__episode--link">S02E05</a>
																												</div>
																											</div>
																											<div class="tv-show__review-info">
																												<div class="tv-show__avg-rating"></div>
																												<div class="viewers-count"></div>
																											</div>
																											<div class="tv-show__actions">
																												<a href="tv-show/dom-grozypeeny-dreadful/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/dom-grozypeeny-dreadful/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="tv-show post-2495 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-crime tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/cardinal/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/36-garden.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/36-garden.jpg         970w,
																												uploads/sites/2/2019/04/36-garden-270x153.jpg 270w,
																												uploads/sites/2/2019/04/36-garden-220x125.jpg 220w,
																												uploads/sites/2/2019/04/36-garden-324x184.jpg 324w,
																												uploads/sites/2/2019/04/36-garden-272x155.jpg 272w,
																												uploads/sites/2/2019/04/36-garden-214x122.jpg 214w,
																												uploads/sites/2/2019/04/36-garden-244x138.jpg 244w,
																												uploads/sites/2/2019/04/36-garden-339x192.jpg 339w,
																												uploads/sites/2/2019/04/36-garden-327x185.jpg 327w,
																												uploads/sites/2/2019/04/36-garden-300x170.jpg 300w,
																												uploads/sites/2/2019/04/36-garden-768x435.jpg 768w,
																												uploads/sites/2/2019/04/36-garden-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/crime/" rel="tag">Crime</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																												</span>
																												<span class="tv-show__meta--release-year">2017 &#8211; 2018</span>
																											</div>
																											<a href="tv-show/cardinal/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													Cardinal
																												</h3>
																											</a>
																											<div class="tv-show__episode">
																												Newest Episode:
																												<a href="episode/northwind/" class="tv-show__episode--link">S02E05</a>
																											</div>
																										</div>
																										<div class="tv-show__short-description">
																											<div>
																												<p>
																													Cardinal struggles to right past wrongs that could derail his investigation and end his career, as the case grows more
																													violent and twisted, and the clock ticks down on the killer&#8217;s next victim.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/cardinal/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/cardinal/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="tv-show__review-info">
																										<a href="tv-show/cardinal/#reviews" class="avg-rating">
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
																												<span class="avg-rating-text">
																													<span>1</span>
																													Vote
																												</span>
																											</span>
																										</a>
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																								<div class="tv-show__hover-area">
																									<div class="tv-show__hover-area--inner">
																										<div class="tv-show__hover-area--poster">
																											<div class="tv-show__poster">
																												<a href="tv-show/cardinal/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/36-garden.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/36-garden.jpg         970w,
																															uploads/sites/2/2019/04/36-garden-270x153.jpg 270w,
																															uploads/sites/2/2019/04/36-garden-220x125.jpg 220w,
																															uploads/sites/2/2019/04/36-garden-324x184.jpg 324w,
																															uploads/sites/2/2019/04/36-garden-272x155.jpg 272w,
																															uploads/sites/2/2019/04/36-garden-214x122.jpg 214w,
																															uploads/sites/2/2019/04/36-garden-244x138.jpg 244w,
																															uploads/sites/2/2019/04/36-garden-339x192.jpg 339w,
																															uploads/sites/2/2019/04/36-garden-327x185.jpg 327w,
																															uploads/sites/2/2019/04/36-garden-300x170.jpg 300w,
																															uploads/sites/2/2019/04/36-garden-768x435.jpg 768w,
																															uploads/sites/2/2019/04/36-garden-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/crime/" rel="tag">Crime</a>, <a href="tv-show-genre/drama/" rel="tag">Drama</a>
																													</span>
																													<span class="tv-show__meta--release-year">2017 &#8211; 2018</span>
																												</div>
																												<a href="tv-show/cardinal/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<h3 class="masvideos-loop-tv-show__title tv-show__title">
																														Cardinal
																													</h3>
																												</a>
																											</div>
																										</div>
																										<div class="tv-show__hover-area--body">
																											<div class="tv-show__season-info">
																												<div class="tv-show__seasons">
																													Seasons #:
																													<a href="tv-show/cardinal/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/cardinal/" class="tv-show__episode--link">Season 2</a>
																												</div>
																												<div class="tv-show__episode">
																													Newest Episode:
																													<a href="episode/northwind/" class="tv-show__episode--link">S02E05</a>
																												</div>
																											</div>
																											<div class="tv-show__review-info">
																												<div class="tv-show__avg-rating">
																													<a href="tv-show/cardinal/#reviews" class="avg-rating">
																														<div class="avg-rating__inner">
																															<span class="avg-rating__number"> 8.0</span>
																															<span class="avg-rating__text">
																																<span>1</span>
																																Vote
																															</span>
																														</div>
																													</a>
																												</div>
																												<div class="viewers-count"></div>
																											</div>
																											<div class="tv-show__actions">
																												<a href="tv-show/cardinal/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/cardinal/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div
																								class="tv-show post-2469 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-biography tv_show_genre-crime tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings"
																							>
																								<div class="tv-show__poster">
																									<a href="tv-show/narcos/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																										<img
																											width="970"
																											height="550"
																											src="uploads/sites/2/2019/04/34-fighter.jpg"
																											class="tv-show__poster--image tv_show__poster--image"
																											alt=""
																											srcset="
																												uploads/sites/2/2019/04/34-fighter.jpg         970w,
																												uploads/sites/2/2019/04/34-fighter-270x153.jpg 270w,
																												uploads/sites/2/2019/04/34-fighter-220x125.jpg 220w,
																												uploads/sites/2/2019/04/34-fighter-324x184.jpg 324w,
																												uploads/sites/2/2019/04/34-fighter-272x155.jpg 272w,
																												uploads/sites/2/2019/04/34-fighter-214x122.jpg 214w,
																												uploads/sites/2/2019/04/34-fighter-244x138.jpg 244w,
																												uploads/sites/2/2019/04/34-fighter-339x192.jpg 339w,
																												uploads/sites/2/2019/04/34-fighter-327x185.jpg 327w,
																												uploads/sites/2/2019/04/34-fighter-300x170.jpg 300w,
																												uploads/sites/2/2019/04/34-fighter-768x435.jpg 768w,
																												uploads/sites/2/2019/04/34-fighter-120x67.jpg  120w
																											"
																											sizes="(max-width: 970px) 100vw, 970px"
																										/>
																									</a>
																								</div>
																								<div class="tv-show__body">
																									<div class="tv-show__info">
																										<div class="tv-show__info--head">
																											<div class="tv-show__meta">
																												<span class="tv-show__meta--genre">
																													<a href="tv-show-genre/biography/" rel="tag">Biography</a>, <a href="tv-show-genre/crime/" rel="tag">Crime</a>,
																													<a href="tv-show-genre/drama/" rel="tag">Drama</a>
																												</span>
																												<span class="tv-show__meta--release-year">2015 &#8211; 2016</span>
																											</div>
																											<a href="tv-show/narcos/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																												<h3 class="masvideos-loop-tv-show__title tv-show__title">
																													Narcos
																												</h3>
																											</a>
																											<div class="tv-show__episode">
																												Newest Episode:
																												<a href="episode/the-enemy-of-my-enemy-is-my-friend/" class="tv-show__episode--link">S01E05</a>
																											</div>
																										</div>
																										<div class="tv-show__short-description">
																											<div>
																												<p>
																													A chronicled look at the criminal exploits of Colombian drug lord Pablo Escobar, as well as the many other drug kingpins who
																													plagued the country through the years.
																												</p>
																											</div>
																										</div>
																										<div class="tv-show__actions">
																											<a href="tv-show/narcos/" class="tv-show-actions--link_watch">Watch Now</a>
																											<div class="tv-show-actions--link_add-to-playlist dropdown">
																												<a class="dropdown-toggle" href="tv-show/narcos/" data-toggle="dropdown">+ Playlist</a>
																												<div class="dropdown-menu">
																													<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																												</div>
																											</div>
																										</div>
																									</div>
																									<div class="tv-show__review-info">
																										<a href="tv-show/narcos/#reviews" class="avg-rating">
																											<span class="rating-with-count">
																												<svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
																													<title>play</title>
																													<path
																														fill-rule="evenodd"
																														d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
																													/>
																												</svg>
																												<span class="avg-rating-number"> 7.0</span>
																											</span>
																											<span class="rating-number-with-text">
																												<span class="avg-rating-number"> 7.0</span>
																												<span class="avg-rating-text">
																													<span>1</span>
																													Vote
																												</span>
																											</span>
																										</a>
																										<div class="viewers-count"></div>
																									</div>
																								</div>
																								<div class="tv-show__hover-area">
																									<div class="tv-show__hover-area--inner">
																										<div class="tv-show__hover-area--poster">
																											<div class="tv-show__poster">
																												<a href="tv-show/narcos/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<img
																														width="970"
																														height="550"
																														src="uploads/sites/2/2019/04/34-fighter.jpg"
																														class="tv-show__poster--image tv_show__poster--image"
																														alt=""
																														srcset="
																															uploads/sites/2/2019/04/34-fighter.jpg         970w,
																															uploads/sites/2/2019/04/34-fighter-270x153.jpg 270w,
																															uploads/sites/2/2019/04/34-fighter-220x125.jpg 220w,
																															uploads/sites/2/2019/04/34-fighter-324x184.jpg 324w,
																															uploads/sites/2/2019/04/34-fighter-272x155.jpg 272w,
																															uploads/sites/2/2019/04/34-fighter-214x122.jpg 214w,
																															uploads/sites/2/2019/04/34-fighter-244x138.jpg 244w,
																															uploads/sites/2/2019/04/34-fighter-339x192.jpg 339w,
																															uploads/sites/2/2019/04/34-fighter-327x185.jpg 327w,
																															uploads/sites/2/2019/04/34-fighter-300x170.jpg 300w,
																															uploads/sites/2/2019/04/34-fighter-768x435.jpg 768w,
																															uploads/sites/2/2019/04/34-fighter-120x67.jpg  120w
																														"
																														sizes="(max-width: 970px) 100vw, 970px"
																													/>
																												</a>
																											</div>
																											<div class="tv-show__info--head">
																												<div class="tv-show__meta">
																													<span class="tv-show__meta--genre">
																														<a href="tv-show-genre/biography/" rel="tag">Biography</a>, <a href="tv-show-genre/crime/" rel="tag">Crime</a>,
																														<a href="tv-show-genre/drama/" rel="tag">Drama</a>
																													</span>
																													<span class="tv-show__meta--release-year">2015 &#8211; 2016</span>
																												</div>
																												<a href="tv-show/narcos/" class="masvideos-LoopTvShow-link masvideos-loop-tv-show__link tv-show__link">
																													<h3 class="masvideos-loop-tv-show__title tv-show__title">
																														Narcos
																													</h3>
																												</a>
																											</div>
																										</div>
																										<div class="tv-show__hover-area--body">
																											<div class="tv-show__season-info">
																												<div class="tv-show__seasons">
																													Seasons #:
																													<a href="tv-show/narcos/" class="tv-show__episode--link">Season 1</a>
																													<a href="tv-show/narcos/" class="tv-show__episode--link">Season 2</a>
																												</div>
																												<div class="tv-show__episode">
																													Newest Episode:
																													<a href="episode/the-enemy-of-my-enemy-is-my-friend/" class="tv-show__episode--link">S01E05</a>
																												</div>
																											</div>
																											<div class="tv-show__review-info">
																												<div class="tv-show__avg-rating">
																													<a href="tv-show/narcos/#reviews" class="avg-rating">
																														<div class="avg-rating__inner">
																															<span class="avg-rating__number"> 7.0</span>
																															<span class="avg-rating__text">
																																<span>1</span>
																																Vote
																															</span>
																														</div>
																													</a>
																												</div>
																												<div class="viewers-count"></div>
																											</div>
																											<div class="tv-show__actions">
																												<a href="tv-show/narcos/" class="tv-show-actions--link_watch">Watch Now</a>
																												<div class="tv-show-actions--link_add-to-playlist dropdown">
																													<a class="dropdown-toggle" href="tv-show/narcos/" data-toggle="dropdown">+ Playlist</a>
																													<div class="dropdown-menu">
																														<a class="login-link" href="my-account/tv-show-playlists/">Sign in to add this tv show to a playlist.</a>
																													</div>
																												</div>
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</section>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</li>
									<li id="menu-item-5555" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5555">
										<a href="blog/">Blog</a>
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
										<a href="my-account/" data-toggle="modal" data-target="#modal-register-login">Sign in</a>
									</li>
									<li>
										<a href="my-account/" data-toggle="modal" data-target="#modal-register-login">Register</a>
									</li>
								</ul>
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
                            <div id="movie-268" class="post-268 movie type-movie status-publish has-post-thumbnail hentry movie_genre-comedy movie_tag-4k-ultra movie_tag-king movie_tag-premieres movie_tag-viking">
                                <div class="single-movie__player-container stretch-full-width">
                                    <div class="single-movie__player-container--inner container">
									<?php
										include '../php/db.php';
										$query = "SELECT * FROM movie WHERE id='$id'";
										$result = mysqli_query($connect, $query);
										while($row = mysqli_fetch_array($result)){
											echo '<nav class="masvideos-breadcrumb">
													<a href="../index.php">Home</a>
													<span class="delimiter">
														<svg width="4px" height="7px">
															<path
																fill-rule="evenodd"
																d="M3.978,3.702 C3.986,3.785 3.966,3.868 3.903,3.934 L1.038,6.901 C0.920,7.022 0.724,7.029 0.598,6.916 L0.143,6.506 C0.017,6.393 0.010,6.203 0.127,6.082 L2.190,3.945 C2.276,3.829 2.355,3.690 2.355,3.548 C2.355,3.214 1.947,2.884 1.947,2.884 L1.963,2.877 L0.080,0.905 C-0.037,0.783 -0.029,0.593 0.095,0.479 L0.547,0.068 C0.671,-0.045 0.866,-0.039 0.983,0.083 L3.823,3.056 C3.866,3.102 3.875,3.161 3.885,3.218 C3.945,3.267 3.988,3.333 3.988,3.415 L3.988,3.681 C3.988,3.689 3.979,3.694 3.978,3.702 Z"
															/>
														</svg>
													</span>
													<a href="">'.$row["category"].'</a>
													<span class="delimiter">
														<svg width="4px" height="7px">
															<path
																fill-rule="evenodd"
																d="M3.978,3.702 C3.986,3.785 3.966,3.868 3.903,3.934 L1.038,6.901 C0.920,7.022 0.724,7.029 0.598,6.916 L0.143,6.506 C0.017,6.393 0.010,6.203 0.127,6.082 L2.190,3.945 C2.276,3.829 2.355,3.690 2.355,3.548 C2.355,3.214 1.947,2.884 1.947,2.884 L1.963,2.877 L0.080,0.905 C-0.037,0.783 -0.029,0.593 0.095,0.479 L0.547,0.068 C0.671,-0.045 0.866,-0.039 0.983,0.083 L3.823,3.056 C3.866,3.102 3.875,3.161 3.885,3.218 C3.945,3.267 3.988,3.333 3.988,3.415 L3.988,3.681 C3.988,3.689 3.979,3.694 3.978,3.702 Z"
															/>
														</svg>
													</span>
													'.$row["name"].'
												</nav>';
										}
									?>

										<!-- body -->
										<?php
										include '../php/db.php';
										$query = "SELECT * FROM movie WHERE id='$id'";
										$result = mysqli_query($connect, $query);
										while($row = mysqli_fetch_array($result)){
                                        echo '<div class="movie__head">
                                            <div class="movie__player">
                                                <iframe width="1024" height="574" src="'.$row["link"].'" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="summary entry-summary">
                                            <h1 class="movie_title entry-title">'.$row["name"].'</h1>
                                            <div class="movie__info--head">
                                                <div class="movie__meta">
                                                    <span class="movie__meta--release-year">2017</span><span class="movie__meta--movie-run-time">'.$row["duration"].'</span><span class="movie__meta--censor-rating">R</span>
                                                    <span class="movie__meta--genre"><a href="movie-genre/comedy/" rel="tag">'.$row["category"].'</a></span>
                                                </div>
                                                <div class="movie__rating-with-playlist">
                                                    <a href="movie/american-made/#reviews" class="avg-rating">
                                                        <span class="rating-with-count">
                                                            <svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
                                                                <title>play</title>
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
                                                                />
                                                            </svg>
                                                            <span class="avg-rating-number"> 7.0</span>
                                                        </span>
                                                        <span class="rating-number-with-text">
                                                            <span class="avg-rating-number"> 7.0</span>
                                                            <span class="avg-rating-text"> <span>1</span> Vote </span>
                                                        </span>
                                                    </a>
                                                    <div class="movie-actions--link_add-to-playlist dropdown">
                                                        <a class="dropdown-toggle" href="movie/american-made/" data-toggle="dropdown">+ Playlist</a>
                                                        <div class="dropdown-menu">
                                                            <a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
										}
										?>
										<!-- body end -->
										
                                    </div>
                                </div>
                                <section class="movie__related">
                                    <div class="movie__related--inner">
                                        <h2 class="movie__related--title">You Also May Like</h2>
                                        <div class="masvideos masvideos-movies">
                                            <div class="movies columns-8">
                                                <div class="movies__inner">

												<?php
													include '../php/db.php';
													$query = "SELECT * FROM movie WHERE category != 'recomended'";
													$result = mysqli_query($connect, $query);
													while($row = mysqli_fetch_array($result)){
														echo '<div class="post-286 movie type-movie status-publish has-post-thumbnail hentry movie_genre-action movie_genre-sci-fi movie_tag-4k-ultra movie_tag-brother movie_tag-king movie_tag-viking">
																<div class="movie__poster">
																	<a href="movie/downsizing/" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
																		<img
																			width="300"
																			height="450"
																			src="../uploads/'.$row["image"].'"
																			class="movie__poster--image"
																			alt=""
																			sizes="(max-width: 300px) 100vw, 300px"
																		/>
																	</a>
																</div>
																<div class="movie__body">
																	<div class="movie__info">
																		<div class="movie__info--head">
																			<div class="movie__meta">
																				<span class="movie__meta--release-year">'.$row["year"].'</span><span class="movie__meta--movie-run-time">2hr 15 mins</span><span class="movie__meta--censor-rating">R</span>
																				<span class="movie__meta--genre"><a href="movie-genre/action/" rel="tag">Action</a>, <a href="movie-genre/sci-fi/" rel="tag">Sci-Fi</a></span>
																			</div>
																			<a href="movie/downsizing/" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link"><h3 class="masvideos-loop-movie__title movie__title">'.$row["name"].'</h3></a>
																		</div>
																		<div class="movie__short-description">
																			<div>
																				<p>
																					A social satire in which a man realizes he would have a better life if he were to shrink himself to five inches tall, allowing him to live in wealth and splendor.
																				</p>
																			</div>
																		</div>
																		<div class="movie__actions">
																			<a href="movie/downsizing/" class="movie-actions--link_watch">Watch Now</a>
																			<div class="movie-actions--link_add-to-playlist dropdown">
																				<a class="dropdown-toggle" href="movie/downsizing/" data-toggle="dropdown">+ Playlist</a>
																				<div class="dropdown-menu">
																					<a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="movie__review-info">
																		<a href="movie/downsizing/#reviews" class="avg-rating">
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

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <div class="masvideos-tabs movie-tabs">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="#tab-614485e8ef5c2description" data-toggle="tab" class="nav-link active show"> Description </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#tab-614485e8ef5c2reviews" data-toggle="tab" class="nav-link"> Review </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="tab-614485e8ef5c2description" class="tab-pane active show">
                                            <div id="movie__description-tab" class="movie__description-tab">
											<?php
												include '../php/db.php';
												$query = "SELECT * FROM movie WHERE id='$id'";
												$result = mysqli_query($connect, $query);
												while($row = mysqli_fetch_array($result)){
													echo '<div class="movie__info--left">
															<div class="movie__poster">
																<a href="movie/american-made/" class="masvideos-LoopMovie-link masvideos-loop-movie__link movie__link">
																	<img
																		width="300"
																		height="450"
																		src="../uploads/'.$row["image"].'"
																		class="movie__poster--image"
																		alt=""
																	/>
																</a>
															</div>
															<div class="movie__body">
																<h1 class="movie_title entry-title">'.$row["name"].'</h1>
																<div class="movie__rating-with-playlist">
																	<a href="movie/american-made/#reviews" class="avg-rating">
																		<span class="rating-with-count">
																			<svg class="vodi-svg" width="40px" height="39px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 39">
																				<title>play</title>
																				<path
																					fill-rule="evenodd"
																					d="M19.633,-0.000 C21.509,0.035 21.530,1.174 22.167,2.414 C23.329,4.679 24.406,7.067 25.572,9.338 C25.853,9.886 26.431,11.640 26.918,11.834 C27.486,12.203 29.345,12.109 30.165,12.316 C32.170,12.825 34.489,12.860 36.500,13.364 C37.516,13.618 38.689,13.413 39.430,13.927 C39.689,14.107 39.770,14.504 39.984,14.732 C40.047,16.499 39.096,16.843 38.163,17.792 C36.473,19.509 34.784,21.227 33.095,22.944 C32.585,23.462 31.092,24.543 31.036,25.359 C31.423,25.951 31.307,27.455 31.511,28.258 C32.138,30.727 32.213,33.522 32.857,35.987 C33.142,37.078 33.016,38.241 32.303,38.724 C31.108,39.533 29.632,38.193 28.819,37.758 C26.695,36.623 24.601,35.624 22.483,34.457 C21.979,34.179 20.607,33.178 20.108,33.088 C19.748,33.023 18.163,34.107 17.812,34.296 C15.557,35.505 13.340,36.640 11.080,37.839 C10.548,38.120 9.180,39.226 8.309,38.966 C6.955,38.558 6.874,36.993 7.280,35.423 C7.716,33.733 7.697,31.880 8.151,30.109 C8.527,28.642 8.907,26.529 9.022,24.957 C8.092,24.344 7.202,23.107 6.408,22.300 C4.760,20.625 3.059,18.990 1.340,17.389 C0.646,16.742 -0.578,15.515 0.311,14.249 C0.915,13.388 2.364,13.656 3.557,13.364 C6.678,12.599 10.114,12.468 13.298,11.834 C14.186,9.747 15.306,7.711 16.307,5.716 C16.954,4.426 17.496,3.163 18.128,1.931 C18.334,1.531 18.358,1.093 18.603,0.724 C18.845,0.362 19.299,0.273 19.633,-0.000 Z"
																				/>
																			</svg>
																			<span class="avg-rating-number"> 7.0</span>
																		</span>
																		<span class="rating-number-with-text">
																			<span class="avg-rating-number"> 7.0</span>
																			<span class="avg-rating-text"> <span>1</span> Vote </span>
																		</span>
																	</a>
																	<div class="movie-actions--link_add-to-playlist dropdown">
																		<a class="dropdown-toggle" href="movie/american-made/" data-toggle="dropdown">+ Playlist</a>
																		<div class="dropdown-menu">
																			<a class="login-link" href="my-account/movie-playlists/">Sign in to add this movie to a playlist.</a>
																		</div>
																	</div>
																</div>
																<div class="movie__meta">
																	<span class="movie__meta--release-year">2017</span><span class="movie__meta--movie-run-time">1hr 55 mins</span><span class="movie__meta--censor-rating">R</span>
																	<span class="movie__meta--genre"><a href="movie-genre/comedy/" rel="tag">Comedy</a></span>
																</div>
																<div class="vodi-views-likes">
																	<div class="vodi-jetpack-views"><span>18.9K views</span></div>
																	<div class="wpulike wpulike-default">
																		<div class="wp_ulike_general_class wp_ulike_is_not_liked">
																			<button
																				type="button"
																				aria-label="Like Button"
																				data-ulike-id="268"
																				data-ulike-nonce="7b70cc6dbb"
																				data-ulike-type="likeThis"
																				data-ulike-template="wpulike-default"
																				data-ulike-display-likers="0"
																				data-ulike-disable-pophover="0"
																				class="wp_ulike_btn wp_ulike_put_image wp_likethis_268"
																			></button>
																			<span class="count-box">41+</span>
																		</div>
																	</div>
																</div>
																<div class="movie__description">
																	<div></div>
																</div>
															</div>
														</div>
														<div class="movie__info--right">
															<div class="movie__sharing vodi-sharing"></div>
															<span class="movie__tags">
																Tags: <a href="movie-tag/4k-ultra/" rel="tag">4K Ultra</a>, <a href="movie-tag/king/" rel="tag">King</a>, <a href="movie-tag/premieres/" rel="tag">Premieres</a>,
																<a href="movie-tag/viking/" rel="tag">viking</a>
															</span>
														</div>';
												}
											?>
                                            </div>
                                        </div>
                                        <div id="tab-614485e8ef5c2reviews" class="tab-pane">
                                            <div id="reviews" class="masvideos-Reviews">
                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div id="respond" class="comment-respond">
                                                            <span id="reply-title" class="comment-reply-title">
                                                                Add a review <small><a rel="nofollow" id="cancel-comment-reply-link" href="/vodi-demos/main/movie/american-made/#respond" style="display: none;">Cancel reply</a></small>
                                                            </span>
                                                            <p class="must-log-in">You must be <a href="wp-login.php">logged in</a> to post a review.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="comments">
                                                    <h2 class="masvideos-reviews__title">Users Reviews</h2>
                                                    <ol class="commentlist">
                                                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-9">
                                                            <div id="comment-9" class="comment_container">
                                                                <div class="comment_container--inner">
                                                                    <img
                                                                        alt=""
                                                                        src="https://secure.gravatar.com/avatar/8ef62a38ce69806ea7691f0724a7e968?s=60&#038;d=mm&#038;r=g"
                                                                        srcset="https://secure.gravatar.com/avatar/8ef62a38ce69806ea7691f0724a7e968?s=120&#038;d=mm&#038;r=g 2x"
                                                                        class="avatar avatar-60 photo"
                                                                        height="60"
                                                                        width="60"
                                                                    />
                                                                    <div class="comment-text">
                                                                        <p class="meta">
                                                                            <strong class="masvideos-review__author">nilofer </strong>
                                                                            <time class="masvideos-review__published-date" datetime="2019-03-21T12:17:41+05:30">March 21, 2019</time>
                                                                        </p>
                                                                        <div class="description">
                                                                            <p>Good</p>
                                                                            <div class="wpulike wpulike-default">
                                                                                <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                                    <button
                                                                                        type="button"
                                                                                        aria-label="Like Button"
                                                                                        data-ulike-id="9"
                                                                                        data-ulike-nonce="9e347d349b"
                                                                                        data-ulike-type="likeThisComment"
                                                                                        data-ulike-template="wpulike-default"
                                                                                        data-ulike-display-likers="0"
                                                                                        data-ulike-disable-pophover="0"
                                                                                        class="wp_ulike_btn wp_ulike_put_image wp_likethiscomment_9"
                                                                                    ></button>
                                                                                    <span class="count-box">7+</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="star-rating">
                                                                            <span class="screen-reader-text">7.0 rating</span>
                                                                            <div class="star star-full" aria-hidden="true"></div>
                                                                            <div class="star star-full" aria-hidden="true"></div>
                                                                            <div class="star star-full" aria-hidden="true"></div>
                                                                            <div class="star star-full" aria-hidden="true"></div>
                                                                            <div class="star star-full" aria-hidden="true"></div>
                                                                            <div class="star star-full" aria-hidden="true"></div>
                                                                            <div class="star star-full" aria-hidden="true"></div>
                                                                            <div class="star star-empty" aria-hidden="true"></div>
                                                                            <div class="star star-empty" aria-hidden="true"></div>
                                                                            <div class="star star-empty" aria-hidden="true"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="description">
                                                                    <p>Good</p>
                                                                    <div class="wpulike wpulike-default">
                                                                        <div class="wp_ulike_general_class wp_ulike_is_not_liked">
                                                                            <button
                                                                                type="button"
                                                                                aria-label="Like Button"
                                                                                data-ulike-id="9"
                                                                                data-ulike-nonce="9e347d349b"
                                                                                data-ulike-type="likeThisComment"
                                                                                data-ulike-template="wpulike-default"
                                                                                data-ulike-display-likers="0"
                                                                                data-ulike-disable-pophover="0"
                                                                                class="wp_ulike_btn wp_ulike_put_image wp_likethiscomment_9"
                                                                            ></button>
                                                                            <span class="count-box">7+</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
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
                                            <form method="post" class="masvideos-form masvideos-form-register register">
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="reg_email">Email address&nbsp;<span class="required">*</span></label>
                                                    <input type="email" class="masvideos-Input masvideos-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="" />
                                                </p>
                                                <p class="masvideos-FormRow form-row">
                                                    <input type="hidden" id="masvideos-register-nonce" name="masvideos-register-nonce" value="6fc1f0adb1" />
                                                    <input type="hidden" name="_wp_http_referer" value="/vodi-demos/main/movie/american-made/" />
                                                    <button type="submit" class="masvideos-Button button" name="register" value="Register">Register</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="masvideos-login">
                                        <div class="masvideos-login__inner">
                                            <h2>Login</h2>
                                            <form class="masvideos-form masvideos-form-login login" method="post">
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="username">Username or email address&nbsp;<span class="required">*</span></label>
                                                    <input type="text" class="masvideos-Input masvideos-Input--text input-text" name="username" id="username" autocomplete="username" value="" />
                                                </p>
                                                <p class="masvideos-form-row masvideos-form-row--wide form-row form-row-wide">
                                                    <label for="password">Password&nbsp;<span class="required">*</span></label>
                                                    <input class="masvideos-Input masvideos-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                                                </p>
                                                <p class="form-row">
                                                    <input type="hidden" id="masvideos-login-nonce" name="masvideos-login-nonce" value="5dedfce4cf" />
                                                    <input type="hidden" name="_wp_http_referer" value="/vodi-demos/main/movie/american-made/" />
                                                    <button type="submit" class="masvideos-Button button" name="login" value="Log in">Log in</button>
                                                    <label class="masvideos-form__label masvideos-form__label-for-checkbox inline">
                                                        <input class="masvideos-form__input masvideos-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
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
        <script type="text/javascript" src="../plugins/"></script>
        <script type="text/javascript" src="../plugins/masvideos/assets/js/frontend/playlist-tv-show.min.js"></script>
        <script type="text/javascript" src="../plugins/masvideos/assets/js/frontend/playlist-video.min.js"></script>
        <script type="text/javascript" src="../plugins/masvideos/assets/js/frontend/playlist-movie.min.js"></script>
        <script type="text/javascript" src="../plugins/masvideos/assets/js/frontend/gallery-flip.min.js"></script>
        <script type="text/javascript" src="../plugins/masvideos/assets/js/photoswipe/photoswipe.min.js"></script>
        <script type="text/javascript" src="../plugins/masvideos/assets/js/photoswipe/photoswipe-ui-default.min.js"></script>
        <script type="text/javascript" src="../plugins/wp-ulike/assets/js/wp-ulike.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/scrollup.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/readmore.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/simplebar.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/slick.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/vodi-slick.min.js"></script>
        <script type="text/javascript" src="../themes/assets/js/vodi.min.js"></script>
        <script type="text/javascript" src="wp-includes/js/comment-reply.min.js"></script>
        <script type="text/javascript" src="wp-includes/js/wp-embed.min.js"></script>
        <script type="text/javascript" src="https://stats.wp.com/e-202137.js" async="async" defer="defer"></script>
    </body>
</html>
