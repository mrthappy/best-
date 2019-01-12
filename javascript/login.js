$(document).ready(function(){
let form =$("#register");
form.submit(function(event){
  event.preventDefault();
$.ajax({
  url:"process.php",
  method:"post",
  data:form.serialize()

}).done(function(res){
  console.log(res);
});
});

});
