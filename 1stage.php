<?php

$date_today = date("Y-m-d");

if(isset($_POST['name']) && isset($_POST['group']) &&
isset($_POST['date']) && isset($_POST['memorandum']))
{
$name = htmlentities($_POST['name']);
$group = htmlentities($_POST['group']);
$date = htmlentities($_POST['date']);
$memorandum = htmlentities($_POST['memorandum']);

$conference = "Нет";

$publication = "Нет";

$invention = "Нет";

$NIOKR = "Нет";

$software = "Нет";

$output = "
<html>
<meta charset='utf-8'>
<body>
<H1>Отчет о защите ВКР</H1>
Дата формирования отчета: $date_today
<br>
ФИО студента: $name
<br>
Группа: $group
<br>
Дата защиты ВКР: $date
<br>
Выступление с докладом на региональной, межвузовской, российской или международной конференциях: $conference
<br>
Публикация тезисов научной статьи или докладов на региональной, межвузовской, российской или международной конференциях: $publication
<br>
Подача заявки на предполагаемое изобретение: $invention
<br>
Участие в написании отчёта о НИОКР: $NIOKR
<br>
Свидетельство об официальной регистрации программы для ЭВМ по моделированию, расчёту, вычислительному эксперименту: $software<br><br>";
echo $output;

$mark = fopen("/var/www/html/marks.txt", "w");

$report = fopen("/var/www/html/report.html", "w");

if (fwrite($report,$output) && fwrite($mark,$date.PHP_EOL))
echo "Запись произведена успешно<br>";
else
echo "Произошла ошибка при записи данных<br>";
fclose($report);
fclose($mark);

echo "<a href=\"main.html\">Вернуться на главную</a>";
}
else
{
echo "Введенные данные некорректны";
}
?>
