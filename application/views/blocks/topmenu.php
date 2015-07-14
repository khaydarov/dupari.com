
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?=URL::base();?>index.php"><img src="<?=URL::base(); ?>/assets/img/log.png" alt=""></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a href="<?=URL::site('welcome'); ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-home"></i><br>Главная
							</a>
						</li>
						<li id="portfolio">
							<a href="portfolio.html" ><i class="fa fa-camera"></i><br>Страны мира</a>
						</li>
						<li id="top_trips">
							<a href="services.html"><i class="fa fa-tasks"></i><br>Топ поездок</a>
						</li>
						<li id="about">
							<a href="<?=URL::site('about/index'); ?>"><i class="fa fa-user"></i><br>О нас</a>
						</li>
						<li id="contacts">
							<a href="<?=URL::site('about/contact'); ?>"><i class="fa fa-envelope"></i><br>Контакты</a>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
								<i class="fa fa-paperclip"></i><br>Pages <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="pricing-tables.html">Pricing tables</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
