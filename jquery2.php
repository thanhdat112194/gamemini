<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'>
  </script>
  <style>
     .main{
        
          position:relative;
          border:1px solid;
          width:55%;
          height:300px;
      }
   
       .main>img{
           position:absolute;   
           width:200px;
           height:300px;
          opacity:0;
       }
       button{
           background:white;
       } 
  </style>


</head>
<body>
<button class="next" >next</button>
<button class="back" >back</button>

<div class="main">
    <img src="https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80.jpg" alt="">
    <img src="https://i.pinimg.com/originals/b6/64/03/b664035b028104d82707d1d787bb5da2.jpg" alt="">
    <img src="https://images.unsplash.com/photo-1494905998402-395d579af36f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjEyMDd9" alt="">
    <img src="https://www.bentleygoldcoast.com/galleria_images/7081/7081_p24_l.jpg" alt="">

</div>

    <script>
     
      var img = $(".main>img");
    var imgindex = 0;// why do you call that
    img[imgindex].style.opacity = 1;
      $(".next").on("click",function(){
        imgindex++;
       removeimg();//remove all   
      
        if(imgindex>=img.length-1){// i th
            imgindex=0;
        }
         if (!img[imgindex]) {
         imgindex=0;
         }
        
          img[imgindex].style.opacity = 1;
          //yes we show img[this] element
        //here i know what it is but why do you know to write that :>
     
      })
      $(".back").on("click",function(){
        imgindex--;
        backshow(); 
        
        if(imgindex<=0){
          imgindex=img.length-1;

        }
        if(!img[imgindex]){
          imgindex=img.length-1;
        }
        img[imgindex].style.opacity=1;
        // alert("asd");
      })
      // $("back").click(function(){
      //   alert("asd");
      // })


      function removeimg(){
          for (var k = 0; k < img.length-1; k++) {
                   console.log(img[k]);//why dont show it
                   img[k].style.opacity = 0;
          }  
      }
  //     function backshow(){
  //   for (var i =img.length-1; i <img.length; i--) {
  //       console.log([img[i]);
  //       img[i].style.opacity=1;
      
  //   }
  // }
  function backshow(){
          for (var k = img.length-1; k > 0; k--) {
                   console.log(img[k]);
                   img[k].style.opacity = 0;
          }  
      }
  
     

//    hover we create hover function for button
$(".next").hover(function(){
 $(".back").css({
    backgroundColor:"red" //change red
  
})
},function(){
  $(".back").css({
    backgroundColor:"white" // restart  

  })
})

    </script>
</body>
</html>