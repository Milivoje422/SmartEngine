<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 3/30/2017
 * Time: 9:10 PM
 */
?>
<?php
use yii\helpers\Html;
?>
<div id="social" class="visible-lg">
	<ul class="social-icons pull-right hidden-xs">
		<li class="social-rss">
			<a href="https://www.linkedin.com/in/milivoje-ivic-b60a04115/" target="_blank" title="RSS"></a>
		</li>
		<li class="social-twitter">
			<a href="https://twitter.com/milivojeivic422" target="_blank" title="Twitter"></a>
		</li>
		<li class="social-facebook">
			<a href="https://www.facebook.com/Mili422" target="_blank" title="Facebook"></a>
		</li>
		<li class="social-googleplus">
			<a href="https://plus.google.com/103756269355951216143" target="_blank" title="GooglePlus"></a>
		</li>
	</ul>
</div>
<!-- Header -->
<div id="header" style="background-position: 50% 0%; height:100%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<!-- Menu I -->


			<!-- End Menu I -->
			<!-- Logo -->
			<div class="logo">
				<a href="index.html" title="">
					<?= Html::img('AppImages/informatickaakademija.com milivoje-ivic-1200x800.jpg', ['alt'=>'Logo', 'class'=>'thing']);?>
				</a>
			</div>
			<!-- End Logo -->
			<!-- Top Title -->
			<div id="hornav" class="text-light">
				<div class="col-md-12">
					<div class="text-center">
						<h1>Ivi? Milivoje</h1>
						<h2>Web Developer</h2>
						<ul id="hornavmenu" class="hidden-lg hidden-sm hidden-md hidden-xs nav navbar-nav">
							<li>
								<a href="index.html" class="fa-home active">Home</a>
							</li>
							<li>
								<span class="fa-gears ">Features</span>
								<ul>
									<li class="parent">
										<span>Typography</span>
										<ul>
											<li>
												<a href="features-typo-basic.html">Basic Typography</a>
											</li>
											<li>
												<a href="features-typo-blockquotes.html">Blockquotes</a>
											</li>
										</ul>
									</li>
									<li class="parent">
										<span>Components</span>
										<ul>
											<li>
												<a href="features-labels.html">Labels</a>
											</li>
											<li>
												<a href="features-progress-bars.html">Progress Bars</a>
											</li>
											<li>
												<a href="features-panels.html">Panels</a>
											</li>
											<li>
												<a href="features-pagination.html">Pagination</a>
											</li>
										</ul>
									</li>
									<li class="parent">
										<span>Icons</span>
										<ul>
											<li>
												<a href="features-icons.html">Icons General</a>
											</li>
											<li>
												<a href="features-icons-social.html">Social Icons</a>
											</li>
											<li>
												<a href="features-icons-font-awesome.html">Font Awesome</a>
											</li>
											<li>
												<a href="features-icons-glyphicons.html">Glyphicons</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="features-testimonials.html">Testimonials</a>
									</li>
									<li>
										<a href="features-accordions-tabs.html">Accordions & Tabs</a>
									</li>
									<li>
										<a href="features-buttons.html">Buttons</a>
									</li>
									<li>
										<a href="features-carousels.html">Carousels</a>
									</li>
									<li>
										<a href="features-grid.html">Grid System</a>
									</li>
									<li>
										<a href="features-animate-on-scroll.html">Animate On Scroll</a>
									</li>
								</ul>
							</li>
							<li>
								<span class="fa-copy ">Pages</span>
								<ul>
									<li>
										<a href="pages-about-us.html">About Us</a>
									</li>
									<li>
										<a href="pages-services.html">Services</a>
									</li>
									<li>
										<a href="pages-faq.html">F.A.Q.</a>
									</li>
									<li>
										<a href="pages-about-me.html">About Me</a>
									</li>
									<li>
										<a href="pages-full-width.html">Full Width</a>
									</li>
									<li>
										<a href="pages-left-sidebar.html">Left Sidebar</a>
									</li>
									<li>
										<a href="pages-right-sidebar.html">Right Sidebar</a>
									</li>
									<li>
										<a href="pages-login.html">Login</a>
									</li>
									<li>
										<a href="pages-sign-up.html">Sign-Up</a>
									</li>
									<li>
										<a href="pages-404.html">404 Error Page</a>
									</li>
								</ul>
							</li>
							<li>
								<span class="fa-th ">Portfolio</span>
								<ul>
									<li>
										<a href="portfolio-2-column.html">2 Column</a>
									</li>
									<li>
										<a href="portfolio-3-column.html">3 Column</a>
									</li>
									<li>
										<a href="portfolio-4-column.html">4 Column</a>
									</li>
									<li>
										<a href="portfolio-6-column.html">6 Column</a>
									</li>
								</ul>
							</li>
							<li>
								<span class="fa-font ">Blog</span>
								<ul>
									<li>
										<a href="blog-list.html">Blog</a>
									</li>
									<li>
										<a href="blog-single.html">Blog Single Item</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="contact.html" class="fa-comment ">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- End Top Title -->

			<!-- Top Menu II -->


			<!-- End Top Menu -->
		</div>
	</div>
