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
		<? include 'header.php';?>
		<div id="content-container" style="height: 1150px;">
			<br><div id="content-container-left">
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
			<div id="content-container-info">
				<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;Частное образовательное учреждение дополнительного профессионального образования <b>«Межрегиональный центр «Специалист 21 века»</b> – многопрофильный центр, предоставляющий услуги обучения в сфере повышения квалификации и подготовки специалистов, наиболее востребованных на рынке труда.<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;Межрегиональный центр «Специалист 21 века» предлагает вам обучение по следующим <b>курсам:</b><br>
				- <a href="course-ohrana_truda.php" >Охрана труда</a><br>
        	    - <a href="course-first_help.php">Первая помощь</a><br>
            	- <a href="course-go_chs.php">ГО и ЧС</a><br>
             	- <a href="course-podgotovka_chastnih_ohrannikov.php">Подготовка частных охранников</a><br>
    	        - <a href="course-bezopasnoe_vladenie_oruzhiem.php">Безопасное владение оружием</a><br>
        	    - <a href="course-tourism.php">Туризм</a><br>
            	- <a href="course-hotel_business.php" class="courses-menu-last-elem">Гостиничное дело</a><br><br>

				<b>Повышение квалификации</b> по профессиональным программам:<br>
				- <a href="advanced-training-protivodeistvie_korrupcii.php">Противодействие коррупции;</a><br>
				- <a href="advanced-training-first_help.php">Оказание первой медицинской помощи;</a><br>
				- <a href="advanced-training-ohrana_truda.php">Охрана труда;</a><br>
				- <a href="advanced-training-pozharnaya_bezopasnost.php">Пожарная безопасность.</a><br><br>
				<b>Профессиональная переподготовка</b> специалистов по дополнительным профессиональным программам:<br>
				- <a href="professional-retraining-gosud_i_municip_uprav.php">Государственное и муниципальное управление;</a><br>
				- <a href="professional-retraining-upravlenie_personalom.php">Управление персоналом;</a><br>
				- <a href="professional-retraining-urisprudencia.php">Юриспруденция;</a><br>
				- <a href="professional-retraining-pravoohranitelnaya_deyatelnost.php">Правоохранительная деятельность.</a><br><br>

				<b>После прохождения обучения</b> вам будут выданы все соответствующие документы<br></p><br>
				<img src="source/images/diploms.jpg" height="315px;" width="auto;">
				<img src="source/images/udostoverenie.jpg" height="315px;" width="auto;">
			</div>
		</div>
		<div id="contacts-container" align="center">
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