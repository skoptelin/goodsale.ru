<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Изменить объявление</title>
        <!-- Scripts -->
        @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    </head>
    <body>
        <x-app-layout>
            <div class="titleText">Изменение объявления</div>
            <form action="/my_ads/{{ $ad->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div>
                    <div class="inputList" id="inputList">

                        <div class="titleAd">
                            <div class="titleAdText">Название:</div>
                            <input name="title" id="titleAd" class="titleAdInput" required value="{{ $ad->title }}"/>
                        </div>

                        <div class="descriptionAd">
                            <div class="descriptionAdText">Описание:</div>
                            <textarea name="description" id="descriptionAd" class="descriptionAdInput" required>{{ $ad->description }}</textarea>
                        </div>

                        <div class="priceAd">
                            <div class="priceAdText">Цена:</div>
                            <input name="price" type="number" id="priceAd" class="priceAdInput" required value="{{ $ad->price }}"/>
                        </div>

                        <div class="priceAd">
                            <div class="priceAdText">Местоположение:</div>
                            <input name="city" id="priceAd" class="priceAdInput" required value="{{ $ad->city }}"/>
                        </div>

                    </div>
                            <div class="uploadBox" id="uploadBox">
                                <div class="imgUploadBox" id="imgUploadBox">
                                    <img class="showAdImg" id="AdImg" src="{{ Vite::asset('storage/app/images/' . $ad->picture) }}"/>
                                    <label class="inputUploadLabel" id="inputUploadLabel" for="inputUpload">Загрузить фото</label>
                                    <input onchange="createAd.previewFile()" name="picture" id="inputUpload" class="inputUpload" type="file"/>
                                </div>
                                
                                <button type="submit" id="buttonSave" class="buttonSave">Изменить объявление</button>
                            </div>
                </div>
            </form>
        </x-app-layout>
    </body>
</html>


