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
  // let the arrow rotate
  fonticons.addEventListener("click",function(e){
    let self =this;
    return setTimeout(function(){
     self.classList.toggle("rotate");

  }.bind(this),100);

  });


}
