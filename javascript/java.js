"use strict "

const key= "8483dfe11241e9b2d754a4211648e4ca";
let weatherapi="https://api.openweathermap.org/data/2.5/weather?q=London,uk";
fetch(weatherapi + "&appid=" + key).then(function(response){
  return response.json();
}).then(function(data){
});
function Weather(){
  $.ajax({
    method:"GET",
    url: weatherapi + "&appid=" + key,
    data:"json"
  }).done(function(data){
    console.log(data.weather[0].description);
  })
}


$(document).ready(function(){
  let closebtn=document.querySelector(".close");
  closebtn.addEventListener("click",CloseMenu);
  function CloseMenu(){
    let service =false;
  let connection = document.querySelector(".connection");
  connection.classList.remove("appear");
  service =true;
  }

  let btn =$(".connect");


  btn.click(function(event){

    let contactform=$(".connection");
    contactform.delay(500).addClass("appear");

    return false;

  })
  let hamburger=$("#hamburger");
  hamburger.click(function(){
  let self=$(this);
  self.toggleClass("active");
});

const contactbtn =$(".inputtags");
contactbtn.click(function(){
  console.log("this is the btn");
})

});
