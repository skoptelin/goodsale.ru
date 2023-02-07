export default {

    showPopupDelete(id, event) {
        let button          = event.target;
        let adBox           = button.closest(".adBox");
        let popupBox        = document.querySelector(".popupBoxShow");
        popupBox.dataset.id = id;
        let text            = "Вы действительно хотите удалить объявление " + adBox.querySelector(".title").textContent + "?";
        let popupText       = document.querySelector(".popupText");
        popupText.innerHTML = text;
        let popupForm       = document.querySelector("#popupForm");
        popupForm.action    = "/my_ads/" + id;
        
        popupBox.classList.remove('hidden');
    },

    hidePopupDelete() {
        let popupBox = document.querySelector(".popupBoxShow");
        popupBox.classList.add('hidden');
    }
}
