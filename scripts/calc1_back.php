
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="./styles/favicon.ico">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/buttons.css">
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
<body>
    <?php echo $res?>
        <div class="all">
        <nav class="cont">
    <ul class="hr"><li><a class="text" href="../Index.html">Главная</a></li>
    <li><a class="text" href="../Projects.html">Проекты</a></li>
    <li><a class="text" href="../learn.html">Уроки</a></li></ul>
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
            Калькулятор на PHP+JS
</div>
        <div class="textformat">
            <?php
            $textdesc = file_get_contents('../zametka1.txt');
            echo $textdesc;
            ?>
</div>
<div class="textformat1">Исходный код</div>
<div class="code1" id="div-elemento-65fdc1c5971bc">
<br>
<div class="code2">
<div id="textCopy" class="widg-output-html" style="max-height: 300px; overflow: auto;"><pre class="code3" style="display: block; overflow-x: auto; padding: 0.5em; "><span class="code4"><span class="code4">&lt;<span class="code4" style="font-weight: 700;">script</span>&gt;</span><span class="code4"><span class="code4"><span class="code4" style="font-weight: 700;">function</span> <span class="code4" style="color: rgb(136, 0, 0); font-weight: 700;">addTextToInput</span>(<span class="code4">anElement</span>)
</span>{
 <span class="code4" style="font-weight: 700;">var</span> text = <span class="code4" style="color: rgb(57, 115, 0);">document</span>.getElementById(<span class="code4" style="color: rgb(136, 0, 0);">'result'</span>).value;
 text+= anElement.innerText;
 <span class="code4" style="color: rgb(57, 115, 0);">document</span>.getElementById(<span class="code4" style="color: rgb(136, 0, 0);">'result'</span>).value = text;
}
<span class="code4"><span class="code4" style="font-weight: 700;">function</span> <span class="code4" style="color: rgb(136, 0, 0); font-weight: 700;">clr</span>(<span class="code4"></span>)
</span>{
    <span class="code4" style="color: rgb(57, 115, 0);">document</span>.getElementById(<span class="code4" style="color: rgb(136, 0, 0);">"result"</span>).value = <span class="code4" style="color: rgb(136, 0, 0);">""</span>
}
</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">script</span>&gt;</span>
     <span class="code4"><span class="code4" style="color: rgb(31, 113, 153);">&lt;?php</span>
       $fst = $_POST[<span class="code4" style="color: rgb(136, 0, 0);">'stroka'</span>];
        <span class="code4" style="font-weight: 700;">if</span>(preg_match(<span class="code4" style="color: rgb(136, 0, 0);">'/(\d{0,})(?:\s*)(\w{1,4}|\*|\%|\^|\+|\-|\\|%%|√)(?:\s*)(\d+)/'</span>, $fst, $matches) !== <span class="code4" style="font-weight: 700;">FALSE</span>){
            $operator = $matches[<span class="code4" style="color: rgb(136, 0, 0);">2</span>];
            <span class="code4" style="font-weight: 700;">switch</span>($operator){
                <span class="code4" style="font-weight: 700;">case</span><span class="code4" style="color: rgb(136, 0, 0);">"+"</span>:
                    $res =$matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] + $matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>;
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"-"</span>:
                    $res = $matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] - $matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>;
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"*"</span>:
                    $res = $matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] * $matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>;
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"/"</span>:
                    $res =$matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] / $matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>;
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"^"</span>:
                    $res =$matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] ** $matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>;   
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"%"</span>:
                    $res =$matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] % $matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>;    
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"/"</span>:
                    $res =$matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] / $matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>; 
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"√"</span>:
                    <span class="code4" style="font-weight: 700;">if</span>($matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>] == <span class="code4" style="color: rgb(136, 0, 0);">0</span>)
                    {
                        $matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>]=<span class="code4" style="color: rgb(136, 0, 0);">1</span>;
                    }
                    $res = $matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>]*(sqrt($matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>]));
                    <span class="code4" style="font-weight: 700;">break</span>;
                <span class="code4" style="font-weight: 700;">case</span> <span class="code4" style="color: rgb(136, 0, 0);">"perc"</span>:
                    $res =($matches[<span class="code4" style="color: rgb(136, 0, 0);">1</span>]/<span class="code4" style="color: rgb(136, 0, 0);">100</span>)*$matches[<span class="code4" style="color: rgb(136, 0, 0);">3</span>];
                    <span class="code4" style="font-weight: 700;">break</span>;
                    }
            }
<span class="code4" style="color: rgb(31, 113, 153);">?&gt;</span></span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">form</span>  <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc"</span> <span class="code4">action</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc.php"</span> <span class="code4">method</span>=<span class="code4" style="color: rgb(136, 0, 0);">"POST"</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">table</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
        <span class="code4">&lt;<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span> <span class="code4">colspan</span>=<span class="code4" style="color: rgb(136, 0, 0);">"3"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">input</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"result"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"text"</span> <span class="code4">name</span>=<span class="code4" style="color: rgb(136, 0, 0);">"stroka"</span> <span class="code4">id</span>=<span class="code4" style="color: rgb(136, 0, 0);">"result"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"&lt;?php echo $res?&gt;"</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"c"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"clr()"</span>&gt;</span>C<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
        <span class="code4">&lt;/<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"1"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>1<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"2"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>2<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"3"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>3<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
            <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"/"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>/<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"4"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>4<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"5"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>5<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"6"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>6<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"*"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>*<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">tr</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"7"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>7<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"8"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>8<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"9"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>9<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
    <span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"-"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>-<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">tr</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"0"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>0<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"."</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>.<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">input</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"submit"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"="</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"+"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>+<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">tr</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">tr</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"**"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>^<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"%"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>%<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"√"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>&amp;radic;<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;<span class="code4" style="font-weight: 700;">td</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"calc1"</span>&gt;</span><span class="code4">&lt;<span class="code4" style="font-weight: 700;">button</span> <span class="code4">class</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">type</span>=<span class="code4" style="color: rgb(136, 0, 0);">"button"</span> <span class="code4">value</span>=<span class="code4" style="color: rgb(136, 0, 0);">"%%"</span> <span class="code4">onclick</span>=<span class="code4" style="color: rgb(136, 0, 0);">"addTextToInput(this)"</span>&gt;</span>perc<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">button</span>&gt;</span><span class="code4">&lt;/<span class="code4" style="font-weight: 700;">td</span>&gt;</span>
