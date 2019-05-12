<?php

if(isset($_POST['1']) && isset($_POST['2']) &&
isset($_POST['3']) && isset($_POST['4']) && isset($_POST['5'])
&& isset($_POST['6']) && isset($_POST['7']) && isset($_POST['8'])
&& isset($_POST['9']) && isset($_POST['10']) && isset($_POST['11'])
&& isset($_POST['12']) && isset($_POST['13']))
{
$feedback = htmlentities($_POST['1']);
$review = htmlentities($_POST['2']);
$ttreq = htmlentities($_POST['3']);
$structure = htmlentities($_POST['4']);
$actual = htmlentities($_POST['5']);
$safety = htmlentities($_POST['6']);
$performance = htmlentities($_POST['7']);
$conformity = htmlentities($_POST['8']);
$req = htmlentities($_POST['9']);
$complex = htmlentities($_POST['10']);
$advantage = htmlentities($_POST['11']);
$answers = htmlentities($_POST['12']);
$mode = htmlentities($_POST['13']);

$output = "
<html>
<meta charset='utf-8'>
<body>
<H1>Отчет о защите ВКР</H1>
Отзыв руководителя $feedback
<br>
Рецензия $review
<br>
ВКР $ttreq предъявляемым требованиям технического задания
<br>
Выступление $structure
<br>
Раскрытие актуальности темы и основных результатов работы: $actual
<br>
Обоснование организационные и технические подходы для информационной безопасности в проектируемой системе, сети или аппаратуре: $safety
<br>
Доказательство работоспособности представленных решений на основе компьютерного моделирования или экспериментальных исследований действующего макета программно-аппаратных средств телекоммуникационной системы, обеспечивающих безопасность передаваемой информации: $performance
<br>
Соответствие предлагаемых средств защиты информации в телекоммуникационной системе требованиям по безопасности информаци: $conformity
<br>
Требования по защите информации $req
<br>
Предложения по вопросам комплексного обеспечения информационной безопасности телекоммуникационных систем: $complex
<br>
Предложения по совершенствованию и повышению эффективности комплекса мер по обеспечению информационной безопасности телекоммуникационной системы: $advantage
<br>
Предложения по выполнению требований режима защиты информации ограниченного доступа: $mode
<br>
Ответы на вопросы членов ГЭК $answers
<br><br></body></html>";
echo $output;

$output = "
Отзыв руководителя $feedback
<br>
Рецензия $review
<br>
ВКР $ttreq предъявляемым требованиям технического задания
<br>
Выступление $structure
<br>
Раскрытие актуальности темы и основных результатов работы: $actual
<br>
Обоснование организационные и технические подходы для информационной безопасности в проектируемой системе, сети или аппаратуре: $safety
<br>
Доказательство работоспособности представленных решений на основе компьютерного моделирования или экспериментальных исследований действующего макета программно-аппаратных средств телекоммуникационной системы, обеспечивающих безопасность передаваемой информации: $performance
<br>
Соответствие предлагаемых средств защиты информации в телекоммуникационной системе требованиям по безопасности информаци: $conformity
<br>
Требования по защите информации $req
<br>
Предложения по вопросам комплексного обеспечения информационной безопасности телекоммуникационных систем: $complex
<br>
Предложения по совершенствованию и повышению эффективности комплекса мер по обеспечению информационной безопасности телекоммуникационной системы: $advantage
<br>
Предложения по выполнению требований режима защиты информации ограниченного доступа: $mode
<br>
Ответы на вопросы членов ГЭК $answers
<br><br>";

$report = fopen("/var/www/html/report.html", "a");

if (fwrite($report,$output))
echo "Запись произведена успешно<br>";
else
echo "Произошла ошибка при записи данных<br>";
fclose($report);


$mark = fopen("/var/www/html/marks.txt", "a");
fwrite($mark,$feedback.PHP_EOL);
fwrite($mark,$review.PHP_EOL);
fwrite($mark,$ttreq.PHP_EOL);
fwrite($mark,$structure.PHP_EOL);
fwrite($mark,$actual.PHP_EOL);
fwrite($mark,$safety.PHP_EOL);
fwrite($mark,$performance.PHP_EOL);
fwrite($mark,$conformity.PHP_EOL);
fwrite($mark,$req.PHP_EOL);
fwrite($mark,$complex.PHP_EOL);
fwrite($mark,$advantage.PHP_EOL);
fwrite($mark,$mode.PHP_EOL);
fwrite($mark,$answers.PHP_EOL);

fclose($mark);

echo "<a href=\"main.html\">Вернуться на главную</a>";
}
else
{
echo "Введенные данные некорректны";
}
?>
