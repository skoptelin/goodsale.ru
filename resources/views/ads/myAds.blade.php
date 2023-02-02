<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список моих объявлений</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <x-app-layout>
        <div class="adsList">
            <form action="my_ads/create" class="addButton" id="addButton">
                <input type="submit" id="addButton" class="myAdButton" value="Добавить">
            </form>
            @for ($i = 0; $i < count($myAds); $i++)
                <div class="adBox" id={{"adBox" . $i }} >

                    <div class="fotoAndTel" id={{"fotoAndTel" . $i}}>
                        <img class="myAdImg" id={{"adImg" . $i}} src="{{ Vite::asset('storage/app/images/' . $myAds[$i]->picture) }}">
                    </div>  

                    <div class="detail" id={{"detail" . $i}}>
                        <div class="id" id={{"id" . $i}}>{{ $myAds[$i]->id }}</div>
                        <div class="adInfo" id={{"adInfo" . $i}}>
                            <div class="titleAndDiscription" id={{"titleAndDiscription" . $i}}>
                                <div class="title" id={{"title" . $i}}>{{ $myAds[$i]->title }}</div>
                                <div class="discription" id={{"discription" . $i}}>{{ $myAds[$i]->description }}</div>
                            </div>

                            <div class="adPrice" id={{"adPrice" . $i}}>
                                <div class="priceValue" id={{"priceValue" . $i}}>{{ number_format($myAds[$i]->price, 0, ',', ' ') }}</div>
                                <div class="currency" id={{"currency" . $i}}>₽</div>
                            </div>
                        </div>
                        
                        <div class="buttons" id={{ "buttons" . $i }}>
                            <button id={{ "buttonChange" . $i }} class="buttonChange">Изменить</button>
                            <button id={{ "buttonDelete" . $i }} class="buttonDelete">Удалить</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </x-app-layout>
</body>
</html>


