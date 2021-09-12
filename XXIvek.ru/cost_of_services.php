<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Межрегиональный центр "Специалист XXI века"</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="source/styles/menu_style.css">
	<link rel="stylesheet" type="text/css" href="source/styles/courses-menu_style.css">
	<link rel="icon" href="source/images/logo1.png">
	<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
	<script type="text/javascript">
    var map;
    DG.then(function() {
        map = DG.map('map', {
            center: [62.044, 129.7544],
            zoom: 15
        });
         DG.marker([62.0445, 129.7544]).addTo(map).bindPopup('Специалист 21 века');
    });
	</script>
</head>
<body>
	<div id="container">
		<? include 'header.php'?>
		<div id="content-container">
			<div id="content-container-navigation">
				<br><a href="index.php" class="back_to_main">Главная</a> / Стоимость услуг<br>
			</div><br>
			<div id="content-container-left">
				<div id="content-container-left-inner">
					<br><h2 align="center">Наши курсы:</h2><br>
					<ul id="courses-menu">
                    	<li><a href="course-ohrana_truda.php" >Охрана труда</a></li>
        	            <li><a href="course-first_help.php">Первая помощь</a></li>
            	        <li><a href="course-go_chs.php">ГО и ЧС</a></li>
                	    <li><a href="course-podgotovka_chastnih_ohrannikov.php">Подготовка частных охранников</a></li>
    	                <li><a href="course-bezopasnoe_vladenie_oruzhiem.php">Безопасное владение оружием</a></li>
        	            <li><a href="course-tourism.php">Туризм</a></li>
            	        <li><a href="course-hotel_business.php" class="courses-menu-last-elem">Гостиничное дело</a></li>
                	</ul>
                </div><br>
                <div id="content-container-left-inner">
					<br><h2 align="center">Программы повышения квалификации:</h2><br>
					<ul id="courses-menu">
                    	<li><a href="advanced-training-protivodeistvie_korrupcii.php">Противодействие коррупции</a></li>
        	            <li><a href="advanced-training-first_help.php">Оказание первой медицинской помощи</a></li>
            	        <li><a href="advanced-training-ohrana_truda.php">Охрана труда</a></li>
                	    <li><a href="advanced-training-pozharnaya_bezopasnost.php" class="courses-menu-last-elem">Пожарная безопасность</a></li>
                	</ul>
                </div><br>
                <div id="content-container-left-inner">
					<br><h3 align="center">Программы профессиональной переподготовки:</h3><br>
					<ul id="courses-menu">
                    	<li><a href="professional-retraining-gosud_i_municip_uprav.php" >Государственное и муниципальное управление</a></li>
        	            <li><a href="professional-retraining-upravlenie_personalom.php">Управление персоналом</a></li>
            	        <li><a href="professional-retraining-urisprudencia.php">Юриспруденция</a></li>
                	    <li><a href="professional-retraining-pravoohranitelnaya_deyatelnost.php" class="courses-menu-last-elem">Правоохранительная деятельность</a></li>
                	</ul>
                </div>
			</div>
			<div id="content-container-info" align="center">
				<h1>Стоимость образовательных услуг</h1><br><br>
				<table border="1" cellspacing="0" cellpadding="6" style="border: 1px solid white; width: 95%;">
					<thead>
						<th>№ п/п</th>
						<th>Наименование программы</th>
						<th>Количество часов</th>
						<th>Стоимость обучения</th>
					</thead>
					<tbody>
						<tr>
							<th colspan="4" align="center">Профессиональное обучение (курсы)</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Подготовка частных охранников</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Безопасное владение оружием</td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<th colspan="4" align="center">Повышение квалификации</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Первая доврачебная медицинская помощь</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Охрана труда</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Пожарная безопасность</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Гражданская оборона и защита от чрезвычайных ситуаций</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>5</td>
							<td>Противодействие коррупции</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>6</td>
							<td>Безопасность жизнедеятельности (ОБЖ)</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>7</td>
							<td>Туризм</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>8</td>
							<td>Гостиничное дело</td>
							<td>16 часов</td>
							<td></td>
						</tr>
						<tr>
							<th colspan="4" align="center">Переподготовка</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Государственное и муниципальное управление</td>
							<td>520 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>2</td>
							<td>Управление персоналом</td>
							<td>500 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>3</td>
							<td>Юриспруденция</td>
							<td>540 часов</td>
							<td></td>
						</tr>
						<tr>
							<td>4</td>
							<td>Правоохранительная деятельность</td>
							<td>500 часов</td>
							<td></td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>
		<div id="contacts-container" align="center" style="margin-top: 1100px;">
			<br><h1>КОНТАКТЫ</h1><br>
			<div id="contacts-container-info">
				<div id="contacts-container-info-adres">г.Якутск ул. Бестужева-Марлинского, 5 офис 313</div>
				<div id="contacts-container-info-phone">8 (924) 867-34-66</div>
				<div id="contacts-container-info-mail">centrespec21@mail.ru</div>
			</div><br><br><br><br>
			<div id="map" style="width:1200px; height:500px"></div>
		</div>
		<? include 'footer.php';?>
	</div>
</body>
</html>