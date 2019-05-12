<?php

$date_today = date("Y-m-d");

$mark = fopen("/var/www/html/marks.txt", "r");

$date = fgets($mark);
$reqESPD_ESKD = fgets($mark);
$article = fgets($mark);
$reference = fgets($mark);
$duration = fgets($mark);
$use_software = fgets($mark);
$use_it = fgets($mark);
$ap = fgets($mark);
$feedback = fgets($mark);
$review = fgets($mark);
$tt_req = fgets($mark);
$structure = fgets($mark);
$actual = fgets($mark);
$safety = fgets($mark);
$performance = fgets($mark);
$conformity = fgets($mark);
$safety_req = fgets($mark);
$complex = fgets($mark);
$advance = fgets($mark);
$safety_mode = fgets($mark);
$answers = fgets($mark);

fclose($mark);


if ($date == $date_today) $time = "своевременно";
else $time = "несвоевременно";
if($tme == "своевременно") $mark1 = 5;
else $mark1 = 2;

if (strlen($reqESPD_ESKD) == strlen("в полном соответствии")+1) $mark2 = 5;
if (strlen($reqESPD_ESKD) == strlen("с незначительными отклонениями")+1) $mark2 = 4;
if (strlen($reqESPD_ESKD) == strlen("с отклонениями")+1) $mark2 = 3;
if (strlen($reqESPD_ESKD) == strlen("с серьезными отклонениями")+1) $mark2 = 1;

if ($article = "Да") $mark3 = 5;
else $mark3 = 2;

if (strlen($reference) == strlen("не менее 10 ссылок на журнальные статьи за последние 5 лет по тематике проектирвоания")+1) $mark4 = 5;
if (strlen($reference) == strlen("от 5 до 9 ссылок на журнальные статьи за последние 5 лет по тематике проектирвоания")+1) $mark4 = 3;
if (strlen($reference) == strlen("менее 5 ссылок на журнальные статьи за последние 5 лет по тематике проектирвоания")+1) $mark4 = 2;

if (strlen($duration) == strlen("соответствует регламенту (до 10 минут)")+1) $mark5 = 5;
if (strlen($duration) == strlen("от 5 до 9 ссылок на журнальные статьи за последние 5 лет по тематике проектирвоания")+1) $mark5 = 3;
if (strlen($duration) == strlen("не соответствует регламенту (более 10 минут)")+1) $mark5 = 2;

if (strlen($use_software) == strlen("показано")+1) $mark6 = 5;
if (strlen($use_software) == strlen("не показано")+1) $mark6 = 2;

if (strlen($use_it) == strlen("применяются")+1) $mark7 = 5;
if (strlen($use_it) == strlen("круг применяемых информационных технологий весьма ограничен")+1) $mark7 = 2;

if (strlen($ap) == strlen("Оригинальный текст представляет более 50 % материала ВКР")+1) $mark8 = 5;
if (strlen($ap) == strlen("Оригинальный текст представляет менее 50% материала ВКР")+1) $mark8 = 2;

if (strlen($feedback) == strlen("не содержит критических замечаний")+1) $mark9 = 5;
if (strlen($feedback) == strlen("содержит существенные замечания")+1) $mark9 = 3;
if (strlen($feedback) == strlen("содержит существенные замечания, аргументированно доказывающие невыполнение требований технического задания или требований образовательного стандарта")+1) $mark9 = 2;

if (strlen($review) == strlen("не содержит критических замечаний")+1) $mark10 = 5;
if (strlen($review) == strlen("содержит существенные замечания")+1) $mark10 = 3;
if (strlen($review) == strlen("содержит существенные замечания, аргументированно доказывающие невыполнение требований технического задания или требований образовательного стандарта")+1) $mark10 = 2;

if (strlen($tt_req) == strlen("отвечает")+1) $mark11 = 5;
if (strlen($tt_req) == strlen("отвечает не в полной мере")+1) $mark11 = 3;
if (strlen($tt_req) == strlen("не отвечает")+1) $mark11 = 2;

if (strlen($structure) == strlen("структурировано")+1) $mark12 = 5;
if (strlen($structure) == strlen("не всегда структурировано")+1) $mark12 = 3;
if (strlen($structure) == strlen("не структурировано")+1) $mark12 = 2;

