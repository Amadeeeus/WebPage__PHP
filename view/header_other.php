<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="../styles/favicon.ico">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/buttons.css">
    <link rel="stylesheet" href="../styles/login.css">
    <link rel="stylesheet" href="../styles/card.css">
    <link rel="stylesheet" href="../styles/profile_bar.css">
    <link rel="stylesheet" href="../styles/submenu.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <script>
	function selectText(containerid) {
		if (document.selection) { // IE
			var range = document.body.createTextRange();
			range.moveToElementText(document.getElementById(containerid));
			range.select();
		} else if (window.getSelection) {
			var range = document.createRange();
			range.selectNode(document.getElementById(containerid));
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(range);
		}
	}
</script>
<script>
   function CopyToClipboard(containerid) {
  if (document.selection) {
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select().createTextRange();
    document.execCommand("copy");
  } else if (window.getSelection) {
    var range = document.createRange();
    range.selectNode(document.getElementById(containerid));
    window.getSelection().addRange(range);
    document.execCommand("copy");
    alert("Скопировано")
  }
} 
    </script>
    
<script>
	function selectText(containerid) {
		if (document.selection) { // IE
			var range = document.body.createTextRange();
			range.moveToElementText(document.getElementById(containerid));
			range.select();
		} else if (window.getSelection) {
			var range = document.createRange();
			range.selectNode(document.getElementById(containerid));
			window.getSelection().removeAllRanges();
			window.getSelection().addRange(range);
		}
	}
</script>
</head>
<body><!-- Menu1.php -->
    <div class="all"><div class="cont">
    <ul class="hr"><li class="listyle"><a class="text" href="../Index.html">Главная</a></li>
    <li class="listyle"><a class="text" href="../scripts/Projects.php">Проекты</a></li>
    <li class="listyle"><a class="text" href="../scripts/learn.php">Уроки</a></li>
</ul>
</div>
<?php include "../scripts/var_login_other.php" ?>
</div>