<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'>
  </script>
  <style>
    .square{
        height: 50px;
        width:50px;
        background-color:red;
        display: inline-block;
        margin-left:20px;
    
    }
    .square p {
        text-align: center;
    }
  </style>
</head>
<body>
<div class="square"><p>1</p></div>
<div class="square"><p>2</p></div>
<div class="square"><p>3</p></div>
    <script>
  
    $(document).ready(function(){

        $(".square").click(function(){
            $(this).css({
                "background-color": "yellow",
                "border-radius": "50%"

            });
        })
        
    });
    


    <
      $(document).ready(function(){
     var next = $(".next");
     var back = $(".back");
     var img  = $("div>img");
   var elemindex = 0;
   img[elemindex].style.opacity = 1; 
     next.click(function(){
        nextshow()
        elemindex++;
         if (img[elemindex]>=img.length-1) {////1 min i mean if img      
            elemindex= 0;
         }
         if(!img[elemindex]){
            elemindex= 0;
         }
         img[elemindex].style.opacity = 1;  
     })
     
  function nextshow(){
       for (var i = 0; i < img.length; i++) {

   
                 console.log(img[i])
      img[i].style.opacity = 0;
           
       }
  }
  
    })
    
    
    
    >
    
    </script>
</body>
</html>