if (strlen($actual) == strlen("полностью раскрыты")+1) $mark13 = 5;
if (strlen($actual) == strlen("допускаются неточности, которые устраняются в ходе дополнительных уточняющихся вопросов")+1) $mark13 = 4;
if (strlen($actual) == strlen("допускаются ошибки, которые с трудом устраняются в ходе дополнительных уточняющихся вопросов")+1) $mark13 = 3;
if (strlen($actual) == strlen("допускаются грубые ошибки, которые с трудом устраняются в ходе дополнительных уточняющихся вопросов")+1) $mark13 = 2;

if (strlen($safety) == strlen("применяются")+1) $mark14 = 5;
if (strlen($safety) == strlen("обоснованы не в полной мере")+1) $mark14 = 3;
if (strlen($safety) == strlen("не обоснованы")+1) $mark14 = 2;

if (strlen($performance) == strlen("приведено")+1) $mark15 = 5;
if (strlen($performance) == strlen("доказано не в полной мере")+1) $mark15 = 3;
if (strlen($performance) == strlen("не доказано")+1) $mark15 = 2;

if (strlen($conformity) == strlen("доказано")+1) $mark16 = 5;
if (strlen($conformity) == strlen("доказано не в полной мере")+1) $mark16 = 3;
if (strlen($conformity) == strlen("не доказано")+1) $mark16 = 2;

if (strlen($safety_req) == strlen("сформулированы")+1) $mark17 = 5;
if (strlen($safety_req) == strlen("сформулированы не в полной мере")+1) $mark17 = 3;
if (strlen($safety_req) == strlen("не сформулированы")+1) $mark17 = 2;

if (strlen($complex) == strlen("сформулированы")+1) $mark18 = 5;
if (strlen($complex) == strlen("сформулированы не в полной мере")+1) $mark18 = 3;
if (strlen($complex) == strlen("не сформулированы")+1) $mark18 = 2;

if (strlen($advance) == strlen("доказаны")+1) $mark19 = 5;
if (strlen($advance) == strlen("доказаны не в полной мере")+1) $mark19 = 3;
if (strlen($advance) == strlen("не доказаны")+1) $mark19 = 2;

if (strlen($safety_mode) == strlen("доказаны")+1) $mark20 = 5;
if (strlen($safety_mode) == strlen("доказаны не в полной мере")+1) $mark20 = 3;
if (strlen($safety_mode) == strlen("не доказаны")+1) $mark20 = 2;

if (strlen($answers) == strlen("логичны, раскрывают сущность вопроса, подкрепляются выводами и расчётами из выпускной квалификационной работы, показывают самостоятельность и глубину изучения проблемы студентом")+1) $mark21 = 5;
if (strlen($answers) == strlen("не всегда корректны, но в целом логичны, раскрывают сущность вопроса, подкрепляются выводами и расчётами из выпускной квалификационной работы, показывают самостоятельность и глубину изучения проблемы студентом")+1) $mark21 = 4;
if (strlen($answers) == strlen("неуверенные, слабо раскрывают сущность вопроса, не подкрепляются выводами и расчётами из выпускной квалификационной работы, показывают недостаточную самостоятельность и глубину изучения проблемы студентом")+1) $mark21 = 3;
if (strlen($answers) == strlen("ошибочны, не раскрывают сущность проблемы, не подкрепляются выводами и расчётами из выпускной квалификационной работы, показывают отсутствие самостоятельности и глубины изучения проблемы студентом. В процессе защиты выпускной квалификационной работы студент демонстрирует непонимание содержания ошибок, допущенных им при её выполнении")+1) $mark21 = 2;

$mark_average = ($mark1+$mark2+$mark3+$mark4+$mark5+$mark6+$mark7+$mark8+$mark9+$mark10+$mark11+$mark12+$mark13+$mark14+$mark15+$mark16+$mark17+$mark18+$mark19+$mark20+$mark21)/21;

if (($mark_average<=5) && ($mark_average>=4.65)) { $mark = 5; $mark_word = "отлично";}
if (($mark_average<=4.64) && ($mark_average>=3.65)) { $mark = 4; $mark_word = "хорошо";}
if (($mark_average<=3.64) && ($mark_average>=2.65)) { $mark = 3; $mark_word = "удовлетворительно";}
if ($mark_average<=2.64) { $mark = 2; $mark_word = "неудовлетворительно";}

