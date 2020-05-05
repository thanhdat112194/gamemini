
</html>
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
    body{
        /* background-image: url("2.jpg");
        background-size: 800px;
        background-repeat: no-repeat; */
        /* margin:  0px auto; */
       
        
    }
        .BG_1 {
            position:relative;
            width:800px;
            height:300px;
            border: 3px solid #73AD21;
            margin-left:50px;
        }
        .first{
            width:800px;
            position:absolute;
            
        }
        .inside  img{
            position: absolute;
            border: 3px solid #73AD21;
            /* margin-left:730px; */
            /* padding-top: 450px; */
        }
        /* .ab img{
            width:100px;
            margin-left: 50px;

        } */
        button {
            width:50px;
            height:20px;
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

<button type="submit"  width="20px" >start</button>
    <div class="BG_1">
        <img class="first" src="2.jpg" alt="">
        <div class="inside">
            <img id="img" src="1.png" width="100px"alt="">
        </div>
        
    
    </div>
    <script>
        $(document).ready(function(){
        //     function game(){

        //     $("button").click(function(){
        //         function newplace(){
        //         var rand3 = Math.floor(Math.random()*405);
                

        //         $("#img").css("margin-top",rand3+"px");
                
              
              
        //     }
        //     var interval=2000;
        //     var myinterval;
        //     var marginleft=0;
        //     function int(){
        //         console.log(interval);
        //         marginleft= marginleft+60;
        //         $("#img").css("margin-left",marginleft+"px");
        //         interval=interval+2000; 
        //         if(marginleft>=730){
        //             alert("good luck for the next time");
        //             $("#img").css("margin-left","0px");
        //             clearInterval(myinterval);
        //             marginleft=0;
                    
                    
        //         }
               
        //     }
        //     $("#img").click(function(){
        //         newplace();
        //         myinterval=setInterval(int,interval);
               
        //         if(interval>2000){
        //             $(this).css("margin-left","0px");
        //             marginleft=0;
        //         }
                
              
        //     })
        //     return game();
        //     })
        // }
        // game();

            
           
            function newplace(){
                var rand3 = Math.floor(Math.random()*405);
                

                $("#img").css("margin-top",rand3+"px");
                
              
              
            }
            var interval=2000;
            var myinterval;
            var marginleft=0;
            function int(){
                console.log(interval);
                marginleft= marginleft+60;
                $("#img").css("margin-left",marginleft+"px");
                interval=interval+2000; 
                if(marginleft>=730){
                    alert("good luck for the next time");
                    $("#img").css("margin-left","0px");
                    clearInterval(myinterval);
                    marginleft=0;
                    
                    
                }
               
            }
            
                
            
            
            // function int(){
            //     console.log(interval);
            // 
               
             
            //     }
            // }
            
            
            
                // function CPosition(){
                    
                //     if(interval="2700"){
                //         alert("ok");
                //     }
                // }
            
            // can i ask
            // what is the function restart intervation ??
            // recursion

            
            $("#img").click(function(){
                newplace();
                myinterval=setInterval(int,interval);
               
                if(interval>2000){
                    $(this).css("margin-left","0px");
                    marginleft=0;
                }
                
              
            })
            

            // var interval =2000;
            // var myinter;
            // function duckint(){
            //     console.log(interval);
            //     interval=interval+300
            // }
            // myinter=setInterval(duckint,intverval)
            // duckint();

               
//  var interval = 2000;
//  var myinter;
//  function myint(){
   
//      console.log("change speed"+interval);
//      interval=interval+300 
//  }
//   myinter=setInterval(myint,interval)

// var interval = 4000;// is this the second ??yes
//     var int =  setInterval(function (){
//         console.log(interval)
//     }, interval+200);
//     // int();
//     var newint;
//     function newint(){
//         interval = interval +300;
//     }
    // var newinterval =2000;

    // function restart(){
    //     newinterval = newinterval +200
    // }
    
    // function RD_place(){
        
        
    //     var height=wirand+"px";
    //     alert(wirand);
    // }
    // RD_place("#img");
    // RD_place();
    
    
    // var wirand = Math.floor(Math.radom()*10);
    // $("p").html(wirand);
        // function newplace(){
        //     alert(wirand);
        // // var rand3 = Math.floor(Math.random()*10);
        // }
       
    

        //     $("#img").click(function(){
        //         // clearInterval(interval);
        //         // restart();
        //         // RD_place()
               
        //         // newplace();
        //         alert("1");
        //     });
        

        });
    
    </script>

</body>
</html>




