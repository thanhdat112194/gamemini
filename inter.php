<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
  </script>
    <!-- we add jquer+ajax script -->
    <title>Document</title>
    <style>
    .myclass{
        color:red;
    }
    </style>
</head>
<body>
<!-- parent -->
<div  class="diveq"> 

    <p>text 1</p>
    <!-- <p></p>
    <p>text 3</p>
    <p>text 4</p>
    <p>text 5</p>
    <p>text 6</p> -->
   
</div>
<button>go</button>
   
<div class="divs" title="y">dededed</div>
<img src="https://cdn3.iconfinder.com/data/icons/social-media-chamfered-corner/154/whatsapp-512.png" alt="img1" width="100px" heigth="auto">

    <script>
    
 $(document).ready(function(){
// $(".diveq>p").fadeIn();//with slideUp

$(".diveq>p").fadeOut();//with slideDown


 $("button").click(function (){
    // $(".diveq>p").slideUp(3000)
    $(".diveq>p").slideDown(3000)
 })







        //interval function1
// is this the second ??yes
// var interval = 4000;
//     var int =  setInterval(function (){
//         console.log(new Date()); 
//     }, interval);



   
 var interval = 6000;
 var myinter;
 function myint(){
   
     console.log("change speed"+interval);
     interval=interval-300 
 }

 myinter=setInterval(myint,interval)
 here its show time 6000
 5700
 5100


$("button").click(function (){
    clearInterval(myinter);
})
//i forget it



// function set(){
   
//       alert("ok");  


// }




// setTimeout(set,2000);

function gams(){




    click function(){
        "your code"

      return  gams()
        
    }
}



   });








    </script>
</body>
</html>




