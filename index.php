<?php
error_reporting(-1);
ini_set('display_errors',1);
header('Content-Type: text/html; charset=utf-8');
$page = (isset($_GET['page']) ? $_GET['page'] : 'main');
?>
<html>
<head>
<link href="../css/style.css"rel="stylesheet">
<title>Наш первый сайт</title>
<style>
body {
		background: #000 url(https://catherineasquithgallery.com/uploads/posts/2023-01/1674258981_catherineasquithgallery-com-p-serii-fon-s-tenyu-foto-77.png);
		color: #fff; /*Цвет текста на странице*/
		background-attachment: fixed; /* Фон страницы фиксируется */
		background-repeat: repeat-x; /* Изображение повторяется по горизонтали */
	}
  </style>
</head>
<body>
<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
<p id='head1' class='header'>Framework </p>
<p id='head2' class='header'>специализируется на креативном направлении,</p>
<p id='head3' class='header'>рекламе и стратегии,</p>
<p id='head4' class='header'>умело используя эти возможности в интегрированных</p>
<p id='head5' class='header'>кампаниях и целостном описании бренда.</p>

<form action="http://php/page/about.php"><button>To learn more</button></form>
  <div class='light x1'></div>
  <div class='light x2'></div>
  <div class='light x3'></div>
  <div class='light x4'></div>
  <div class='light x5'></div>
  <div class='light x6'></div>
  <div class='light x7'></div>
  <div class='light x8'></div>
  <div class='light x9'></div>
  <style>
    
  </style>
<header>
<?php
require ("blocks/header.php")
?>
</header>


<footer>
<?php
  require ("blocks/footer.php")
  ?>
</footer>
</body>
</html>