<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Создать объявление</title>
        <!-- Scripts -->
        @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    </head>
    <body>
        <x-app-layout>
            <div class="titleText">Создание объявления</div>
            <form action="/my_ads" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="inputList" id="inputList">

                        <div class="titleAd">
                            <div class="titleAdText">Название:</div>
                            <input name="title" id="titleAd" class="titleAdInput" required maxlength="200"/>
                        </div>

                        <div class="descriptionAd">
                            <div class="descriptionAdText">Описание:</div>
                            <textarea name="description" id="descriptionAd" class="descriptionAdInput" required maxlength="550"></textarea>
                        </div>

                        <div class="priceAd">
                            <div class="priceAdText">Цена:</div>
                            <input name="price" type="number" id="priceAd" class="priceAdInput" required maxlength="200"/>
                        </div>

                        <div class="cityAd">
                            <div class="cityAdText">Местоположение:</div>
                            <input name="city" id="cityAd" class="cityAdInput" required maxlength="200"/>
                        </div>

                    </div>
                            <div class="uploadBox" id="uploadBox">
                                <div class="imgUploadBox" id="imgUploadBox">
                                    <img class="hideAdImg" id="AdImg"/>
                                    <label class="inputUploadLabel" id="inputUploadLabel" for="inputUpload">Загрузить фото</label>
                                    <input onchange="createAd.previewFile()" name="picture" id="inputUpload" class="inputUpload" type="file" required/>
                                </div>
                                
                                <input type="submit" id="buttonSave" class="buttonSave" value="Создать объявление"/>
                            </div>
                </div>
            </form>
        </x-app-layout>
    </body>
</html>


