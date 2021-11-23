<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<?php
		error_reporting(E_ALL);
		ini_set('display_errors', 'on');
		mb_internal_encoding('UTF-8');

		echo 'Калькулятор прибыли по вкладам';
		?>
		<link rel="stylesheet" href="stule.css">
		<link rel="jsscripts" href="script.js">
	</head>
	<body>
		<div class="revenue">
   		<div class="revenue-deposit">
        <input placeholder="Введите размер вклада">
   		</div>
    	<div class="revenue-tariff"></div>
   		<div class="revenue-result"></div>
		</div>
        <?php
        $error_result = error_reporting();
        $sum= script.js.sum();
        ?>
        <?php
          if($error_result==null) {
              echo "<div class='answer-text'> Общий ввклад: $sum</div>";
          else {
                  echo "<div class='error-text'>Ошибка: $error_result</div>";
              }
          }
        ?>
    </body>
</html>

/* Простие, но у данного php кода нет сервера, я так и не смогла разобратся как подключить его к локальному серверу
Больше времени из времени на выполнения задания ушло на изучение материалов по php и повторение Html, css и JS
Я знаю, то что вы видите не совсем то чего вы ожидали увидеть, но у меня слишком мало опыта даже в вёрстке,
Да и было это больше года назад и то на самом начальном уровне с которым ознакомил преподаватель
на дистанционном обучении, на Figma я тоже зашла, изучила редактор,
но воплатить в жизнь то что я там накурулесила в жизнь,
не получилось из за того что я многое забыла из темы "стилизация на CSS" */