<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous">
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'>
  </script>
</head>
<body>
<div >
    <p></p>
</div>
<input type="text" id="a" placeholder="please write here"><br>
    <input type="radio" id="50px"  name="size" value="50"><label for="size">50px</label><br>
    
    <input type="radio" id="100px"  name="size" value="100"><label for="size">100px</label><br>
    
    <input type="radio"  id="150px"  name="size"  value="150"><label for="size">150px</label><br>    
    <button type="submit">go</button>
 

<script>
    $(document).ready(function(){
        $("button").click(function(){
            // var radio = $('input[name="size"]:checked').val();
            // console.log(radio)
            //   //our need check if radio = 50  this text change 50
            //   if(radio=="50"){

            //     $("p").css("fontSize","50px")
            // }
        //    $("p").html(text);//where your text
        var radio = $('input[name="size"]:checked').val();
        if(radio=="50")
        {
            $("p").css("fontSize","50px");
        }
        if(radio=="100")
        {
            $("p").css("fontSize","100px");
        }
        if(radio=="150")
        {
            $("p").css("fontSize","150px");
        }
                console.log(radio);
        var text = $("#a").val();
        $("p").html(text);
          
        })
    })

</script>

</body>
</html>