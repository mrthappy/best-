$(document).ready(function(){
let form =$("#register");
form.submit(function(event){
  event.preventDefault();
  Reset();
$.ajax({
  url:"process.php",
  method:"post",
  data:form.serialize()

}).done(function(res){
console.log(res);

});







});

function Reset (){
  // reset inputtags ;
   let inputTags =document.querySelectorAll(".input");
    let array=[].slice.call(inputTags);
    for(let i=0; i<array.length;i++){
      array[i].classList.remove("errors");
    }
}

});
