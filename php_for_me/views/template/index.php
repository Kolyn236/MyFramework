<!DOCTYPE HTML>
<html>

<head>

    <meta charset="utf-8">      
   <!--<script src="<?= JS_PATH ?>my.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>

    </script>
</head>

<body>

<div>Пользователи:</div>
<div id="alert">
    <span class="span" style="background: blue">Кнопка</span>
    <input value="Нажми на меня!" id="elem" type="button">
</div>
<ul>
    <li>Маша</li>
    <li>Вовочка</li>
</ul>
<script>
    elem.onclick = function () {
        alert("Нажми на меня ещё раз сука!")
    }
    var pool = document.getElementsByClassName("span");

</script>
<!-- комментарий -->


</body>

</html>