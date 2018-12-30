"use strict "

const key= "8483dfe11241e9b2d754a4211648e4ca";
let weatherapi="https://api.openweathermap.org/data/2.5/weather?q=London,uk";
fetch(weatherapi + "&appid=" + key).then(function(response){
  return response.json();
}).then(function(data){
  console.log(data.weather[0].id);
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

  let btn =$(".connect");
  console.log(btn);
  btn.click(function(){
    Weather();
  })

})
