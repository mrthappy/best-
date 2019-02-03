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

form.addEventListener("submit",function(event){
  event.preventDefault();
  let fileinput =document.querySelector("#fileimage");

    let file = fileinput.files[0];
    console.log(file)
    // let reader =new FileReader();
    // reader.onload =function (e){
    //   let img =new Image();
    //   img.src=reader.result;
    //   form.appendChild(img);
    // }
    // reader.readAsDataURL(file);


  let formdata =new FormData(this);
  fetch("imageloader.php",{

    method:"POST",
    body:formdata
  }).then((data)=>data.text()).then((response)=>{
    console.log(response);
  })





});

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
