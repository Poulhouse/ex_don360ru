<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<style>
			body {
				margin: auto;
				padding: 0;
				max-width: 1200px;
				display:flex;
			}
			.bg_overlay {
				display: flex;
				align-items: center;
				justify-content: center;
				align-content: center;
			}

			.bg_overlay > div {
				width: 33.33%;
				display: grid;
				justify-content: center;
				text-align: center;
				padding: 20px;
				margin: 15px;
				height: 300px;
				box-shadow: 0 8px 16px 0px rgb(0 0 0 / 15%);
			}
			
			.bg_overlay > div > a {
				width: 100%;
				display: flex;
				flex-direction: column;
				justify-content: space-around;
				align-items: center;
			}
			.bg_overlay > div > a > span {
				font-family: Montserrat;
				font-weight: 700;
				color: #333333;
				font-size: 1.14em;
			}
			.bg_overlay > div > a > img {
				width: 100%;
			}
			.bg_overlay > div > a > div {
				width: 100%;
				display: block;
				height: 200px;
				background-position: top;
				background-size: cover;
				background-repeat: no-repeat;
			}
			@media screen and (max-width: 780px) {
				.bg_overlay {
					flex-direction: column;
					width: 100%;
					align-items: center;
					justify-content: flex-start;
					/*margin: 15px;*/
				}
				.bg_overlay > div {
					width: 330px;
				}
				.bg_overlay > div > a > div {
					width: 300px;
				}
			}
			@media screen and (max-width: 400px) {
				.bg_overlay > div {
					width: 280px;
					
				}
				.bg_overlay > div > a > div {
					width: 260px;
				}
			}
		</style>
	</head>
	<body>
		<div class="bg_overlay">
			<div>
				<a href="https://fiveday.ru/tour_new/rostov/">
					<div style="background-image:url(images/pushkin.jpg);"></div>
					<span>Виртуальный тур по улице Пушкинской в Ростове-на-Дону</span>
				</a>
			</div>
			<div>
				<a href="https://fiveday.ru/tour_new/chehov/">
					<div style="background-image:url(images/chehov.jpg);"></div>
					<span>Виртуальный тур «На родине А.П. Чехова»</span>
				</a>
			</div>
			<div>
				<a href="https://fiveday.ru/tour_new/kalinin/">
					<div style="background-image:url(images/kalinin.jpeg);"></div>
					<span>Виртуальный тур по Раздорскому этнографическому музею-заповеднику</span>
				</a>
			</div>
		</div>
	</body>
</html>