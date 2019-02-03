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
  if(res.hasOwnProperty("error")){
       console.log(res);
   $.each(res.error,function(index,value){
    let paragraph = `<p class="errors">${value}</p>`;
    $('input[name="'+index+'"]').addClass("error").after(paragraph);


   })

 }else if(res.hasOwnProperty("user")) {
         clearvalues();



         $(location).attr('href', 'welcome.php?id='+res.user["memberid"]);




 }


});




});

 function clearvalues(){
   let inputtags=$(".input");
   $.each(inputtags,function(index,value){
      $(this).val("");
   });
 }

 function Reset(){
let inputtags=$(".input");
let Array = [].slice.call(inputtags);
$.each( Array,function(index,value){
  let parent =$(this).parent();
  $(this).next().remove();
  if(parent.children().hasClass("error")){
    parent.children().removeClass("error");
  }



});

 }



});
