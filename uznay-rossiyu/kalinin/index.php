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
    <title>Виртуальная экскурсия по Раздорскому этнографическому музею-заповеднику</title>
		<link href='https://fonts.googleapis.com/css2?family=Roboto+Slab' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css2?family=Open+Sans' rel='stylesheet' type='text/css'>
		<!--<link rel="stylesheet" href="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/css/nicepage.css';?>" media="screen">-->
		<link rel="stylesheet" href="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/css/main.css';?>" media="screen">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<link href="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/css/style.css?v=1.1.0';?>" rel='stylesheet' type='text/css'>

    <style>
			#centerLayer .image {
					background-image: url(<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/kalinin.jpg';?>);
			}
		</style>  
    
		
		<script type="application/ld+json">{"@context": "http://schema.org","@type": "Organization","name": "Don360","url": "https://don360.ru/"}</script>
    <meta property="og:title" content="Виртуальный тур по Раздорскому этнографическому музею-заповеднику">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="<? echo $currentUrl;?>">
    <meta property="og:url" content="<? echo $currentUrl;?>">
  </head>
  
	<body class="body " style="">
		<header id="header">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container header_wrapper">
					<div class="col-auto me-auto">
						<?php if($_GET['lang'] == 'ru' || $_GET['lang'] == ''){ ?>
							<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/images/fond_black_ru.svg';?>" class="image_first"/>
						<?} elseif($_GET['lang'] == 'en'){?>
							<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/images/fond_black_en.svg';?>" class="image_first"/>
						<?} elseif($_GET['lang'] == 'ch'){?>
							<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/images/fond_black_ch.svg';?>" class="image_first"/>
						<?}?>
					</div>
					<!--
					<div class="col-auto lang_wrapper d-none d-lg-block">										
						<div class="lang_wrap">
							<a href="?lang=ru" class="<?php if($_GET['lang'] == 'ru' || $_GET['lang'] == ''){ ?> active <?}?>">
								<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/rus.jpg';?>" class="lang_img" />
								<p class="small_text">Русский</p>
							</a>
							<a href="?lang=en" class="<?php if($_GET['lang'] == 'en' || $_GET['lang'] == ''){ ?> active <?}?>">
								<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/eng.jpg';?>" class="lang_img" />
								<p class="small_text">English</p>
							</a>
							<a href="?lang=ch" class="<?php if($_GET['lang'] == 'ch' || $_GET['lang'] == ''){ ?> active <?}?>">
								<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/china.jpg';?>" class="lang_img" />
								<p class="small_text">中国人</p>
							</a>
						</div>
					</div>
					-->			
				</div><!-- /.container -->
			</nav>
		</header>

		<section id="centerLayer">
			<div class="container main_wrapper">
				<div class="row align-items-center">
					<div class="col-12 col-xxl-4 col-xl-5 col-lg-4 col-md-12">
						<div class="image"></div> 
					</div>
					<div class="col-12 col-xxl-8 col-xl-7 col-lg-12 col-md-12">
						<div class="desc">
						
							<p class="small_text">Изготовлено в рамках реализации проекта</p>
							<h2>«Узнай Россию: гении слова, рождённые на Дону»</h2> 
							<p class="small_text">(руководитель - Леонид Шафиров, оператор - Общероссийская Ассоциация почётных граждан, настанвиков и талантливой молодёжи) при поддержке членов Общественной палаты Российской Федерации, Общественной палаты Ростовской области.</p>
							<p class="default_text">Благодарим за совместную работу Донскую государственную публичную библиотеку (<a href="http://www.dspl.ru/" target="_blank">http://www.dspl.ru/</a>), МБУ ДО города Ростова-на-Дону "Центр детского и юношеского туризма и экскурсий (юных туристов)" (<a href="https://rostovturcenter.ru/" target="_blank">https://rostovturcenter.ru/</a>) и методиста Центра Наталью Ратушную</p>
							<p class="small_text">Разработка и изготовление виртуального тура: <a href="https://don360.ru/">Студия DON360.RU</a></p>
						
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->	
		</section>
		
		<footer id="footer" class="position-fixed bottom-0 start-50 translate-middle-x color_primary" >
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-auto me-auto title_tour">					
						<h1>Виртуальный тур по Раздорскому этнографическому музею-заповеднику</h1><p class="small_text">Экскурсия в сопровождении аудиогида</p>
					</div>
					<div class="col-auto w-actionbox-controls at_right mb-md-0 mb-4">						
							<a class="w-actionbox-button g-btn size_big type_default " href="tour.php?audiogid=0&lang=ru">
								<span>Запустить&nbsp;&nbsp;аудиогид</span>
							</a>						
					</div>
					<!--
					<div class="col-12 lang_wrapper d-block d-lg-none">
						
						<?php if($_GET['lang'] == 'ru' || $_GET['lang'] == ''){ ?>
										
							<div class="lang_wrap">
								<a href="?lang=ru" class="active">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/rus.jpg';?>" class="lang_img" />
									<p class="small_text">Русский</p>
								</a>
								<a href="?lang=en">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/eng.jpg';?>" class="lang_img" />
									<p class="small_text">Английский</p>
								</a>
								<a href="?lang=ch">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/china.jpg';?>" class="lang_img" />
									<p class="small_text">Китайский</p>
								</a>
							</div>
							
						<?} elseif($_GET['lang'] == 'en'){?>

							<div class="lang_wrap">
								<a href="?lang=ru">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/rus.jpg';?>" class="lang_img" />
									<p class="small_text">Russian</p>
								</a>
								<a href="?lang=en"  class="active">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/eng.jpg';?>" class="lang_img" />
									<p class="small_text">English</p>
								</a>
								<a href="?lang=ch">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/china.jpg';?>" class="lang_img" />
									<p class="small_text">Chinese</p>
								</a>
							</div>
						
						
						<?} elseif($_GET['lang'] == 'ch'){?>
						
							<div class="lang_wrap">
								<a href="?lang=ru">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/rus.jpg';?>" class="lang_img" />
									<p class="small_text">俄语</p>
								</a>
								<a href="?lang=en">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/eng.jpg';?>" class="lang_img" />
									<p class="small_text">英语</p>
								</a>
								<a href="?lang=ch"  class="active">
									<img src="<?echo '//'.$_SERVER['SERVER_NAME']. '/uznay-rossiyu/assets/images/china.jpg';?>" class="lang_img" />
									<p class="small_text">中国人</p>
								</a>
							</div>				
						
						<?}?>
						
					</div>
					-->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script class="u-script" type="text/javascript" src="../assets/js/nicepage.js" defer=""></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

<script>
	$(document).ready(function() {
		$h_footer = $('#footer').outerHeight();	
		if($h_footer != 160) {
				$('#centerLayer').css('padding-bottom', $h_footer+40);
			} else {
				$('#centerLayer').css('padding-bottom', 0);					
			}	
		
		$(window).on('resize', function(){
			$h_footer2 = $('#footer').outerHeight();	
			console.log($h_footer2);
			if($h_footer2 != 160) {
				
				$('#centerLayer').css('padding-bottom', $h_footer+40);
			} else {
				$('#centerLayer').css('padding-bottom', 0);					
			}					
		})			
	});
</script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(82300993, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/82300993" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->	
</body>
</html>