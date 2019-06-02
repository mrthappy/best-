session_start();
?>
<! DOCTYPE HTML>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>uploaded page</title>
  <link rel ="stylesheet" href="../stylesheet/edit.css">

  <style>
  *{
    margin:0;
    padding:0;
    -webkit-box-sizing:border-box;
    -ms-box-sizing:border-box:
    box-sizing:border-box;
  }
  span{
    display:block;


    height:auto;
  }
  p{text-align:justify;}
  img{
    max-width:100%;
    display:block;
  }
  .uploaded-image{
    width:500px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    opacity:0;
    transition:opacity .75s ease-in-out;

  }
  .uploaded-cover {
    width:30px;
    height:30px;



  }

  .secondlabel{
  position:relative;
  top:50px;



  }
  label{
    width:100%;
    display:block;
    cursor:pointer;

  }
  .disappear{
    opacity:1;
  }
  p{
    flex:2;
    color:lightgreen;
    margin-left:2rem;
  }
  .remove {
  pointer-events: inherit;
  cursor:pointer;
  }
  </style>
</head>
<body>

<form method="POST" enctype="multipart/form-data">
  <input type ="hidden" name="id"  class="input">
  <div class="labelinput">
    <span class="uploaded-image">
      <span class="uploaded-cover">

    </span>
      <p class="remove">Remove Image</p>

    </span>
  <label for="fileimage" class="label">
    <!-- replace the pseudo with a img element -->


    <span class="icons"></span>
    <span class="paratext"><p>Enter your Upload:</p></span>

  </label>
  <input type="file" id="fileimage" class="input" name="fileimage">
</div>
<div class="inputholder inputdiv">
 <input type ="text" class="input" placeholder="firstname" name="firstname">
 <input type="text" class="input" placeholder="lastname" name="lastname">
</div>
<div class="inputholder inputdiv">
  <input type="email" class="input" placeholder="email-address" name="email" >
</div>

<div class="inputsubmit">
  <button  class="btn" name="submit">submit</button>
</div>
</form>
<p class="style"></p>
<input type="text"class="love">



<script>
window.addEventListener("load",function(){

  let counter  =50;
 let id =setInterval(function(){
     let docu =document.querySelector(".style")
  if (counter < 100){
    counter++ ;

    docu.innerHTML=` loading in  ${counter}%`
  }else if (counter ==100){
    clearInterval(id)
    docu.innerHTML="it has been completed"
  }
 return counter;
},50);
  let forms =document.querySelector(".forms")
  let fileimage =document.querySelector("#fileimage")
  //  get the file image and return a promise
  fileimage.addEventListener("change",ImageLoader)


});
function ImageLoader(event){
  //  get the set filepath of the intended image
  let filePath = this.files[0];
  //  check if there is a none pathe
    return new Promise(function(resolve,reject){
      return resolve(filePath)
    }).then(function(data){
      // display the image information on the website
      Timer(data)

    }).catch(function(err){
      console.log("we could not uploaded any image at the moment ")
    })


    function Timer (data){
      return setTimeout(function(){
      // get  the element on the dom
      let span =document.querySelector(".uploaded-image")
      let spanChild = document.querySelector(".uploaded-cover")
      let label=document.querySelector(".label");
      // call the fileobject
      // montoneyah Afican Accessories
      let filereader = new FileReader();
      // get the whole ajax stuff here
      filereader.onload=function (){
        // create an image here
        let image = new Image();
        // set an src for the image already created
        image.src = filereader.result
        spanChild.innerHTML=""
        spanChild.appendChild(image);
        span.classList.toggle("disappear")
        label.style.display="none"
        let re =document.querySelector(".remove");
        re.addEventListener("click",function(event){
          event.preventDefault();
        // get the parent element
        let self = this ;
        let parentElt = this.parentElement;
       if (parentElt.classList.contains("disappear")){
         parentElt.classList.remove("disappear")
         label.style.display="block"
       }
        },true)
      }
      filereader.readAsDataURL(data)
    },750)
    }

}

</script>


</html>
