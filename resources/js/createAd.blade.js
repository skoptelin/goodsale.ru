export default {

    previewFile() {
        let preview = document.querySelector('img');
        let file    = document.querySelector('input[type=file]').files[0];
        let reader  = new FileReader();
      
        reader.onloadend = function () {
          preview.src = reader.result;
        }
      
        if (file) {
          reader.readAsDataURL(file);
          preview.classList.remove("hideAdImg");
          preview.classList.add("showAdImg");
        } else {
          preview.src = "";
        }
    }
}