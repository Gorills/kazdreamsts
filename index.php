<?
    if (isset($_SESSION['user_role'])) {
        // определяем логические переменные по ролям пользователей    
    }
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>KazDream Technologies - Лаборатория СТС</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
    
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	
    <link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/flaticon/flaticon.css">    
</head>

<body>
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-brand">
				<div class="container">
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item"><a class="nav-link" href="#">Каталог</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Услуги</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Поддержка</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">О лаборатории</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
							<!--- CUTTED CODE #1 ---> 
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<button class="btn btn-info">Личный кабинет</button>                            
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	

	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="home_left_img">
							<img class="img-fluid" src="img/banner/home-left.png" alt="">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="banner_content">
							<h2>
								Специальные <br>
								Технические <br>
								Средства
							</h2>
							<p>
								Создаем продукты, которые спасают жизни, предотвращают негативные события и сокращают риски бизнеса.<br/>
                                Поставка, обслуживание и интеграция СТС-решений. 
							</p>
							<div class="d-flex align-items-center">
								<a id="play-home-video" class="video-play-button" href="https://www.youtube.com/">
									<span></span>
								</a>
								<div class="watch_video text-uppercase">
									ВИДЕОПРЕЗЕНТАЦИЯ
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Start About Us Area =================-->
	<section class="about_us_area section_gap_top">
		<div class="container">
			<div class="row about_content align-items-center">
				<div class="col-lg-6">
					<div class="section_content">
						<h6>О лаборатории</h6>
						<h1>Лаборатория СТС создана в 2020 году при IT-холдинге "KazDream"</h1>
						<p>В рамках проекта будет осуществляться поставка, авторизованое сервисное обслуживание СТС-решений, интеграция СТС с действующими решениями, разработка отечественных комплексов</p>
                        <p>В настоящее время ведется поиск и набор лучших в Республике Казахстан инженеров в сфере радиоэлектроники и микро-схемотехники</p>
						<a class="primary_btn" href="#">Подробнее</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_us_image_box justify-content-center">
						<img class="img-fluid w-100" src="img/about_img.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End About Us Area =================-->

	<!--================First Upcoming Games Area =================-->
	<section class="upcoming_games_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>УСЛУГИ И РЕШЕНИЯ</h2>
						<h1>УСЛУГИ И РЕШЕНИЯ</h1>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map1.png" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Поставка оборудования</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map2.png" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Сервисное обслуживание</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map3.png" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Интеграция <br/> решений</a></h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="new_games_item">
						<img src="img/b_map4.png" alt="">
						<div class="upcoming_title">
							<h3><a href="#">Разработка и экспертиза</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Upcoming Games Area =================-->

	<!--================Start Recent Update Area =================-->
	<section class="recent_update_area section_gap">
		<div class="container">
			<div class="recent_update_inner">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
							Условия поставки решений
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
						 aria-selected="false">
							Условия сервисного обслуживания
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
						 aria-selected="false">
							Условия разработки и экспертизы
						</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/recent_up.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Преимущества</h6>
									<h1>Поставка решений по требованиям</h1>
									<p>Изучение потребностей заказчика и предложение оптимального решения для поставленных задач</p>
									<a class="primary_btn" href="#">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/recent_up.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Авторизованный сервис</h6>
									<h1>Сокращение сроков и рисков</h1>
									<p>Лаборатория проходит обязательную авторизацию и сертификацию у производителей оборудования</p>
									<a class="primary_btn" href="#">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row recent_update_text">
							<div class="col-lg-6">
								<div class="chart_img">
									<img class="img-fluid" src="img/recent_up.png" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="section_content">
									<h6>Стратегические гарантии</h6>
									<h1>Детальное изучение</h1>
									<p>Лаборатория осуществляет серьезные исследования и тщательное изучение решений и продуктов</p>
									<a class="primary_btn" href="#">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Recent Update Area =================-->


	<!--================ Start Pricing Plans Area ================-->
	<section class="pricing_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Ценовая политика</h2>
						<h1>Ценовая политика</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="pricing_item">
						<h3 class="p_title">Поставка оборудования</h3>
						<h5 class="p_price">цена по запросу</h5>
						<div class="p_list">
							<ul>
								<li>Оборудование для мониторинга</li>
								<li>Оборудование для защиты от НСД</li>
								<li>Оборудование для исследований </li>
							</ul>
						</div>
						<div class="p_btn">
							<a class="gradient_btn" href="#"><span>Отправить запрос</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="pricing_item active">
						<h3 class="p_title">Сервисное обслуживание</h3>
						<h5 class="p_price">цена по запросу</h5>
						<div class="p_list">
							<ul>
								<li>Ремонт оборудования</li>
								<li>Сервисное обслуживание </li>
								<li>Техническая поддержка </li>
							</ul>
						</div>
						<div class="p_btn">
							<a class="gradient_btn" href="#"><span>Отправить запрос</span></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 hidden-md">
					<div class="pricing_item">
						<h3 class="p_title">Разработка и интеграция</h3>
						<h5 class="p_price">цена по запросу</h5>
						<div class="p_list">
							<ul>
								<li>Разработка stand-alone устройств</li>
								<li>Интеграция комплексов и решений</li>
								<li>Экспертиза и исследования</li>
							</ul>
						</div>
						<div class="p_btn">
							<a class="gradient_btn" href="#"><span>Отправить запрос</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Pricing Plans Area ================-->


	<!--================ Start Frequently Asked Questions Area ================-->
	<section class="frequently_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Общая информация</h2>
						<h1>Общая информация</h1>
					</div>
				</div>
			</div>
			<div class="row frequent_inner">
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item">
						<h3>Почему все так сложно?</h3>
						<p>С точки зрения банальной эрудиции каждый индивидуум не может дифференцировать свой разум для интеграции глобальных проблем человечества</p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item">
						<h3>Почему так дорого?</h3>
						<p>Исходя из соображений экономической целесообразности, следует руководствоваться выбором двумя критериев из трех основных: быстро, качественно, дорого</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item">
						<h3>А вы сумеете?</h3>
						<p>Степень успеха в равной мере зависит от двух обстоятельств: хватит ли у заказчика денег, а у поставщика времени.</p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item">
						<h3>Дядя Вася круче чем ваши специалисты</h3>
						<p>Да, согласны, что дядя Вася круче, чем наши специалисты, поэтому дядя Вася работает у нас неофициально на полторы ставки.</p>
					</div>
				</div>
				<div class="col-lg-5 col-md-5">
					<div class="frequent_item last-child">
						<h3>Нам нужно чудо</h3>
						<p>Чудеса в настоящее время в наличии отсутствуют, можем предложить навигационный комплекс с картами Средиземья, Хогвартса и Нарнии</p>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-5 offset-md-2 col-md-5">
					<div class="frequent_item last-child">
						<h3>Хочу к вам на работу</h3>
						<p>Мы готовы рассмотреть вашу кандидатуру с обязательным прохождением испытательного срока и предоставлением справки о нордическом характере</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Frequently Asked Questions Area ================-->

	<!--================ Start Blog Area ================-->    
	<section class="blog_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title">
						<h2>Клиентам и партнерам</h2>
						<h1>Клиентам и партнерам</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/blog_img1.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="#">Большие данные - большой эффект</a>
							<p>Искусственный интеллект (AI) и большие данные будут использоваться для обеспечения более эффективных и экономичных решений социальных проблем</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>10.06.2020</a>
								<a href="#"><i class="fa fa-heart" aria-hidden="true"></i>15</a>
								<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>05</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/blog_img2.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="#">Семинар по технологиям</a>
							<p>Курс повышения квалификации рассчитан на инженеров-схемотехников, а также системных инженеров, занимающихся разработкой высокоскоростных устройств.</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>11.06.2020</a>
								<a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
								<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 hidden-md">
					<div class="blog_items">
						<div class="blog_img_box">
							<img class="img-fluid" src="img/blog_img3.png" alt="">
						</div>
						<div class="blog_content">
							<a class="title" href="#">Выставка RADEL-2020</a>
							<p>Самый главный источник информации и новых партнеров. Надо обязательно побывать.</p>
							<div class="date">
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>12.06.2020</a>
								<a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
								<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Blog Area ================-->

	<!--================ Start Newsletter Area ================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="newsletter_inner">
						<h1>Отправить запрос</h1>
						<p>или другая форма быстрой связи</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<aside class="newsletter_widget">
						<div id="mc_embed_signup">
							<form target="_blank" action="#"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="" onfocus="this.placeholder = ''" onblur="this.placeholder = ''"
									 required="" type="email">
									<button class="btn primary_btn">Отправить</button>
								</div>
							</form>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area ================-->

	<!--================Footer Area =================-->
	<footer class="footer_area section_gap_top">
		<div class="container">
			<div class="row footer_inner">
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Информация</h4>
						</div>
						<ul>
							<li><a href="#"></a>Частным организациям</a></li><a href="#">
							<li><a href="#"></a>Условия сервиса</a></li>
							<li><a href="#"></a>Гарантия и постгарантия</a></li>
							<li><a href="#"></a>Виды деятельности</a></li>
							<li><a href="#"></a>Презентации</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Лаборатория</h4>
						</div>
						<ul>
							<li><a href="#"></a>Руководство</a></li><a href="#">
								<li><a href="#"></a>Сервисная служба
							</a></li>
							<li><a href="#"></a>Отдел продаж</a></li>
							<li><a href="#"></a>Департамент разработки</a></li>
							<li><a href="#"></a>Обновления продуктов</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Поддержка</h4>
						</div>
						<ul>
							<li><a href="#"></a>Документация</a></li><a href="#">
								<li><a href="#"></a>Безопасность
							</a></li>
							<li><a href="#"></a>Диагностика и экспертиза</a></li>
							<li><a href="#"></a>Алгоритмы взаимодействия</a></li>
							<li><a href="#"></a>Программное обеспечение</a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-3 col-sm-6">
					<aside class="f_widget ab_widget">
						<div class="f_title">
							<h4>Юридическая информация</h4>
						</div>
						<ul>
							<li><a href="#"></a>Оферта пользователя сайта</a></li><a href="#">
								<li><a href="#"></a>Политика безопасности
							</a></li>
							<li><a href="#"></a>Сбор информации</a></li>
							<li><a href="#"></a>Конфиденциальность</a></li>
						</ul>
					</aside>
				</div>
			</div>
			<div class="row single-footer-widget">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copy_right_text">
						<p>Все права защищены &copy;&nbsp;<script>document.write(new Date().getFullYear());</script> | <a href="https://kazdream.kz" target="_blank">KazDream Technologies</a></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="social_widget">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>