<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
  </script>
  <style>
      p{
          border:1px solid black;;
          width:150px;
          height:200px;
          opacity:1;
      } 
     
 </style>
</head>
<body>
    <p></p>
    <div></div>
    <script>
    // for example to simultaneously animate the width and height 
// with the <swing> easing  function and  the opacity 
//  with the <linear> easing function
        $(document).ready(function(){
          //animation
        // $("p").animate({
        //     width:"220px",
        //     height:"220px"

        // },4200,"swing",function (){
        //   $(this).css('background-color','black');      


        // })
        //2
        $("p").animate({ //2
            width:"400px",//after this
            
        },{
            queue:false,//here??
            duration:3000//its speed with
        
        }).animate({//1
            height:"350px"//start this
        },1000,function(){// this is also speed??yes 2 animation
        $(this).css({
                backgroundColor:"blue",
                borderRadius:"14px"
        })
        $(this).html("<strong>hello animation</strong>").css({
                    fontSize:"30px",
                    color:"black",
                    opacity:0.5

         })           
            

});
$("p").click(function(){
     $(this).animate({//1
         width:"300px",
         height:"100px"
                           
     },5500,function(){//after 1 animation doing its
    $(this).css('text-align',"center")
    $(this).css("font-size","40px")
    })
   .animate({//2
        borderLeftWidth:"23px"
        // ok:>
   },2000)

});
});
</script>
</body>
</html>