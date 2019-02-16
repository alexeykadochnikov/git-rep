<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">
		
		var symbol=["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a", "b", "c", "d", "e", "f", "g", "h", "i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];

		function readInt(){			
			return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function gnpass(){
			var userAnswer=readInt();
			var pass="";
			var letters=["1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "a", "b", "c", "d", "e", "f", "g", "h", "i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
			for(i=0;i<userAnswer;i++){
				var n=Math.round(Math.random()*letters.length-1);
				pass=pass+letters[n];
			}
			write(pass);			
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

			<h1>Генератор паролей</h1>

			<div class="box">

				<p id="info">Введите предпочитаемое кол-во символов</p>
				<input type="number" id="userAnswer">
				<br>
				<a href="#" onClick="gnpass();" id="button">Сгенерировать</a>				
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