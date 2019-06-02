

window.addEventListener("load",function(){
  let btn=document.querySelector(".btn");
     let label=document.querySelector(".label")
  let imageloader =document.querySelector("#fileimage")
     let imagereader=document.querySelector(".imageReader")
  function Show(){
    //  ask to check if the element has the class dissappear and return a settimeout

  // get the parent element
  return setTimeout(()=>{
    if (label.classList.contains("disappear")){
     label.classList.remove("disappear")
     label.style.display="block"
     imageloader.classList.add("disappear")
   }

  },400)

  }
  imageloader.addEventListener("change",function(e){
    e.preventDefault();
    let filesent =this.files[0]
    return new Promise(function(resolve,reject){
      if(filesent){
        resolve(filesent)
      }else{
        reject("are you  trying to upload a file !!")
      }

    }).then(function(data){
      let reader =new FileReader();
     // adding an image to the dom
     let image =document.createElement("img")

    let newPara =document.createElement("p")
     let div =document.querySelector(".avatarimage")

     let paragraph =document.querySelector(".changetext")
     let spanicons=document.querySelector(".icons")

     reader .onload =function(){
       div.innerHTML=""
       image.src=reader.result
       label.classList.add("disappear")
       div.appendChild(image)
       // change the text content in the paragraph

       newPara.innerHTML=`<p class="remove">Remove Text</p>`
       imagereader.appendChild(newPara)
       newPara.addEventListener("click",Show)



     }
      reader.readAsDataURL(data);
    }).catch(function(data){
      // print out the errors
      console.log(data)
    })

  })




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
        console.log(response);
      }
    }
    xhr.send(data)

  })

})
