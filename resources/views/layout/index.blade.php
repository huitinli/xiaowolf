<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<!--css-->
<link href="html/css/bootstrap.css" rel="stylesheet">
<link href="html/css/style.css" rel="stylesheet" type="text/css" media="all" />
<style>@import url("http://www.w3cplus.com/demo/css3/base.css"); /*任务一：引入本地字体文件*/ @font-face { font-family: 'sansationregular'; src: url('http://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.eot'); src: url('http://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.eot?#iefix') format('http://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/embedded-opentype'),  url('http://www.w3cplus.com/demo/css3/3DAnimationDropdownMenu/sansation_regular-webfont.svg#sansationregular') format('svg'); font-weight: normal; font-style: normal; } body { background-color:#edecec; } /* basic menu styles */ .nav-menu { display: block; /* background: #74adaa;*/ width:950px; margin: 50px auto 150px; } .nav-menu > li { display: inline; float:left; border-right:1px solid #94c0be; } .nav-menu > li:last-child { border-right: none; } .nav-menu li a { color: #fff; display: block; text-decoration: none; /*调用本地字体*/ font-family:sansationregular; -webkit-font-smoothing: antialiased; -moz-font-smoothing: antialiased; font-smoothing: antialiased; text-transform: capitalize; overflow: visible; line-height: 20px; font-size: 20px; padding: 15px 30px 15px 31px; } .three-d { /* 任务三、设置3D舞台布景 */ -webkit-perspective: 200px; -moz-perspective: 200px; -ms-perspective: 200px; -o-perspective: 200px; perspective: 200px; /*任务四、设置3D舞台布景过渡效果*/ -webkit-transition: all .07s linear; -moz-transition: all .07s linear; -ms-transition: all .07s linear; -o-transition: all .07s linear; transition:all .7s linear; position: relative; } .three-d:not(.active):hover { cursor: pointer; } /*任务五、给不是当前状态的3D舞台的悬浮与聚焦状态设置变形效果*/ .three-d:not(.active):hover .three-d-box, .three-d:not(.active):focus .three-d-box { -wekbit-transform: translateZ(-25px) rotateX(90deg); -moz-transform: translateZ(-25px) rotateX(90deg); -o-transform: translateZ(-25px) rotateX(90deg); -ms-transform: translateZ(-25px) rotateX(90deg); transform: translateZ(-25px) rotateX(90deg); /* -webkit-transform:rotateX(90deg) translatez(-25px);*/ /* -webkit-transform:rotatex(90deg);*/ } .three-d-box { /*任务六、给3D舞台中“.three-d-box”设置过渡与变形效果*/ -webkit-transition: all .3s ease-out; -moz-transition: all .3s ease-out; -ms-transition: all .3s ease-out; -o-transition: all .3s ease-out; transition: all .3s ease-out; -webkit-transform: translatez(-25px); -moz-transform: translatez(-25px); -ms-transform: translatez(-25px); -o-transform: translatez(-25px); transform: translatez(-25px); -webkit-transform-style: preserve-3d; -moz-transform-style: preserve-3d; -ms-transform-style: preserve-3d; -o-transform-style: preserve-3d; transform-style: preserve-3d; -webkit-pointer-events: none; -moz-pointer-events: none; -ms-pointer-events: none; -o-pointer-events: none; pointer-events: none; position: absolute; top: 0; left: 0; display: block; width: 100%; height: 100%; } /*任务七、给导航设置3D前，与3D后变形效果*/ .front { -webkit-transform: rotatex(0deg) translatez(25px); -moz-transform: rotatex(0deg) translatez(25px); -ms-transform: rotatex(0deg) translatez(25px); -o-transform: rotatex(0deg) translatez(25px); transform: rotatex(0deg) translatez(25px); } .back { -webkit-transform: rotatex(-90deg) translatez(25px); -moz-transform: rotatex(-90deg) translatez(25px); -ms-transform: rotatex(-90deg) translatez(25px); -o-transform: rotatex(-90deg) translatez(25px); transform: rotatex(-90deg) translatez(25px); color: #FFE7C4; } .front, .back { /* border:1px solid red;*/ display: block; width: 100%; height: 100%; position: absolute; top: 0; left: 0; background: #74adaa; padding: 15px 30px 15px 31px; color: white; -webkit-pointer-events: none; -moz-pointer-events: none; -ms-pointer-events: none; -o-pointer-events: none; pointer-events: none; -webkit-box-sizing: border-box; box-sizing: border-box; } /*任务八、设置导航当前状态与悬浮状态下的背景效果*/ .nav-menu li .active .front, .nav-menu li .active .back, .nav-menu li a:hover .front, .nav-menu li a:hover .back { background-color: #51938f; -webkit-background-size: 5px 5px; background-size: 5px 5px; background-position: 0 0, 30px 30px; background-image: -webit-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480); background-image: -moz-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480); background-image: -ms-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480); background-image: -o-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480); background-image: linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480); } .nav-menu ul { position: absolute; text-align: left; line-height: 40px; font-size: 14px; width: 200px; -webkit-transition: all 0.3s ease-in; -moz-transition: all 0.3s ease-in; -ms-transition: all 0.3s ease-in; -o-transition: all 0.3s ease-in; transition: all 0.3s ease-in; -webkit-transform-origin: 0px 0px; -moz-transform-origin: 0px 0px; -ms-transform-origin: 0px 0px; -o-transform-origin: 0px 0px; transform-origin: 0px 0px; -webkit-transform: rotateX(-90deg); -moz-transform: rotateX(-90deg); -ms-transform: rotateX(-90deg); -o-transform: rotateX(-90deg); transform: rotateX(-90deg); -webkit-backface-visibility: hidden; -moz-backface-visibility: hidden; -ms-backface-visibility: hidden; -o-backface-visibility: hidden; backface-visibility: hidden; } /*任务九、显示下拉导航菜单，并其设置一个变形效果*/ .nav-menu > li:hover ul { /* display: block;*/ -webkit-transform: rotateX(0deg); -moz-transform: rotateX(0deg); -ms-transform: rotateX(0deg); -o-transform: rotateX(0deg); transform: rotateX(0deg); }</style>
<!--/css-->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="texthtml; charset=utf-8" />
<meta name="keywords" content="Mechanical Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->		
<!-- js -->
<script src="html/js/jquery.min.js"> </script>
<script src="html/js/bootstrap.js"></script>
<script type="text/javascript" src="html/js/move-top.js"></script>
<script type="text/javascript" src="html/js/easing.js"></script>
<script type="text/javascript" src="html/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="html/js/roundabout.js"></script>
<script type="text/javascript" src="html/js/roundabout_shapes.js"></script>
<script type="text/javascript" src="html/js/gallery_init.js"></script>
<!-- /js -->
<!--fonts-->
<!-- 被干掉的css -->
<!-- <link href='http://fonts.useso.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" type="text/css" href="html/css/style1.css" media="all" />
<!--/fonts-->
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
<body style="background:#FFFFFF none repeat scroll 0 0">

		@section('header')
			{!!\App\Http\Controllers\LayoutController::header()!!}
		@show

		 <!-- script-for-menu -->
<section id="gallery" style="height:570px;padding-top:30px;">
      <div class="container_image">
      <script src="js/responsiveslides.min.js"></script>
			<script>
				// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
						$("#slider3").responsiveSlides({
						auto: true,
						pager:false,
						nav:true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});	
				});
			</script>
        <ul id="myRoundabout" id="slider3">
          <li>
            <a href="#" target="_blank" title="图片">
              <img src="html/images/slide1.jpg" alt='图片' style="border: 0"></a>
          </li>
          <li>
            <a href="#" target="_blank" title="图片">
              <img src="html/images/slide2.jpg" alt='图片' style="border: 0"></a>
          </li>
          <li>
            <a href="#" target="_blank" title="图片">
              <img src="html/images/slide3.jpg" alt='图片' style="border: 0"></a>
          </li>
          <li>
            <a href="#" target="_blank" title="图片">
              <img src="html/images/slide4.jpg" alt='图片' style="border: 0"></a>
          </li>
          <li>
            <a href="#" target="_blank" title="图片">
              <img src="html/images/slide5.jpg" alt='图片' style="border: 0"></a>
          </li>
        </ul>
      </div>
    </section>
