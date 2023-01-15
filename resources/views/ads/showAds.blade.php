<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список объявлений</title>
    <link rel="stylesheet" href="/css/style.css">
    <!-- <script src="/public/js/adsList.js"></script> -->
    <script>
        addEventListener("DOMContentLoaded", function() {
            console.log([$activeAds]);
            /* app.adsList.draw({$activeAds}); */
        });
    </script>
</head> 
<body>
    <div class="header">
        <div class="headerText">
            GoodSale.ru
        </div>
        <div class="mobileNav" id="mobileNav">
            <div class="burger" id="burger">
                <button class="burgerButton">
                    <div class="burgerLine">
                    </div>
                    <div class="burgerLine">
                    </div>
                    <div class="burgerLine">
                    </div>
                </button>
            </div>
            <nav class="navList showNavList" id="navList">
                <a class="navItemSelected" id="navItemAllAds">Лента</a>
                <a class="navItem" id="navItemMyAds">Мои объявления</a>
                <a class="navItem" id="navItemExit">Выход</a>
            </nav>
        </div>
    </div>

    {{$activeAds}}
</body>
</html>