</div>
<?php
//    echo Html::beginForm(['/user/logout'], 'post');
//    echo Html::submitButton(Yii::t('app','Logout')."(".Yii::$app->user->identity->username.")");
//    echo Html::endForm();
?>
<!-- End Header -->
<!-- === END HEADER === -->
<!-- === BEGIN CONTENT === -->
<div id="welcome" class="background-white">
	<div class="container">
		<div class="row margin-vert-40">
			<!-- Main Text -->
			<div class="col-md-12">
				<h2 class="text-center article-title"><?= Yii::t('app','Welcome!');?></h2>
				<p class="text-center">
					<!--	                        Komunikativna sam osoba, vrlo rado i lako stupam u radne odnose sa drugim ljudima. Rado pokre?em-->
					<!--	                        incijativu u poslovanju.Visoko me motiviše uspješno poslovanje radne organizacije. Moje-->
					<!--	                        dosadašnje radno iskustvo me kvalifikuje za široki opseg radnih aktivnosti, kako organizicionih i uslužnih,-->
					<!--	                        tako i komunikacionih sa ostalim zaposlenicima.-->
				</p>
				<div class="col-sm-4">
					<?= Html::img('AppImages/front-portofoli-I.jpg', ['alt'=>'image2', 'style'=>'display: block; margin-left: auto; margin-right: auto; margin-top: 40px;']);?>
					<center style="margin-top:10px;"><h3>Web Design</h3></center>
				</div>
				<div class="col-sm-4">
					<?= Html::img('AppImages/front-portofoli-II.jpg', ['alt'=>'image2', 'style'=>'display: block; margin-left: auto; margin-right: auto; margin-top: 40px;']);?>
					<center style="margin-top:10px;"><h3>Web Development</h3></center>
				</div>
				<div class="col-sm-4">
					<?= Html::img('AppImages/front-portofoli-III.jpg', ['alt'=>'image2', 'style'=>'display: block; margin-left: auto; margin-right: auto; margin-top: 40px;']);?>
					<center style="margin-top:10px;"><h3>Web Ceo</h3></center>
				</div>
			</div>
			<!-- End Main Text -->
		</div>
	</div>
</div>
<!-- Icons -->
<div id="icons" class="parallax-bg1 text-light background-primary" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row margin-vert-40">
			<h2 class="text-center article-title"><?= Yii::t('app','Hobbies');?></h2>
			<!-- Icons -->
			<div class="col-md-4 text-center animate fadeInLeft">
				<i class="fa-crosshairs fa-3x color-primary-lighter"></i>
				<h2 class="padding-top-10"><?= Yii::t('app','Innovate');?></h2>
				<p><?= Yii::t('app','Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.');?></p>
			</div>
			<div class="col-md-4 text-center animate fadeIn">
				<i class="fa-puzzle-piece fa-3x color-primary-lighter"></i>
				<h2 class="padding-top-10"><?= Yii::t('app','Enlighten');?></h2>
				<p><?= Yii::t('app','Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.');?></p>
			</div>
			<div class="col-md-4 text-center animate fadeInRight">
				<i class="fa-music fa-3x color-primary-lighter"></i>
				<h2 class="padding-top-10"><?= Yii::t('app','Inspire');?></h2>
				<p><?= Yii::t('app','Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.');?></p>
			</div>
			<!-- End Icons -->
		</div>
	</div>
</div>
<!-- End Icons -->
<!-- Content -->
<div id="content" class="background-white">
	<div class="container">
		<div class="row margin-vert-40">
			<div class="col-md-12">
				<h2 class="text-center article-title">Lorem ipsum dolor</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sapien risus, blandit at fringilla ac, varius sed dolor. Donec augue lacus, vulputate sed consectetur facilisis, interdum pharetra ligula. Nulla suscipit erat nibh, ut
					porttitor nisl dapibus eu.</p>
				<p>Phasellus porta eros vel lacus euismod consequat. Phasellus eleifend, nibh non feugiat hendrerit, lacus enim adipiscing eros, a pharetra erat neque eget est. Quisque vitae aliquet urna. Integer suscipit lectus eu enim porttitor
					fringilla. Ut blandit, urna in auctor euismod, arcu eros pharetra metus, a porta purus libero a nibh.</p>
				<p>Nam eget urna pellentesque nisl ultrices dapibus. Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo. Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt
					rhoncus urna eget placerat.</p>
			</div>
		</div>
	</div>
