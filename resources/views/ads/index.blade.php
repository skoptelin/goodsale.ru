<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список объявлений</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
    <script>
        addEventListener("DOMContentLoaded", function() {
            let buttons = document.querySelectorAll(".adButton");
            
            for(let i = 0; i < buttons.length; i++){
                buttons[i].addEventListener('click', function(e) {
                    let id = e.target.id;
                    showTelNum(id);
                });
            };
        });
        function showTelNum(id) {
            console.log(id);
            let hiddenButton = document.getElementById(id).classList.add("adButtonHidden");
            let adTel = document.getElementById("adTel" + id.slice(-1));
            adTel.classList.remove("adTelHidden");
            if (adTel.textContent == "") {
            adTel.innerHTML = "№ телефона не указан";
            }
        }
    </script>
</head>
<body>
    <x-app-layout>
        <div class="adsList">
            @for ($i = 0; $i < count($activeAds); $i++)
                <div class="adBox" id={{"adBox" . $i }} >

                    <div class="fotoAndTel" id={{"fotoAndTel" . $i}}>
                        <img class="adImg" id={{"adImg" . $i}} src="{{ Vite::asset('storage/app/images/' . $activeAds[$i]->picture) }}">
                        <div class="adTel adTelHidden" id={{"adTel" . $i}}>{{ $activeAds[$i]->phone_num }}</div>
                        <button onclick="" id={{"adButton" . $i}} class="adButton">Показать телефон</button>
                    </div>  

                    <div class="detail" id={{"detail" . $i}}>
                        <div class="id" id={{"id" . $i}}>{{ $activeAds[$i]->id }}</div>
                        <div class="adInfo" id={{"adInfo" . $i}}>
                            <div class="titleAndDiscription" id={{"titleAndDiscription" . $i}}>
                                <div class="title" id={{"title" . $i}}>{{ $activeAds[$i]->title }}</div>
                                <div class="discription" id={{"discription" . $i}}>{{ $activeAds[$i]->description }}</div>
                            </div>
                            
                            <div class="adPrice" id={{"adPrice" . $i}}>
                                <div class="priceValue" id={{"priceValue" . $i}}>{{ number_format($activeAds[$i]->price, 0, ',', ' ') }}</div>
                                <div class="currency" id={{"currency" . $i}}>₽</div>
                            </div>
                        </div>
                        <div class="salesmanInfo" id={{"salesmanInfo" . $i}}>
                            <div class="salesmanTitle" id={{"salesmanTitle" . $i}}>Продавец: </div>
                            <div class="salesmanValue" id={{"salesmanValue" . $i}}>{{ $activeAds[$i]->name }}</div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </x-app-layout>
</body>
</html>


