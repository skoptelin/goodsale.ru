let SaleBoard = {};
/* addEventListener("DOMContentLoaded", function() {
    app.adsList.draw();
}); */

(function(app) {
    app.adsList = {
        draw: function(activeAds) {
            createContent();
            createAdsList(activeAds);
        }
    }

    async function createAdsList(activeAds) { // Создание списка объявлений полученных с сервера
        try {
            let json = activeAds;
    
            for(let i = 0; i < json.length; i++) {
                let arr = json[i];
    
                createAd(i, arr.picture, arr.phone_num, arr.title, arr.discription, arr.name, arr.price);
            }
    
            let buttons = document.querySelectorAll(".adButton"); // Находим все кнопки объявлений на странице
    
            for(let i = 0; i < buttons.length; i++){ // Навешиваем на каждую кнопку EventListener для для показа номера телефона
                buttons[i].addEventListener('click', showTelNum);
            }
        }
        catch (e) {
            showPopup("Упс, что-то пошло не так! Ошибка: " + e.name.value);
        }
        
    }

    function createAd(i, picture, phone_num, titleValue, discriptionValue, nameValue, price) {
        
        let content       = document.querySelector(".adsList");

        let adBox         = addElement("div", "adBox", i, content);

        let fotoAndTel    = addElement("div", "fotoAndTel", i, adBox);

        let adImg         = addElement("img", "adImg", i, fotoAndTel);
        adImg.src         = picture;

        let adTel         = addElement("div", "adTel", i, fotoAndTel);
        adTel.classList.add("adTelHidden");
        adTel.innerHTML   = phone_num;
     
        let adButton      = createButton("adButton", i, "Показать телефон");
        fotoAndTel.append(adButton);

        let detail        = addElement("div", "detail", i, adBox);
        let adInfo        = addElement("div", "adInfo", i, detail);
        let titleAndDiscr = addElement("div", "titleAndDiscription", i, adInfo);
        let title         = createText("title", i, titleValue);
        titleAndDiscr.append(title);
        let discription   = createText("discription", i, discriptionValue);
        titleAndDiscr.append(discription);

        let adPrice       = addElement("div", "adPrice", i, adInfo);
        let priceValue    = createText("priceValue", i, formattingNum(price));
        adPrice.append(priceValue);
        let currencyValue = "₽";
        let currency      = createText("currency", i, currencyValue);
        adPrice.append(currency);

        let salesmanInfo  = addElement("div", "salesmanInfo", i, detail);
        let salesmanTitle = createText("salesmanTitle", i, "Продавец: ");
        salesmanInfo.append(salesmanTitle);
        let salesmanValue = createText("salesmanValue", i, nameValue);
        salesmanInfo.append(salesmanValue);
    }

    function showPopup(textValue) {
        let content       = document.querySelector(".myAdsList");
        let popupBox      = addElement("div", "popupBoxShow", "", content);
        let popupText     = createText("popupText", "", textValue);
        popupBox.append(popupText);
        let buttonPopupBox = addElement("div", "buttonPopupBox", "", popupBox);
        let buttonOk      = createButton("popupButtonYes", "popupButton", "", "OK", buttonPopupBox);

        buttonOk.addEventListener("click", goToAdsList);
    }

    function showTelNum() {
        let str = `${this.id}`;
        let hiddenButton = document.getElementById(str).classList.add("adButtonHidden");
        let adTel = document.getElementById("adTel" + str.slice(-1));
        adTel.classList.remove("adTelHidden");
        if (adTel.textContent == "") {
            adTel.innerHTML = "№ телефона не указан";
        }
    }

    function formattingNum(numValue) { // Форматирование чисел: добавить пробелы между разрядами до точки или запятой
        numValue = numValue.toString();
        let num = numValue.match(/^(.*?)((?:[,.]\d+)?|)$/);
        if (num) {
            let formattingNum = num[1].replace(/\B(?=(?:\d{3})*$)/g, ' ') + num[2];
            return formattingNum;
        } else {
            return num;
        }
    }

    function createContent(){
        let content = document.createElement("div");
        content.classList.add("adsList", "container");
        document.body.append(content);
    }

    function addElement(elementName, className, i, whereToAdd) {
        let element = document.createElement(elementName);
        element.classList.add(className);
        element.id = className + i;
        whereToAdd.append(element);

        return element;
    }

    function createText(className, i, textValue) {
        let text = document.createElement("div");
        text.classList.add(className);
        text.id = className + i;
        text.append(document.createTextNode(textValue));

        return text;
    }

    function createButton(id, i, text) {
        let button = document.createElement("button");
        button.id = id + i;
        button.classList.add("adButton");
        button.append(document.createTextNode(text));
        return button;
    }

})(SaleBoard);