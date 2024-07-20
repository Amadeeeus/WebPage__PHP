
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./styles/favicon.ico">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/buttons.css">
    <script>
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
<body>
        <div class="all">
        <nav class="cont">
    <ul class="hr"><li><a class="text" href="">Главная</a></li>
    <li><a class="text" href="./Projects.html">Проекты</a></li>
    <li><a class="text" href="./learn.html">Уроки</a></li></ul>
</nav>
        </div>
        <div class="main">
<div class="bottom">
    Здесь должен быть мой календарь и часы, может еще что то вроде колонки обновлений сайта, но будет реализовано позже, сейчас другие задачи в приоритете
</div>
<div class="page">
        <div class="cont1">
            <a class="text2" href="./index.html">Главая</a>
            <a class="text2" href="">></a>
            <a class="text2" href="./scripts/calc.php">Калькулятор</a>
        </div>
        <div class="cont2">
           Урок ??
</div>
        <div class="textformat">
            Краткая теория урока
</div>
<div class="textformat1">Исходный код</div>
<div class="code1" id="div-elemento-65fdc1c5971bc">
<br>
<div class="code2">
<div id="textCopy" class="widg-output-html" style="max-height: 300px; overflow: auto;"><pre class="code4" style="display: block; overflow-x: auto; padding: 0.5em;; color: rgb(68, 68, 68);"><span class="code4"> <span class="code4">&lt;<span class="code4" style="font-weight: 700;">form</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"form1"</span> <span class="code4">action</span>=<span class="code4" style="color: rgb(136, 0, 0);">"../scripts/calc.php"</span> <span class="code4">method</span>=<span class="code4" style="color: rgb(136, 0, 0);">"POST"</span>&gt;</span>
        <span class="code4"><span class="code4" style="color: rgb(31, 113, 153);">&lt;?php</span> 
         $fst=  $_POST[<span class="code4" style="color: rgb(136, 0, 0);">'stroka1'</span>];
         $sec=  $_POST[<span class="code4" style="color: rgb(136, 0, 0);">'stroka2'</span>];
         $signs = $_POST[<span class="code4" style="color: rgb(136, 0, 0);">'signs'</span>];<span class="code4" style="color: rgb(31, 113, 153);">?&gt;</span></span>
        <span class="code4">&lt;<span class="code4" style="font-weight: 700;">input</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"pole"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"number"</span> <span class="code4">id</span>=<span class="code4" style="color: rgb(136, 0, 0);">"1 "</span><span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"stroka1"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"&lt;?php echo "</span>$<span class="code4">fst</span>"?&gt;</span>" required&gt;
        <span class="code4">&lt;<span class="code4" style="font-weight: 700;">select</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"signs"</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">option</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"plus"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"+"</span>&gt;</span>+<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">option</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">option</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"minus"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"-"</span>&gt;</span>-<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">option</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">option</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"multiply"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"*"</span>&gt;</span>*<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">option</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">option</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"divide"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"/"</span>&gt;</span>/<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">option</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">option</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"timesof"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"^"</span>&gt;</span>^<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">option</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">option</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"proc"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"%"</span>&gt;</span>%<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">option</span>&gt;</span>
            <span class="code4">&lt;/<span class="code4" style="font-weight: 700;">select</span>&gt;</span>
        <span class="code4">&lt;<span class="code4" style="font-weight: 700;">input</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"pole"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"number"</span> <span class="code4">id</span>=<span class="code4" style="color: rgb(136, 0, 0);">"2 "</span><span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"stroka2"</span>  <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"&lt;?php echo "</span>$<span class="code4">sec</span>"?&gt;</span>" required&gt;
        <span class="code4">&lt;<span class="code4" style="font-weight: 700;">input</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"submit"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"="</span>&gt;</span>
        <span class="code4">&lt;/<span class="code4" style="font-weight: 700;">form</span>&gt;</span>
        
        <span class="code4"><span class="code4" style="color: rgb(31, 113, 153);">&lt;?php</span>
<span class="code4" style="font-weight: 700;">switch</span>($signs)
{
    <span class="code4" style="font-weight: 700;">case</span> (<span class="code4" style="color: rgb(136, 0, 0);">"+"</span>): $res=$fst + $sec; <span class="code4" style="font-weight: 700;">break</span>; 
    <span class="code4" style="font-weight: 700;">case</span> (<span class="code4" style="color: rgb(136, 0, 0);">"-"</span>): $res=$fst - $sec; <span class="code4" style="font-weight: 700;">break</span>;
    <span class="code4" style="font-weight: 700;">case</span> (<span class="code4" style="color: rgb(136, 0, 0);">"*"</span>): $res=$fst * $sec; <span class="code4" style="font-weight: 700;">break</span>;
    <span class="code4" style="font-weight: 700;">case</span> (<span class="code4" style="color: rgb(136, 0, 0);">"/"</span>): $res=$fst / $sec; <span class="code4" style="font-weight: 700;">break</span>;
    <span class="code4" style="font-weight: 700;">case</span> (<span class="code4" style="color: rgb(136, 0, 0);">"^"</span>): $res=$fst **$sec; <span class="code4" style="font-weight: 700;">break</span>;
    <span class="code4" style="font-weight: 700;">case</span> (<span class="code4" style="color: rgb(136, 0, 0);">"%"</span>): $res=$fst % $sec; <span class="code4" style="font-weight: 700;">break</span>;
    <span class="code4" style="font-weight: 700;">default</span>: <span class="code4" style="color: rgb(136, 0, 0);">0</span>; <span class="code4" style="font-weight: 700;">break</span>;
}
<span class="code4" style="color: rgb(31, 113, 153);">?&gt;</span></span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">input</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"pole1"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"text"</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"result"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"&lt;?php echo "</span>Результат= <span class="code4" style="color: rgb(136, 0, 0);">$res</span>"?&gt;</span>"&gt;</span></pre></div>
<div class="output-html-botones">
<button class="knopkijs" onclick="selectText('textCopy')">Select all</button>
<button class="knopkijs" onclick="CopyToClipboard('textCopy')">Copy all</button>
</div>
</div> </div>
<div class="program">
     Результат:
    
        </div>
</div></div>
</body>
</html>