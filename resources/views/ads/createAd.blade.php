<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создать объявление</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <x-app-layout>
        <form action="/my_ads" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <div class="inputList" id="inputList">

                    <div class="titleAd">
                        <div class="titleAdText">Название:</div>
                        <input name="title" id="titleAd" class="titleAdInput"/>
                    </div>

                    <div class="descriptionAd">
                        <div class="descriptionAdText">Описание:</div>
                        <textarea name="description" id="descriptionAd" class="descriptionAdInput"></textarea>
                    </div>

                    <div class="priceAd">
                        <div class="priceAdText">Цена:</div>
                        <input name="price" type="number" id="priceAd" class="priceAdInput"/>
                    </div>

                    <div class="priceAd">
                        <div class="priceAdText">Местоположение:</div>
                        <input name="city" id="priceAd" class="priceAdInput"/>
                    </div>

                </div>
                        <div class="uploadBox" id="uploadBox">
                            <div class="imgUploadBox" id="imgUploadBox">
                                <img class="hideImgCreateAd" id="hideImgCreateAd"/>
                                <label class="inputUploadLabel" id="inputUploadLabel" for="inputUpload">Загрузить фото</label>
                                <input name="picture" id="inputUpload" class="inputUpload" type="file"/>
                            </div>
                            
                            <input type="submit" id="buttonSave" class="buttonSave" value="Создать объявление"/>
                        </div>
            </div>
        </form>
    </x-app-layout>
</body>
</html>