<div class="banner-bottom-strip">
	<div class="container">
		<p>Engineering applied to the planning, design, and control of industrial operations.</p>
	</div>
</div>	
<div class="welcome">
	<div class="container">
		<h3>Industrial Technologies</h3>
		<h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h5>
<div id="products" class="products">
				<div class="col-md-4 product-grid">
						<a href="#" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="html/images/a1.jpg" alt=" " class="img-responsive" />
						</a>
						<div class="project-grid-text1">
							<h4> voluptatibus maiores alias perferendis</h4>
							<p> Itaque earum rerum hic tenetur a sapiente delectus, 
								ut aut reiciendis voluptatibus</p>
						</div>
				</div>
				<div class="col-md-4 product-grid">	
						<a href="#" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="html/images/a2.jpg" alt=" " class="img-responsive" />
						</a>
						<div class="project-grid-text1">
							<h4> voluptatibus maiores alias perferendis</h4>
							<p> Itaque earum rerum hic tenetur a sapiente delectus, 
								ut aut reiciendis voluptatibus</p>
						</div>
				</div>
				<div class="col-md-4 product-grid">
						<a href="#" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="html/images/a3.jpg" alt=" " class="img-responsive" />
						</a>
						<div class="project-grid-text1">
							<h4> voluptatibus maiores alias perferendis</h4>
							<p> Itaque earum rerum hic tenetur a sapiente delectus, 
								ut aut reiciendis voluptatibus</p>
						</div>
					</div>
				<div class="col-md-4 product-grid">
						<a href="#" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="html/images/a4.jpg" alt=" " class="img-responsive" />
						</a>
						<div class="project-grid-text1">
							<h4> voluptatibus maiores alias perferendis</h4>
							<p> Itaque earum rerum hic tenetur a sapiente delectus, 
								ut aut reiciendis voluptatibus</p>
						</div>
				</div>
				<div class="col-md-4 product-grid">	
						<a href="#" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="html/images/a5.jpg" alt=" " class="img-responsive" />
						</a>
						<div class="project-grid-text1">
							<h4> voluptatibus maiores alias perferendis</h4>
							<p> Itaque earum rerum hic tenetur a sapiente delectus, 
								ut aut reiciendis voluptatibus</p>
						</div>
					</div>
				<div class="col-md-4 product-grid">
						<a href="#" class="b-link-stripe b-animate-go1   swipebox"  title="">
							<img src="html/images/a6.jpg" alt=" " class="img-responsive" />
						</a>
						<div class="project-grid-text1">
							<h4> voluptatibus maiores alias perferendis</h4>
							<p> Itaque earum rerum hic tenetur a sapiente delectus, 
								ut aut reiciendis voluptatibus </p>
						</div>
					</div>
					<link rel="stylesheet" href="html/css/swipebox.css">
						<script src="html/js/jquery.swipebox.min.js"></script> 
							<script type="text/javascript">
								jQuery(function($) {
									$(".swipebox").swipebox();
								});
							</script>
							<div class="clearfix"> </div>
		</div>
	</div>
	</div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
