<?php
	$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$url = explode('?', $url);
	$currentUrl = $url[0];
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
		<title>Литературный проект «Узнай Россию» | Виртуальная онлайн-экскурсия по литературным местам Ростовской области | DON360.RU</title>
		<link href='https://fonts.googleapis.com/css2?family=Roboto+Slab' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='css/style.css?v=1.0.0' rel='stylesheet' type='text/css'>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">    
    <script type="application/ld+json">{"@context": "http://schema.org","@type": "Organization","name": "Don360","url": "https://don360.ru/"}</script>				
		<meta property="og:title" content="Литературный проект «Узнай Россию» | Виртуальная онлайн-экскурсия по литературным местам Ростовской области | DON360.RU">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="<? echo $currentUrl;?>">
    <meta property="og:url" content="<? echo $currentUrl;?>">
  </head>
 <body class="body " style="">
 
	<header id="header">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container header_wrapper">
				<a class="navbar-brand fs-2" href="https://don360.ru">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="width:1em;height:1em;" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"></path>
					</svg> Вернуться на главную
				</a>
				<div class="col-auto lang_wrapper d-none d-lg-block">								
						<div class="lang_wrap">
							<a href="?lang=ru" class="active">
								<img src="images/rus.jpg" class="lang_img" />
								<p class="small_text">Русский</p>
							</a>
							<a href="?lang=en" class="active">
								<img src="images/eng.jpg" class="lang_img" />
								<p class="small_text">English</p>
							</a>
							<a href="?lang=ch" class="active">
								<img src="images/china.jpg" class="lang_img" />
								<p class="small_text">中国人</p>
							</a>
						</div>
				</div>			
			</div><!-- /.container -->	
		</nav>
	</header>
	
	<section id="centerLayer">
		<div class="container main_wrapper">
			<div class="row row-cols-3 mt-5">

						<?php if($_GET['lang'] == 'ru' || !$_GET['lang']){ ?>

							<div class="col-12 col-xxl-4 mb-5">
								<div class="card" style="">
									<img src="images/pushkin.jpg" class="img-fluid card-img-top" alt="Виртуальная экскурсия в сопровождении аудиогида по улице Пушкинской в Ростове-на-Дону">
									<div class="card-body">
										<h5 class="card-title">Виртуальная экскурсия в сопровождении аудиогида по улице Пушкинской в Ростове-на-Дону</h5>
									</div>
									<div class="card-footer">
										<a href="<?echo 'http://'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/rostov/?lang=ru';?>" class="btn btn-primary">Просмотреть</a>
										
									</div>
								</div>
							</div>

							<div class="col-12 col-xxl-4 mb-5">
								<div class="card" style="">
									<img src="images/chehov.jpg" class="img-fluid card-img-top" alt="Виртуальная экскурсия в сопровождении аудиогида «На родине А.П. Чехова»">
									<div class="card-body">
										<h5 class="card-title">Виртуальная экскурсия в сопровождении аудиогида «На родине А.П. Чехова»</h5>
									</div>
									<div class="card-footer">
										<a href="<? echo 'http://'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/chehov/?lang=ru';?>" class="btn btn-primary">Просмотреть</a>
									</div>
								</div>
							</div>

							<div class="col-12 col-xxl-4 mb-5">
								<div class="card" style="">
									<img src="images/kalinin.jpg" class="img-fluid card-img-top" alt="Виртуальная экскурсия в сопровождении аудиогида по Раздорскому этнографическому музею-заповеднику">
									<div class="card-body">
										<h5 class="card-title">Виртуальная экскурсия в сопровождении аудиогида по Раздорскому этнографическому музею-заповеднику</h5>
									</div>
									<div class="card-footer">
										<a href="<? echo 'http://'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/kalinin/?lang=ru'; ?>" class="btn btn-primary">Просмотреть</a>
									</div>
								</div>
							</div>

						<?} elseif($_GET['lang'] == 'en'){?>
							
							<div class="col-12 col-xxl-4 mb-5">
								<div class="card" style="">
									<img src="images/pushkin.jpg" class="card-img-top" alt="Virtual tour of Pushkinskaya street in Rostov-on-Don">
									<div class="card-body">
										<h5 class="card-title">Virtual tour of Pushkinskaya street in Rostov-on-Don</h5>
									</div>
									<div class="card-footer">
										<a href="<? echo 'http://'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/rostov/?lang=en';?>" class="btn btn-primary">Go View</a>
									</div>
								</div>
							</div>

							<div class="col-12 col-xxl-4 mb-5">
								<div class="card" style="">
									<img src="images/chehov.jpg" class="card-img-top" alt="Virtual tour in the homeland of A.P. Chekhov in Taganrog">
									<div class="card-body">
										<h5 class="card-title">Virtual tour in the homeland of A.P. Chekhov in Taganrog</h5>
									</div>
									<div class="card-footer">
										<a href="<? echo 'http://'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/chehov/?lang=en';?>" class="btn btn-primary">Go View</a>
									</div>
								</div>
							</div>
						<?} elseif($_GET['lang'] == 'ch'){?>
							
							<div class="col-12 col-xxl-4 mb-5">
								<div class="card" style="">
									<img src="images/pushkin.jpg" class="card-img-top" alt="顿河畔罗斯托夫普希金大街的虚拟之旅">
									<div class="card-body">
										<h5 class="card-title">顿河畔罗斯托夫普希金大街的虚拟之旅</h5>
									</div>
									<div class="card-footer">
										<a href="<? echo 'http://'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/rostov/?lang=ch';?>" class="btn btn-primary">Go View</a>
									</div>
								</div>
							</div>

							<div class="col-12 col-xxl-4 mb-5">
								<div class="card" style="">
									<img src="images/chehov.jpg" class="card-img-top" alt="塔甘罗格 A.P. Chekhov 故乡的虚拟之旅">
									<div class="card-body">
										<h5 class="card-title">塔甘罗格 A.P. Chekhov 故乡的虚拟之旅</h5>
									</div>
									<div class="card-footer">
										<a href="<? echo 'http://'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/chehov/?lang=ch';?>" class="btn btn-primary">Go View</a>
									</div>
								</div>
							</div>
						<?}?>
			</div><!-- /.row -->
			<!--<div class="row align-items-center">
				<div class="col-12">

					<?php if($_GET['lang'] == 'ru' || !$_GET['lang']){ ?>

						<h2>Проект «Узнай Россию: гении слова, рождённые на Дону»<br>при поддержке<br>Фонда Презедентских Грантов</h2>

					<?} elseif($_GET['lang'] == 'en'){?>

						<h2>Project "Get to know Russia: geniuses of the word, born on the Don"<br>with the support of<br>Presidential Grands Fund</h2>

					<?} elseif($_GET['lang'] == 'ch'){?>

						<h2>了解俄罗斯：这个词的天才，出生在顿河<br>在支持下<br>总统赠款基金</h2>

					<?}?>

				</div>				
			</div>-->
		</div><!-- /.container -->	
	</section>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	
</body>  
</html>