</div>
<!-- End Content -->
<!-- Portfolio -->
<div id="porfolio" class="parallax-bg2" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row margin-top-40">
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInLeft">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Velit esse molestie</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image1.jpg', ['alt'=>'image1', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInUp">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Quam nunc putamus</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image2.jpg', ['alt'=>'image2', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInRight">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Placerat facer possim</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image3.jpg', ['alt'=>'image3', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInLeft">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Nam liber tempor</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image4.jpg', ['alt'=>'image4', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInUp">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Donec non urna</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image5.jpg', ['alt'=>'image5', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInRight">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Nullam consectetur</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image6.jpg', ['alt'=>'image6', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInLeft">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Velit esse molestie</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image7.jpg', ['alt'=>'image7', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInUp">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Quam nunc putamus</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image8.jpg', ['alt'=>'image8', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
			<!-- Portfolio Item -->
			<div class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
				<a href="#">
					<figure class="animate fadeInRight">
						<div class="grid-image">
							<div class="featured-info">
								<div class="info-wrapper">Placerat facer possim</div>
							</div>
							<?= Html::img('NewDesign/img/frontpage/image9.jpg', ['alt'=>'image9', 'class'=>'thing2']);?>
						</div>
					</figure>
				</a>
			</div>
			<!-- End Portfolio Item -->
		</div>
	</div>
</div>
<!-- End Portfolio -->
<!-- Hiring -->
<div id="hiring" class="parallax-bg3 text-light" style="background-position: 50% 0%;" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 margin-vert-40">
				<h2 class="animate fadeIn" style="text-align: center;">We are Hiring!</h2>
				<hr>
				<p class="animate fadeIn" style="text-align: center;">Mauris accumsan vehicula nisl, sed tempus mauris facilisis eu. Donec a iaculis nisi, quis malesuada justo.
					<br>Pellentesque ut enim sit amet ipsum dignissim egestas. Morbi tincidunt rhoncus urna eget placerat.</p>
				<p class="animate fadeInUp" style="text-align: center;">
					<button class="btn btn-lg btn-primary" type="button">View Details</button>
				</p>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- End Hiring -->
<!-- === END CONTENT === -->
<!-- === BEGIN FOOTER === -->
<div id="base" class="background-dark text-light">
	<div class="container padding-vert-30">
		<div class="row">
			<!-- Disclaimer -->
			<div class="col-md-6 margin-bottom-30">
				<h3 class="margin-bottom-10">Disclaimer</h3>
				<p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
				<p>Dribbble images are property of their respective owners. All other images are freely available from
					<a class="nobold" href="http://www.unsplash.com/" target="_blank">Unsplash</a>.</p>
			</div>
			<!-- End Disclaimer -->
			<!-- Image Credits -->
			<div class="col-sm-6 col-md-3 margin-bottom-30">
				<h3 class="margin-bottom-10">Image Credits</h3>
				<ul class="menu">
					<li>
						<a href="http://www.coffeeandplaid.com/" target="_blank">Coffee & Plaid</a>
					</li>
					<li>
						<a href="https://dribbble.com/OMFGdesign" target="_blank">Olly Freeman</a>
					</li>
					<li>
						<a href="https://dribbble.com/artnok" target="_blank">Niko Picard</a>
					</li>
					<li>
						<a href="https://dribbble.com/forsuregraphic" target="_blank">Forsuregraphic</a>
					</li>
					<li>
						<a href="https://www.unsplash.com" target="_blank">Unsplash</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- End Image Credits -->
			<!-- Friends -->
			<div class="col-sm-6 col-md-3 margin-bottom-30">
				<h3 class="margin-bottom-10">Friends</h3>
				<ul class="menu">
					<li>
						<a href="#">Amanda Allen</a>
					</li>
					<li>
						<a href="#">John Adams</a>
					</li>
					<li>
						<a href="#">Mark Sanchez</a>
					</li>
					<li>
						<a href="#">Diane Reed</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<!-- End Friends -->
		</div>
	</div>
</div>
<!-- Footer -->
<div id="footer" class="background-dark text-light">
	<div class="container no-padding">
		<div class="row">
			<!-- Footer Menu -->
			<div id="footermenu" class="col-md-8">
				<ul class="list-unstyled list-inline">
					<li>
						<a href="#" target="_blank">+</a>
					</li>
					<li>
						<a href="#" target="_blank">Sample Link</a>
					</li>
					<li>
						<a href="#" target="_blank">Sample Link</a>
					</li>
					<li>
						<a href="#" target="_blank">Sample Link</a>
					</li>
				</ul>
			</div>
			<!-- End Footer Menu -->
			<!-- Copyright -->
			<div id="copyright" class="col-md-4">
				<p class="pull-right">(c) <?= date('Y') ?> Developt by: Milivoje Ivic</p>
			</div>
			<!-- End Copyright -->
		</div>
	</div>
	<!-- End Footer -->

