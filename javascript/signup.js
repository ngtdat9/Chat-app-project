const form = document.querySelector(".signup form"),
  continueBtn = form.querySelector(".button input"), alertErr = NULL;

form.onsubmit = (e) => {
  e.preventDefaut();
};

continueBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/signup.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE){
      let data = xhr.response;
      if(data == "success"){

      }else{
        alert(data);
      }
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}
