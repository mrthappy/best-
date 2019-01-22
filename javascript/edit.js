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



  console.log(icons);
  // let the arrow rotate


let btn=document.querySelector(".btn");
btn.addEventListener("click",(e)=>{
  e.preventDefault();
})

}