<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">tr</span>&gt;</span>
<span class="code4">&lt;/<span class="code4" style="font-weight: 700;">form</span>&gt;</span></span></pre></div>
<div class="output-html-botones">
<button class="knopkijs" onclick="selectText('textCopy')">Select all</button>
<button class="knopkijs" onclick="CopyToClipboard('textCopy')">Copy all</button>
</div>
</div> </div>
<script>function addTextToInput(anElement)
{
 var text = document.getElementById('result').value;
 text+= anElement.innerText;
 document.getElementById('result').value = text;
}
function clr()
{
    document.getElementById("result").value = ""
}

</script>
     <?php
       $fst = $_POST['stroka'];
        if(preg_match('/(\d{0,})(?:\s*)(\w{1,4}|\*|\%|\^|\+|\-|\\|%%|√)(?:\s*)(\d+)/', $fst, $matches) !== FALSE){
            $operator = $matches[2];
            switch($operator){
                case"+":
                    $res =$matches[1] + $matches[3];
                    break;
                case "-":
                    $res = $matches[1] - $matches[3];
                    break;
                case "*":
                    $res = $matches[1] * $matches[3];
                    break;
                case "/":
                    $res =$matches[1] / $matches[3];
                    break;
                case "^":
                    $res =$matches[1] ** $matches[3];
                    break;   
                case "%":
                    $res =$matches[1] % $matches[3];
                    break;    
                case "/":
                    $res =$matches[1] / $matches[3];
                    break; 
                case "√":
                    if($matches[1] == 0)
                    {
                        $matches[1]=1;
                    }
                    $res = $matches[1]*(sqrt($matches[3]));
                    break;
                case "perc":
                    $res =($matches[1]/100)*$matches[3];
                    break;
                    }
            }
?>
    <form  class="calc" action="calc1_back.php" method="POST">
    <table class="calc1">
        <tr class="calc1">
            <td class="calc1" colspan="3"><input class="result" type="text" name="stroka" id="result" value="<?php echo $res?>"></td>
            <td class="calc1"><button class="button" type="button" value="c" onclick="clr()">C</td>
        </tr class="calc1">
            <tr class="calc1">
            <td class="calc1"><button class="button" type="button" value="1" onclick="addTextToInput(this)">1</button></td>
            <td class="calc1"><button class="button" type="button" value="2" onclick="addTextToInput(this)">2</button></td>
            <td class="calc1"><button class="button" type="button" value="3" onclick="addTextToInput(this)">3</button></td>
            <td class="calc1"><button class="button" type="button" value="/" onclick="addTextToInput(this)">/</button></td>
</tr class="calc1">
<tr class="calc1">
    <td class="calc1"><button class="button" type="button" value="4" onclick="addTextToInput(this)">4</button></td>
    <td class="calc1"><button class="button" type="button" value="5" onclick="addTextToInput(this)">5</button></td>
    <td class="calc1"><button class="button" type="button" value="6" onclick="addTextToInput(this)">6</button></td>
    <td class="calc1"><button class="button" type="button" value="*" onclick="addTextToInput(this)">*</button></td>
</tr>
<tr class="calc1">
    <td class="calc1"><button class="button" type="button" value="7" onclick="addTextToInput(this)">7</button></td>
    <td class="calc1"><button class="button" type="button" value="8" onclick="addTextToInput(this)">8</button></td>
    <td class="calc1"><button class="button" type="button" value="9" onclick="addTextToInput(this)">9</button></td>
    <td class="calc1"><button class="button" type="button" value="-" onclick="addTextToInput(this)">-</button></td>
</tr>
<tr class="calc1">
<td class="calc1"><button class="button" type="button" value="0" onclick="addTextToInput(this)">0</button></td>
<td class="calc1"><button class="button" type="button" value="." onclick="addTextToInput(this)">.</button></td>
<td class="calc1"><input class="button" type="submit" value="="></td>
<td class="calc1"><button class="button" type="button" value="+" onclick="addTextToInput(this)">+</button></td>
</tr>
<tr class="calc1">
<td class="calc1"><button class="button" type="button" value="**" onclick="addTextToInput(this)">^</button></td>
<td class="calc1"><button class="button" type="button" value="%" onclick="addTextToInput(this)">%</button></td>
<td class="calc1"><button class="button" type="button" value="√" onclick="addTextToInput(this)">&radic;</button></td>
<td class="calc1"><button class="button" type="button" value="%%" onclick="addTextToInput(this)">perc</button></td>
</tr>
</form>
        </div>
</div>
</body>
</html>