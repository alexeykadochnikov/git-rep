<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 50);
		var tryCount = 0;
		var maxTryCount = 10;

		function readInt1(){
			return +document.getElementById("userAnswer1").value;
		}
		function readInt2(){
			return +document.getElementById("userAnswer2").value;
		}

		function write1(text1){
			document.getElementById("info1").innerHTML = text1;		
		}
		function write2(text2){
			document.getElementById("info2").innerHTML = text2;
		}		

		function guess(inputId){
			tryCount++;

			var userAnswer1 = readInt1();
			var userAnswer2 = readInt2();
			if(tryCount >= maxTryCount){
				write1("Вы проиграли<br>Правильный ответ: " + answer);
			} if(userAnswer1 == answer){
				write1("<b>Поздравляю, вы угадали!</b>");
			} if(userAnswer1 > answer){
				write1("Загаданное число меньше, чем ваше<br>Попробуйте еще раз. Введите число от 0 до 50");
			} if(userAnswer1 < answer){
				write1("Загаданное число больше, чем ваше<br>Попробуйте еще раз. Введите число от 0 до 50");
			} if(userAnswer2 == answer){
				write2("<b>Поздравляю, вы угадали!</b>");
			} if(userAnswer2 > answer){
				write2("Загаданное число меньше, чем ваше<br>Попробуйте еще раз. Введите число от 0 до 50");
			} if(userAnswer2 < answer){
				write2("Загаданное число больше, чем ваше<br>Попробуйте еще раз. Введите число от 0 до 50");
			}
		}

	</script>
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">

				<p id="info1">Игрок 1<br>Угадайте число от 0 до 50</p>
				<input type="text1" id="userAnswer1">
				<p id="info2">Игрок 2<br>Угадайте число от 0 до 50</p>
				<input type="text2" id="userAnswer2">
				<br>
				<a href="#" onClick="guess();" id="button">Начать</a>				
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