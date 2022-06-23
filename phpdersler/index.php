<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>Site</title>
        <style>
            body{
                background-color: salmon;
                color: white;
            }
        </style>
       <script type="text/javascript" language="javascript">
           function deneme(){
               document.getElementById("IslemAlani").innerHTML="Extra eğitim";
           }
       </script> 
    </head>
    <body>
<?php
   echo "Merhaba dünya!";
?>
        <p>selim</p>
    <input type="button" onclick="deneme();" value="Islem yap"> <br/><br/>
    <div id="IslemAlani"></div>
    </body>
</html>