<div class="features">
	<div class="container">
		<h3>Best Industrial Products</h3>
		<h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h5>
		<div class="features-info">
			<div class="col-md-6 features-left">
				<a href="#"class="mask">
				     <img src="html/images/feature-img.jpg" class="img-responsive zoom-img" alt=""/>
				</a>
			</div>
			<div class="col-md-6 features-right">
				<h4>Best Industrial Product</h4>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					<a href="about.thml" class="hvr-bounce-to-bottom">Read More</a>
			</div>
			<div class="clearfix"> </div>
	  </div>
	</div>
</div>
<div class="features1">
	<div class="container">
		<h3>Technological Development In Industry</h3>
		<h5>Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</h5>
		<div class="features-info1">
			<div class="col-md-6 features-right1">
				<h4>Best Industrial Product</h4>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
					<a href="about.thml" class="hvr-bounce-to-bottom">Read More</a>
			</div>
						<div class="col-md-6 features-left1">
							<a href="#"class="mask">
				              <img src="html/images/feature-img2.jpg" class="img-responsive zoom-img" alt=""/>
				           </a>
			</div>
			<div class="clearfix"> </div>
	  </div>
	</div>
</div>
<div class="testimonials">
			<div class="testimonials-quote">
					<div class="col-md-6 testimonials-text">
						<h5>The silverware needed polishing and the furniture could use a good dusting.</h5>
			</div>
			<div class="clearfix"> </div>
        </div>
        </div>
	 <div class="team-work">
	  <div class="container">
		 <h3 class="team">Team Work</h3>
		 <div class="team-grids">
			 <div class="col-md-3 team-grid">
				 <img src="html/images/abt1.jpg" alt=""/>
				 <h3><a href="single.html">Sed vestibulum dui</a></h3>
				 <p>Nulla elementum vulputate quam, quis efficitur quam tempus non. Cras a dignissim purus. Ut scelerisque quis eros elementum sollicitudin.</p>
			 </div>
			 <div class="col-md-3 team-grid">
				 <img src="html/images/abt2.jpg" alt=""/>
				 <h3><a href="single.html">Fusce fringilla in mattis</a></h3>
				 <p>Nulla elementum vulputate quam, quis efficitur quam tempus non. Cras a dignissim purus. Ut scelerisque quis eros elementum sollicitudin.</p>
			 </div>
			 <div class="col-md-3 team-grid">
				 <img src="html/images/abt3.jpg" alt=""/>
				 <h3><a href="single.html">Donec porta in fringilla</a></h3>
				 <p>Nulla elementum vulputate quam, quis efficitur quam tempus non. Cras a dignissim purus. Ut scelerisque quis eros elementum sollicitudin.</p>
			 </div>
			 <div class="col-md-3 team-grid">
				 <img src="html/images/abt4.jpg" alt=""/>
				 <h3><a href="single.html">Sed non sem facilisis</a></h3>
				 <p>Nulla elementum vulputate quam, quis efficitur quam tempus non. Cras a dignissim purus. Ut scelerisque quis eros elementum sollicitudin.</p>
			 </div>
			 <div class="clearfix"> </div>
		 </div>
	 </div>