$output = "
<html>
<meta charset = 'utf-8'>
<body>

<table border='1'>

<tr>
<td><b>Критерий оценивания</b></td>
<td><b>Показатель</b></td>
<td><b>Оценка</b></td>
</tr>

<tr>
<td>ВКР представлена</td>
<td>$time</td>
<td>$mark1</td>
</tr>

<tr>
<td>Оформление ВКР в соответствии с требованиями ЕСКД и/или ЕСПД</td>
<td>$reqESPD_ESKD</td>
<td>$mark2</td>
</tr>

<tr>
<td>Список источников, использованных при проектировании, превышает 30 наименований</td>
<td>$article</td>
<td>$mark3</td>
</tr>

<tr>
<td>В работе используются</td>
<td>$reference</td>
<td>$mark4</td>
</tr>

<tr>
<td>В работе используются</td>
<td>$duration</td>
<td>$mark5</td>
</tr>

<tr>
<td>Умение применять современные программные комплексы для автоматизированного проектирования и/или моделирования проектируемых/исследуемых программно-аппаратных средств</td>
<td>$use_software</td>
<td>$mark6</td>
</tr>

<tr>
<td>Применение информационных технологий как в самой выпускной квалификационной работе, так и во время выступления</td>
<td>$use_it</td>
<td>$mark7</td>
</tr>

<tr>
<td>Результат проверки системой Антиплагиат по количеству заимствований</td>
<td>$ap</td>
<td>$mark8</td>
</tr>

<tr>
<td>Отзыв руководителя</td>
<td>$feedback</td>
<td>$mark9</td>
</tr>

<tr>
<td>Рецензия</td>
<td>$review</td>
<td>$mark10</td>
</tr>

<tr>
<td>ВКР отвечает предъявляемым требованиям технического задания</td>
<td>$tt_req</td>
<td>$mark11</td>
</tr>

<tr>
<td>Структурированность выступления</td>
<td>$structure</td>
<td>$mark12</td>
</tr>

<tr>
<td>Раскрытие актуальности темы и основных результатов работы</td>
<td>$actual</td>
<td>$mark13</td>
</tr>

<tr>
<td>Обоснование организационные и технические подходы для информационной безопасности в проектируемой системе, сети или аппаратуре</td>
<td>$safety</td>
<td>$mark14</td>
</tr>

<tr>
<td>Доказательство работоспособности представленных решений на основе компьютерного моделирования или экспериментальных исследований действующего макета программно-аппаратных средств телекоммуникационной системы, обеспечивающих безопасность передаваемой информации</td>
<td>$performance</td>
<td>$mark15</td>
</tr>

<tr>
<td>Соответствие предлагаемых средств защиты информации в телекоммуникационной системе требованиям по безопасности информации</td>
<td>$conformity</td>
<td>$mark16</td>
</tr>

<tr>
<td>Требования по защите информации</td>
<td>$safety_req</td>
<td>$mark17</td>
</tr>

<tr>
<td>Предложения по вопросам комплексного обеспечения информационной безопасности телекоммуникационных систем</td>
<td>$complex</td>
<td>$mark18</td>
</tr>

<tr>
<td>Предложения по совершенствованию и повышению эффективности комплекса мер по обеспечению информационной безопасности телекоммуникационной системы</td>
<td>$advance</td>
<td>$mark19</td>
</tr>

<tr>
<td>Предложения по выполнению требований режима защиты информации ограниченного доступа</td>
<td>$safety_mode</td>
<td>$mark20</td>
</tr>

<tr>
<td>Ответы на вопросы членов ГЭК</td>
<td>$answers</td>
<td>$mark21</td>
</tr>

<tr>
<td><b>Рекомендуемая оценка</b></td>
<td><b>$mark</b></td>
<td><b>$mark_word</b></td>
</tr>

</table>

</body></html>";

echo $output;

$report = fopen("/var/www/html/report.html", "a");
$output_1 = "<b>Рекомендуемая оценка $mark ($mark_word)</b></body></html>";
if (fwrite($report,$output_1))
echo "Запись произведена успешно<br>";
else
echo "Произошла ошибка при записи данных<br>";
fclose($report);

echo "<a href=\"main.html\">Вернуться на главную</a>";

?>
