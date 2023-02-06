export default {

    showTelNum(event) {
        let button       = event.target;
        let hiddenButton = button.classList.add("adButtonHidden");
        let adBox        = button.closest(".adBox");
        let telNum       = adBox.querySelector(".adTel");
        telNum.classList.remove("adTelHidden");
        
        if (telNum.textContent == "") {
        telNum.innerHTML = "№ телефона не указан";
        }
    }
}