</div>
 <div class="footer">
			 <div class="container">				 	
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>Navigation</h3>
					 <ul>
						 <li><a href="index.html">Home</a></li>
						 <li><a href="about.html">About</a></li>
						 <li><a href="gallery.html">Gallery</a></li>						
						 <li><a href="blog.html">Blog</a></li>
						 <li><a href="contact.html">Contact</a></li>
					 </ul>
				 </div>
				 <div class="col-md-3 ftr_navi ftr">
					 <h3>Members</h3>
					 <ul>
						 <li><a href="#">Customer Support</a></li>
						 <li><a href="#">Platinum Support</a></li>
						 <li><a href="#">Gold Support</a></li>						
						 <li><a href="#">Standard Support</a></li>
						 <li><a href="#">Training</a></li>
					 </ul>
				 </div>
				 <div class="col-md-3 get_in_touch ftr">
					  <h3>Get In Touch</h3>
					  <p>Ola-ola street jump,</p>
					  <p>260-14 City, Country</p>
					  <p>+62 000-0000-00</p>
					  <a href="mailto:mail@mlampah.com">www.example.com</a>
				 </div>
				 <div class="col-md-3 ftr-logo">
					 <a href="#"><h3>Mechanical</h3></a>
					 <p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
				 </div>
				<div class="clearfix"> </div>
			 </div>
		  </div>
		 <!---End-container---->
		 <!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
</body>
<html>