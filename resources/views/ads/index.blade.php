<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Список объявлений</title>
        <!-- Scripts -->
        @vite(['resources/js/app.js'])

    </head>
    <body>
        <x-app-layout>
            <!--AdsList--> 
            <div class="adsList">
                @foreach ($activeAds as $activeAd)
                    <div data-id="{{ $activeAd->id }}" class="adBox" id="adBox">

                        <div class="fotoAndTel" id="fotoAndTel">
                            <img class="adImg" id="adImg" src="{{ Vite::asset('storage/app/images/' . $activeAd->picture) }}">
                            <div class="adTel adTelHidden" id="adTel">{{ $activeAd->phone_num }}</div>
                            <button onclick="index.showTelNum(event)" id="adButton" class="adButton">Показать телефон</button>
                        </div>  

                        <div class="detail" id="detail">

                            <div class="adInfo" id="adInfo">
                                <div class="titleAndDiscription" id="titleAndDiscription">
                                    <div class="title" id="title">{{ $activeAd->title }}</div>
                                    <div class="discription" id="discription">{{ $activeAd->description }}</div>
                                </div>
                                
                                <div class="adPrice" id="adPrice">
                                    <div class="priceValue" id="priceValue">{{ number_format($activeAd->price, 0, ',', ' ') }}</div>
                                    <div class="currency" id="currency">₽</div>
                                </div>
                            </div>

                            <div class="salesmanInfo" id="salesmanInfo">
                                <div class="salesmanNameBlock">
                                    <div class="salesmanTitle" id="salesmanTitle">Продавец: </div>
                                    <div class="salesmanValue" id="salesmanValue">{{ $activeAd->name }}</div>
                                </div>
                                <div class="salesmanCityBlock">
                                    <div class="salesmanCity" id="salesmanCity">Местоположение:</div>
                                    <div class="salesmanCityValue" id="salesmanCityValue">{{ $activeAd->city }}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </x-app-layout>
    </body>
</html>


