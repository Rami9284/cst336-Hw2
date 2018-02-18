<!DOCTYPE html>
<html>
    <head>
        <title>Guess your Dancing GIF</title>
        
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
    </head>
    <header id= "topText"><h1>Your Dancing GIF</h1> </header>
    <hr>
    <body background = "img/dance.jpg">
        <?php
        
    function getGif(){
        $dancers = array("gif/tina.gif",'gif/pumpgirl.gif','gif/baby.gif','gif/bear.gif','gif/chick.gif','gif/carlton.gif','gif/minion.gif','gif/spider+deadpool.gif','gif/snoopy.gif','gif/stickman.gif');
        $music = array();
        $random = rand(0,9);
        $random1 = rand(0,4);

        $url = $dancers[$random];
        printGif($url,$random);
        pickMusic($random1);
    }
            
    function printGif($url, $random){
    
       echo "<div id = 'gifImages'>";
       switch ($random) {
           case 0:
               $symbol = "tina";
                echo "<img src= '$url' title = '". ucfirst($symbol) ."' />";
               break;
            case 1:
                $symbol = "pumpgirl";
               
                echo "<img 'gifPicture' src= '$url' title = '". ucfirst($symbol) ."'/>";
                break;
            case 2:
                $symbol = "baby";
                
                echo "<img  src= '$url' title = '". ucfirst($symbol) ."'/>";
                break;
            case 3:
                $symbol = "bear"; 
               
                echo "<img src= '$url' title = '". ucfirst($symbol) ."' />";
                break;
            case 4:
                $symbol = "chick"; 
                echo "<img  src= '$url' title = '". ucfirst($symbol) ."' />";
                break;
            case 5:
                $symbol = "carlton";
                
                echo "<img  src= '$url' title = '". ucfirst($symbol) ."' />";
                break;
            case 6:
                $symbol = "minion";
                
                echo "<img  src= '$url' title = '". ucfirst($symbol) ."'  />";
                break;
            case 7:
                $symbol = "spider+dead";
               
                echo "<img src ='$url' title = '". ucfirst($symbol) ."' width = '175' />";
                break;
            case 8:
                $symbol = "snoopy";
               
                echo "<img src = '$url' title = '". ucfirst($symbol) ."'/>";
                break;
            case 9:
                $symbol = "stickman";
                
                echo "<img  src = '$url' title = '". ucfirst($symbol) ."'  />";
                break;
       }
        echo "</div>";
    }
    
    function pickMusic($random1){
        $music = array("music/b1.mp3", "music/b2.mp3", "music/b3.mp3", "music/b4.mp3", "music/b5.mp3");
        switch ($random1) {
            case 0:
                echo "<audio autoplay src = '". $music[0]."' loop></audio>";
                break;
            case 1:
                echo "<audio autoplay src = '". $music[1]."' loop/></audio>";
                break;
            case 2:
                echo "<audio autoplay src = '". $music[2]."' loop/></audio>";
                break;
            case 3:
                echo "<audio autoplay src = '". $music[3]."' loop/></audio>";
                break;
            case 4:
                echo "<audio autoplay src = '". $music[4]."' loop/></audio>";
                break;
        }
    }
getGif();

?>
    
    </body>
      <hr>
    <footer><small>@Ramirez: CST336</small></footer>
</html>



