<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Interior-Design-Responsive-Website-Templates-Edge">
	<meta name="author" content="webThemez.com">
	<title>Агентство недвижимости</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div id="header-top">       
		<!--  HEADER TOP -->
        <div class="container">
        	<div class="row">
				<div class="col-md-6"> 
                    
                        <div class="text">
                            
							<p>Toll Free : (002) 124 2548</p>
                            
                        </div>      
                </div><!-- end -->
            	<div class="col-md-6">              	
                   <div class="social text-center pull-right">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>
                    
                </div><!-- end -->
            </div><!-- end .row -->
           </div> 
		</div>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="active"><a href="index.html">Главная</a></li>
					<li><a href="about.html">О нас</a></li>
					<li><a href="services.html">Услуги</a></li>
					
					<li><a href="projects.html">Проекты</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Страницы<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Контакты</a></li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
					<div class="fluid_container">
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        @foreach($slider as $sliders)
                        <div data-thumb="{{$sliders->image}}" data-src="{{$sliders->image}}" alt="{{$sliders->slider_title}}">
                        </div> 
                        @endforeach
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->

  <div class="head-box" style="margin-top:-20px;">
            	<div class="container">
				<div class="row">
                	<div class="col-sm-12">
                    	
                        <h2 class="text-center text-uppercase last">Lorem ipsum dolor sit amet consectetur </h2>
                        
                        <p class="text-center last">Lorem ipsum dolor sit amet in reprehenderit in voluptate velit esse cillum 
                        dolore eu fugiat nulla pariatur.</p>
          
<div class="search-panel">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <input type="text" class="form-control" id="city" placeholder="City" autocomplete="off">
                    </div> 
                    <div class="form-group hidden-xs adv">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input class="form-control price" type="text" placeholder="From">
                        </div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input class="form-control price" type="text" placeholder="To">
                        </div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Аренда</label></div>
                    </div>
                    <div class="form-group hidden-xs adv">
                        <div class="checkbox custom-checkbox"><label><input type="checkbox"><span class="fa fa-check"></span> Продажа</label></div>
                    </div>
                    <div class="form-group">
                        <a href="" class="btn btnsearch">Поиск</a> 
                    </div>
                </form>
            </div>
                    </div><!-- end .col-sm-12 -->
                </div><!-- ene .row -->
				</div>
            </div>
   

	
	<section class="container">
			
			<div class="row">
			<div class="section-heading">
							<h2>Наши услуги</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
				 
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-eye fa-2x"></i>
						<div class="text">
							<h3>Аренда</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-quote-right fa-2x"></i>
						<div class="text">
							<h3>Продажа</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
						<i class="fa fa-arrows fa-2x"></i>
						<div class="text">
							<h3>Покупка</h3>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</div>
					</div>
				</div>
			</div>

		</section>
			<section>
	<div class="box-2">
	<div class="container">
            	<div class="row">
                	<div class="col-md-12">
                    	<div class="section-heading">
							<h2>Мы поможем Вам купить, продать или арендовать недвижимость</h2> 
							  <p>
                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore <br class="hidden-tablet hidden-phone">
							et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
                      
						
                        <img src="assets/images/940x250.png" alt="">
                        
                    </div><!-- end .span12 -->
                </div><!-- end .row -->
</div>           
		   </div>
	</section>
         <section class="news-box top-margin">
        <div class="container"> 
            <div class="row">
       <div class="section-heading">
							<h2>Current Projects</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news2.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>CONCEPT</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news3.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>DESIGN</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news4.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>INSTALLATION</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
      <section class="news-box top-margin">
        <div class="container"> 
            <div class="row">
       <div class="section-heading">
							<h2>Upcoming Projects</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
						</div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news6.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>CONCEPT</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news7.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>DESIGN</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="assets/images/news8.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>INSTALLATION</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. Praesent ves tibuum molestie lacuiirhs. Aenean.</p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
		<div class="container">
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="index.html">Главная</a> | 
								<a href="about.html">О нас</a> |
								<a href="services.html">Услуги</a> |
								
								<a href="projects.html">Проекты</a> |
								<a href="contact.html">Контакты</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2019.  <a href="#" target="_blank">Сайт создан </a> by Max
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: '600',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
	</script>
    
</body>
</html>

