<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Основная страница</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<style>



#header {
  grid-area: header;
}
#footer {
  grid-area: footer;
}
#article { 
  grid-area: article;      
  }
#mainNav { 
  grid-area: nav; 
  }
</style>
</head>
<body>
	<div class="oll">

<form class="popup_e" id="popup_e">
		<div class="popup__body">
			<div class="popup__content">
					<a  class="popup__close" id="popup__close_e">X</a>
					<a  class="popup__registration" id="popup__registration">Регистрация</a>
					<div class="popup__title">Вход</div>
					<div class="popup__basic">
						<input class="email" type="Email" placeholder="Email" required>
						<input type="password" id="password" class="password" placeholder="Пароль" required  minlength="6">
						<input type="submit" class="entranceBatton" value="ВХОД">
					</div>
				</div>	
		</div>
</form>

<form class="popup_r" id="popup_r">
		<div class="popup__body" >
			<div class="popup__content">
					<a class="popup__close" id="popup__close_r">X</a>
					<a  class="popup__entrance" id="popup__entrance">Вход</a>
					<div class="popup__title">Регистрация</div>
					<div class="popup__basic">
						<input type="text" id="name" class="name"  placeholder="Ваше имя" required pattern="[а-я, А-Я, ,-]+">
						<input type="Email" class="email" id="email" placeholder="Email" required>
						<input type="tel" class="tel" id="tel" placeholder="Номер телефона" required pattern="[0-9]{11}" title="Введите номер телефона. 11 цифр без тире и пробелов">
						<input type="password" class="password" id="password" placeholder="Пароль" required  minlength="6" >
						<input type="password" class="password_cop" id="password_cop" placeholder="Подтвердите пароль" required>
							<p><input type="checkbox" required  class="checkbox" value=""> Согласие на обработку персональных данных</p>
						<input type="submit" class="registrationBatton" value="РEГИСТРАЦИЯ">
					</div>
				</div>	
		</div>
</form>

  <header id="header" class="header">
  		<a href="#" class="logo">
  			<img src="img/logo.svg" class="ilogo">
  			<img src="img/menu3.svg" class="imenu">
  			<h1>
  				moviereview
  			</h1>
  		</a>
  		<div>
  			<input type="button" id="popup_r_b" class="button" value="регистрация">
  		<input type="button" id="popup_e_b" class="button" value="вход">
  		</div>

  </header>
  <article id="article">
  <div class="blog_box">
                     
                
	</div>


  	<div class="container">
  		<div class="films">
  			<a href="#" class="posterid">
  			<img src="img/2.jpg" class="poster">
  			<h2>Райя и последний дракон</h2>
	  		</a>
	  		<a href="#" class="posterid">
	  			<img src="img/3.jpg" class="poster">
	  			<h2>Джокер</h2>
	  		</a>
	  		<a href="#" class="posterid">
	  			<img src="img/1.jpg" class="poster">
	  			<h2>Форма голоса</h2>
	  		</a>
	  		<a href="#" class="posterid">
	  			<img src="img/4.jpg" class="poster">
	  			<h2>Менталист</h2>
	  		</a>
	  		<a href="#" class ="posterid">
	  			<img src="img/5.jpg" class="poster">
	  			<h2>Шерлок</h2>
	  		</a>	
  		</div>
  	</div>
  </article>
  <nav id="mainNav">
  	<div class="container">
  		<div class="menu">
  			<h3>Главная</h3>
  			<img src="img/dovn.svg">
  		</div>
  		<div class="menu">
  			<h3>Фильмы</h3>
  			<img src="img/dovn.svg">
  		</div>
  		<div class="menu">
  			<h3>Мультфильмы</h3>
  			<img src="img/dovn.svg">
  		</div>
  		<div class="menu">
  			<h3>Сериалы</h3>
  			<img src="img/dovn.svg">
  		</div>
  		
  		
  		

  	</div>
  </nav>
  <footer id="footer">
  	<div class="container">
  		<p>Администратор сайта:</p>
  		<p>Пустовалова Ирина Павловна</p>
  		<a href="mailto:pustov4lova.irina@yandex.ru" class="mailo">
			pustov4lova.irina@yandex.ru
		<a>
		<div class="contacts">
			<a href="https://vk.com/id269910408">
				<img src="img/vk.svg" class="cont">
			</a>
			<a href="https://www.instagram.com/irishka_0723">
				<img src="img/instagram.svg" class="cont">
			</a>
			<a href="https://t.me/Rina_Code">
				<img src="img/telegram.svg" class="cont">
			</a>
			<a href="mailto:pustov4lova.irina@yandex.ru">
				<img src="img/email.svg" class="cont">
			</a>
		</div>
  	</div>
  </footer>


<script src="js/main.js"></script>
  </div>
  
</body>
