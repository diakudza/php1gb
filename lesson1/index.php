<?php 
$title=$_GET['title']??'Главная';
var_dump((int)0 === (int)'22');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?= $title ?></title>
</head>
<body>
	<div id="content">
		<h1><?= $title ?></h1>
		
		<ul id="menu">
			<li><a href="index.php?title=Главная">home</a></li>
			<li><a href="index.php?title=Архив">archive</a></li>
			<li><a href="index.php?title=Контакты">contact</a></li>
		</ul>
	
		<div class="post">
			<div class="details">
				<h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>
			
			</div>
			<div class="body">
				<p>5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.</p>
				<code>
					$a+=$b; a = 1+2 = 3<br>
					$b=$a-$b; // b = 3-2 = 1<br>
					$a-=$b;<br>

				</code>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3><a href="#">3. Объяснить, как работает данный код:</a></h3>
				<p><br>
			<code>
				$a = 5;<br>
				$b = '05';<br>
				var_dump($a == $b);  //приводит $b к целому 5 , по-этому тру   <br>
				var_dump((int)'012345');   //при приведении к целому 0 отбрасывается<br>
				var_dump((float)123.0 === (int)123.0); //Строгое сравнение, разные типы данных<br>
				var_dump((int)0 === (int)'hello, world'); // Если в строке первый символ не цифра, то приведение ее к int дает 0 <br>
			<code></p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
			<p>&not; <a href="#">read more</a></p>
		</div>
		
		<div id="footer">
		      <p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>
		<footer>&copy Дьяков М.А. <?= date('Y') ?> г.</footer>	
	</div>
	
</body>
</html>