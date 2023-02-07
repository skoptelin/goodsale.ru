<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Список моих объявлений</title>
        <!-- Scripts -->
        @vite(['resources/js/app.js', 'resources/sass/app.scss'])

    </head>
    <body>
        <x-app-layout>

            <!--MyAdsList--> 
            <div class="adsList">
                <form action="my_ads/create" class="addButton" id="addButton">
                    <button type="submit" id="addButton" class="myAdButton">Добавить</button>
                </form>

                @foreach ($myAds as $myAd)
                    <div data-ad-id="{{ $myAd->id }}" class="adBox" id="adBox">

                        <div class="fotoAndTel" id="fotoAndTel">
                            <img class="myAdImg" id="adImg" src="{{ Vite::asset('storage/app/images/' . $myAd->picture) }}">
                        </div>  

                        <div class="detail" id="detail">
                            <div class="adInfo" id="adInfo">
                                <div class="titleAndDiscription" id="titleAndDiscription">
                                    <div class="title" id="title">{{ $myAd->title }}</div>
                                    <div class="description" id="description">{{ $myAd->description }}</div>
                                </div>

                                <div class="adPrice" id="adPrice">
                                    <div class="priceValue" id="priceValue">{{ number_format($myAd->price, 0, ',', ' ') }}</div>
                                    <div class="currency" id="currency">₽</div>
                                </div>
                            </div>

                            <div class="salesmanInfo" id="salesmanInfo">
                                <div class="salesmanCityBlock">
                                    <div class="salesmanCity" id="salesmanCity">Местоположение:</div>
                                    <div class="salesmanCityValue" id="salesmanCityValue">{{ $myAd->city }}</div>
                                </div>
                            </div>
                            
                            <div class="buttons" id="buttons">
                                <form method="get" id="formChange" action="/my_ads/{{ $myAd->id }}/edit">
                                    @csrf
                                    <button id="buttonChange" class="buttonChange">Изменить</button>
                                </form>
                                <button onclick="myAds.showPopupDelete({{ $myAd->id }}, event)" id="buttonDelete" class="buttonDelete">Удалить</button>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!--Popup-->    
                <div class="popupBoxShow hidden" id="popupBoxShow">
                    <div class="popupText" id="popupText"></div>
                    <div class="buttonPopupBox" id="buttonPopupBox">
                        <form method="post" id="popupForm" name="popupForm" action="">
                            @method('delete')
                            @csrf
                            <button type="submit" id="popupButtonYes" class="popupButtonYes">Да</button>
                        </form>
                        <button onclick="myAds.hidePopupDelete()" id="popupButtonNo" class="popupButtonNo">Нет</button>
                    </div>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>


