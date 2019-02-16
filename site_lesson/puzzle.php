<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	

	
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

			<?php
				if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){

					$userAnswer=$_GET["userAnswer1"];
					$score=0;
					if($userAnswer== "ёлка" || $userAnswer == "ель" || $userAnswer == "ёлочка"){
						$score++;
					}

					$userAnswer=$_GET["userAnswer2"];
					if($userAnswer== "шахматы" || $userAnswer == "в шахматах"){
						$score++;
					}

					$userAnswer=$_GET["userAnswer3"];
					if($userAnswer=="человек"){
						$score++;
					}

					echo "Вы угадали ". $score . " загадок"
				}
			?>

				<form method="GET">
					<p>Зимой и летом одним цветом.</p>
					<input type="text" name="userAnswer1">

					<p>Где встречается такое, что конь через коня перепрыгивает? </p>
					<input type="text" name="userAnswer2">

					<p>Кто утром ходит на четырех ногах, днем — на двух, а вечером — на трех?</p>
					<input type="text" name="userAnswer3">

					<br>
					<input type="submit" value="Ответить" name="">
				</form>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Maksim Klementyev
<div>


</body>
</html>