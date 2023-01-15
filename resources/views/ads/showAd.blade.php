<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Название: {{ $activeAd->title }}</div>
    <div>Описание: {{ $activeAd->description }}</div>
    <div>Цена: {{ $activeAd->price }}</div>
    <div>Город: {{ $activeAd->city }}</div>
</body>
</html>


