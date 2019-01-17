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
  let messagediv=document.querySelectorAll(".errors");
  let textarea =document.querySelector(".area");
  textarea.classList.remove("error");
  for(let j=0;j <messagediv.length;j++){
    messagediv[j].remove();
  }
  let inputtags= document.querySelectorAll(".inputtag");
  for(let i =0;i <inputtags.length;i++){
    if(inputtags[i].value!=""){
      inputtags[i].value="";

    }else if(inputtags[i].classList.contains("error")){
      inputtags[i].classList.remove("error");

    }

  }
  let connection = document.querySelector(".connection");
  connection.classList.remove("appear");
  service =true;
  }

  let btn =$(".connect");
  $(".inputtag").val("");
  $(".area").val("");


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

let $contactbtn =$(".contactform");

function clearErrors(){
  $(".inputtag.error").removeClass("error");
  $('.area.error').removeClass("error");
  $('p.errors').remove();
}

$contactbtn.submit(function(e){
  e.preventDefault();
  clearErrors();
  let $action=$contactbtn.attr("action");
  let $method=$contactbtn.attr("method");
  let FormData = $contactbtn.serialize();
  $.ajax({
    url:$action,
    method:$method,
    data:FormData

  }).then(function(data){
      let response =data;
      if(response.hasOwnProperty("fail")){
       $.each(response.fail,function(index,value){
        let paragraph = `<p class="errors">${value}</p>`;
        $('input[name="'+index+'"]').addClass("error").before(paragraph);
        

       })
     }else{

              $messagediv =$(".messagediv");
              $messagediv.fadeIn(500).html(response.success);

                            $(".inputtag").val("");
                            $(".area").val("");
                            setTimeout(function(){
                              $messagediv.fadeOut(500);

                            },1000);






     }


  });
})

  let anchors =$(".anchors");

anchors.each(function (index){
  setTimeout(function(){
    anchors.eq(index).addClass("translate")
  },50*(index+20));
})


});
