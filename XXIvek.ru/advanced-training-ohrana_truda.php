<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Программа повышения квалификации - Охрана труда</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="source/styles/menu_style.css">
	<link rel="stylesheet" type="text/css" href="source/styles/courses-menu_style.css">
	<link rel="icon" href="source/images/logo1.png">
	<script type="text/javascript">
		function show(state){ 
			document.getElementById('zayavka').style.display = state;
			document.getElementById('wrap').style.display = state; 
		}
	</script>
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
				<br><a href="index.php" class="back_to_main">Главная</a> / Программа повышения квалификации "Охрана труда"<br>
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
            	        <li class="selected-courses-menu-elem"><a href="advanced-training-ohrana_truda.php">Охрана труда</a></li>
                	    <li><a href="advanced-training-pozharnaya_bezopasnost.php">Пожарная безопасность</a></li>
                	    <li><a href="advanced-training-bezopasnost_zhiznedeyatelnosti.php" class="courses-menu-last-elem">Безопасность жизедеятельности</a></li>
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
				<h2>Охрана труда</h2><br>
			 	<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;<b>Охрана труда</b> – это система сохранения жизни и здоровья работников в процессе трудовой деятельности, включающая в себя правовые, социально-экономические, организационно-технические, санитарно-гигиенические, лечебно-профилактические, реабилитационные и иные мероприятия.<br><br>
			 	&nbsp;&nbsp;&nbsp;&nbsp;<b>Программа предназначена для</b> приобретения слушателями необходимых знаний по охране труда для их применения в практической деятельности в сфере безопасности и охраны труда с целью обеспечения профилактических мер по сокращению производственного травматизма и профессиональных заболеваний.<br><br>
			 	&nbsp;&nbsp;&nbsp;&nbsp;<b>В результате прохождения обучения</b> по охране труда слушатели приобретают знания об основах охраны труда, основах управления охраной труда в организации, по специальным вопросам обеспечения требований охраны труда и безопасности производственной деятельности, о социальной защите пострадавших от несчастных случаев на производстве и профессиональных заболеваний.</p><br>
				<img src="source/images/courses/ot.jpg" width="auto" height="679px">
			</div>
			<div onclick="show('none')" id="wrap"></div>  
			<div id="zayavka">
				<form method="POST" action="zayavka.php">
					<label for="name">ВВЕДИТЕ ВАШЕ ИМЯ</label>
					<input type="text" name="name" placeholder="Имя" required="required"><br>
					<label>ВЫБЕРИТЕ НУЖНЫЙ КУРС ИЛИ ПРОГРАММУ ОБУЧЕНИЯ</label>
					<select name="selected_program">
						<option disabled="true">-------------------------------------</option>
						<option disabled="true">Курсы:</option>
						<option>"Охрана труда"</option>
						<option>"Первая помощь"</option>
						<option>"ГО и ЧС"</option>
						<option>"Подготовка частных охранников"</option>
						<option>"Безопасное владение оружием"</option>
						<option>"Туризм"</option>
						<option>"Гостиничное дело"</option>
						<option disabled="true">-------------------------------------</option>
						<option disabled="true">Программы повышения квалификации:</option>
						<option>"Противодействие коррупции"</option>
						<option>"Оказание первой медицинской помощи"</option>
						<option selected="true">"Охрана труда"</option>
						<option>"Пожарная безопасность"</option>
						<option>"Безопасность жизедеятельности"</option>
						<option disabled="true">-------------------------------------</option>
						<option disabled="true">Программы профессиональной переподготовки:</option>
						<option>"Государственное и муниципальное управление"</option>
						<option>"Управление персоналом"</option>
						<option>"Юриспруденция"</option>
						<option>"Правоохранительная деятельность"</option>
					</select><br>
					<label>ВВЕДИТЕ ВАШ EMAIL</label>
					<input type="email" placeholder="Email" name="email" required="required"><br>
					<label>ВВЕДИТЕ ВАШ ТЕЛЕФОН</label>
					<input type="text" name="mobilephone" required="required"><br>
					<button class="zayavka_send" type="submit" name="submit">Отправить</button>
					<input type="checkbox" class="checkbox" name="checkbox1" id="checkbox1" required="required">
					<label for="checkbox1" class="for_checkbox">Нажимая кнопку, я даю согласие на обработку персональных данных и соглашаюсь с пользовательским соглашением и политикой конфиденциальности</label><br>
					<input type="checkbox" class="checkbox" name="checkbox2" id="checkbox2" required="required">
					<label for="checkbox2" class="for_checkbox">Я согласен на получение информации и документации по обучению</label><br>
				</form>
			</div> 
			<div id="content-container-zayavka" style="margin-top: 1200px;">
				<div class="content-container-zayavka-text">
					<div>
					<label>Подайте заявку на обучение прямо сейчас!</label></div>
				</div>
				<div class="content-container-zayavka-button">
					<div>
					<button onclick="show('block')" class="button">Отправить</button>
					</div>
				</div>
			</div>
		</div>
		<div id="contacts-container" align="center" style="margin-top: 50px;">
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