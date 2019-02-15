

window.addEventListener("load",function(){
  let btn=document.querySelector(".btn");
  let form=document.querySelector(".form");
  let action =form.getAttribute("action");
  let method=form.getAttribute("method");
  btn.addEventListener("click",function(event){
    event.preventDefault();
    let file=document.querySelector("#fileimage").files[0]
    let xhr =new XMLHttpRequest();
    let data =new FormData(form)
    xhr.open(method,action,true);
    xhr.onreadystatechange=function(){
      if(xhr.status==200 && xhr.readyState==4){
        let response=JSON.parse(xhr.responseText)
        console.log(response)
      }
    }
    xhr.send(data)

  })



});
