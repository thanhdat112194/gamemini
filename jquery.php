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
    <p></p>
    <p>text 3</p>
    <p>text 4</p>
    <p>text 5</p>
    <p>text 6</p>
   
</div>
<button>go</button>
   
<div class="divs" title="y">dededed</div>
<img src="https://cdn3.iconfinder.com/data/icons/social-media-chamfered-corner/154/whatsapp-512.png" alt="img1" width="100px" heigth="auto">

    <script>
    
 $(document).ready(function(){
    // var a  = $(".divs").text("hello world");
     // var a  = $(".divs");
// var  string  = "hello world";
    //    a.css(//only
    //         'color',"red"
    //         )
   // a.css({
      //  color:"red",
      //   fontSiz:"20px",
       // backgroundColor:"red"

    //})

    //***function */
   // $(".div").eq(0).css('color',"red")

       function mycss(a){//start
             a.addClass("myclass");
       }//end
       // we can chage a. this name right

function randcolor(m,min,max){//starts

   var rand = Math.floor(Math.random()*255);
   var rand2 = Math.floor(Math.random()*255);
   var rand3 = Math.floor(Math.random()*255);
   var wirand = Math.floor(Math.random()*(max-min))+min;
  
   m.css({
    backgroundColor:"rgb("+rand+","+rand2+","+rand3+")",//attriput
    width:wirand+"px",
    height:"200px"
   });


}//end
//    _wirand+"px"
// $(".diveq>p").hide();
   function replstext(text,newtext){
        text.replaceWith("Hello,this"+newtext);
   }





 

    $("button").click(function(){
   var img = $("img").attr("width","400px")//1
        $("p").filter(".fil").css("color","red") 
       // replstext($(".divs"),"new text your")
       // randcolor($(".divs"),40,100); 
    
        // $(".diveq>p").eq(0).toggle()
        $("p").eq(0).html("new txet")    
        $("p").eq(1).text("hellow new text 2 ").css("color","yellow") 
        $("p").eq(2).append("</br>	This	is	new	content");    
        $("p").slice(4,6).css("color","red")
      })
    //   $("button").one("click", function(){
    //       mycss($(".diveq>p").eq(0))
     
    //   })
    // $(".div1").dblclick("click", function(){
    //     console.log(a)
     
    // })
 })
//where this page?
for (let i = 0; i < $(".diveq").length; i++) {
    console.log( $(".diveq")[i])
    /what is this :3
    and .why we use it
    yes
}


    </script>
</body>
</html>


<?php 
// for ($i=0; $i < count($element) ; $i++) { 
//    echo $element[$i] ;
// }


?>



