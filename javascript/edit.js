//
// window.onload =function (){
//
//
//   let file =document.getElementById("image");
//     let files =document.getElementById("images");
//     files.addEventListener("change",function(e){
//       let results =event.target.files[0];
//       let reader =new FileReader();
//       reader.onload =function(e){
//     var fileDisplayArea = document.getElementById('fileDisplayArea');
//       fileDisplayArea.innerHTML = ""
//
//     let imgs =new Image();
//     imgs.style.width=`40px`;
//     imgs.style.height=`40px`;
//     imgs.src=reader.result;
//     fileDisplayArea.appendChild(imgs);
//
//
//       }
//         reader.readAsDataURL(results);
//     })
//
//
//
// }
window.onload=function (){
  let fonticons=document.querySelector(".fonticons");
  let icons=document.querySelectorAll(".fonticons")
  icons.forEach(function (e){
    e.addEventListener("click",function(){
      let self =this ;
      return setTimeout(function(){
          self.classList.toggle("rotate");
           let mainparent =self.parentElement.parentElement;
           let height =mainparent.offsetHeight;
           if (!mainparent.classList.contains("expand")){
             mainparent.classList.add("expand");
           }else{
             mainparent.classList.remove("expand");
           }


      }.bind(this),100);
    })

  });



  // let the arrow rotate


let btn=document.querySelector(".btn");
let form=document.querySelector(".form");
btn.addEventListener("click",function(evt){
  evt.preventDefault();
  let file =document.querySelector("#fileimage").files[0];
  let formdata=new FormData(form);
  let xhr= new XMLHttpRequest();
  let url =form.action ;
  xhr.open("POST",url);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange=function(){
    if(xhr.status==200&&xhr.readyState==4){
       let response =JSON.parse(xhr.responseText)
       console.log(response)
    }



  }

xhr.send(formdata)


});



/*
let file =document.querySelectorAll(".input")[1];

file.addEventListener("change",function(){
  let self =this.files[0]
  let imagetype="image/*"
  if(self.type.match(imagetype)){
      let reader =new FileReader();

        reader.onload =function(e){
          let icons =document.querySelector(".icons")
          icons.innerHTML=""
          let image =document.createElement("img");
          image.src=reader.result
          icons.appendChild(image)



        }
          reader.readAsDataURL(self);
  }else{
    console.log("this is the wrong type of file")
  }


});
*/


//
// btn.addEventListener("click",function(event){
//   event.preventDefault();
//   let files="";
//   let fileinput =document.querySelector("#fileimage");
//
//
//     let file = fileinput.files[0];
//
//     // let reader =new FileReader();
//     // reader.onload =function (e){
//     //   let img =new Image();
//     //   img.src=reader.result;
//     //   form.appendChild(img);
//     ///}
//     // reader.readAsDataURL(file);
//   var formdata =  new FormData(document.querySelector(".form"));
//   let data ={
//     id :document.querySelectorAll(".input")[0].value,
//     file:document.querySelector("#fileimage").files,
//     firstname:document.querySelectorAll(".input")[2].value,
//     lastname:document.querySelectorAll(".input")[3].value,
//     email:document.querySelectorAll(".input")[4].value
//   }
//   let Data =`id=${data.id} && file=${data.file} && firstname=${data.firstname}&& lastname=${data.lastname}&&emai=${data.email}`
//
//
//
//
//
//
//
//
//   // set http request
//   let xhp =new XMLHttpRequest();
//   xhp.open("POST","imageloader.php",true);
//   xhp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//   xhp.onreadystatechange =function (){
//     if(xhp.status ==200 && xhp.readyState===4){
//       let firstname=xhp.responseText
//       console.log(firstname)
//
//
//       }
//     }
//
//   xhp.send(Data);
//
//
//
//
//
// });
//


// btn.addEventListener("click",(e)=>{
//   e.preventDefault();
//   let self =this;
//   let counter =1;
//   let text =document.querySelector(".paratext");
//   return setInterval(function(){
//     if(counter < 100){
//       counter++;
//     }
//     text.innerHTML =counter + "%"+ "it is loading...."
//     if(counter ==100){
//       clearInterval();
//
//       text.innerHTML="jjdfdjafd"
//     }
//   }.bind(self),10)
//
// })

}
