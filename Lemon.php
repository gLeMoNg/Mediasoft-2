<?php
$array = [
    'Красный'=> 1,
    'Синий'=> 2,
    'Фиолетовый'=> 3,
    'Желтый'=> 4,
    'Зеленый' => 5,
    'Розовый' => 6,
    'Серый' => 7,
    'Черный' => 8,
    'Сиреневый' => 9,
    'Голубой' => 10,
    'Изумрудный' => 11,
    'Коричневый' => 12,
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php foreach($array as $key => $value) {
    echo ($key) . " ";
    echo ($value) . PHP_EOL;
}
?>
</body>
</html>
