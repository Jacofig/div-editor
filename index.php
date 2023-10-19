<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div editor</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body onload="start()">
    <div class="container">
        <div class="leftleft">
        <?php
        error_reporting(E_ERROR | E_PARSE);
            $id = $_POST['edit'];         
            $nazwa_serwera="localhost"; 
            $nazwa_uzytkownika="root";  
            $haslo_uzytkownika="";
            $nazwa_bazy_danych="pudelka";  
            $polaczenie1=mysqli_connect($nazwa_serwera, $nazwa_uzytkownika, $haslo_uzytkownika, $nazwa_bazy_danych);
            $kwerenda="SELECT `text`, `bg_color`, `border_color`, `border_radius`, `border_width`, `font_size`, `border_style`, `text_align`, `text_color`, `text_shadow_width`, `text_shadow_height`, `textblur`, `text_shadow_color`, `border_shadow_width`, `border_shadow_height`, `borderblur`, `border_shadow_color`, `font_family`, `id` FROM `galeria` WHERE `id` = '$id';";
            $wynikKwerendy=mysqli_query($polaczenie1, $kwerenda);
            if($wynikKwerendy->num_rows > 0) {
                while($row = $wynikKwerendy->fetch_assoc()) {
                    //wypisanie lewego panelu jezeli edytujemy jakiegos diva
                    echo ".box{
                    <div class='formelement'><label>background-color:</label><div id='background_color'>". $row["bg_color"] . ";</div></div>
                    <div class='formelement'><label>border-radius:</label><div id='border_radius'>".$row["border_radius"] ."px;</div></div>
                    <div class='formelement'><label>border-color:</label><div id='border_color'>". $row["border_color"].";</div></div>
                    <div class='formelement'><label>border-width:</label><div id='border_width'>".$row["border_width"]."px;</div></div>
                    <div class='formelement'><label>border-style:</label><div id='border_style'>".$row["border_style"].";</div></div>
                    <div class='formelement'><label>box-shadow:</label><div id='border_shadow'>".$row["border_shadow_width"]."px ". $row["border_shadow_height"] . "px " . $row["borderblur"] . "px ". $row["border_shadow_color"] . ";</div></div>
                    <div class='formelement'><label>font-family:</label><div id='font_family'>".$row["font_family"].";</div></div>
                    <div class='formelement'><label>text-align:</label><div id='text_align'>".$row["text_align"].";</div></div>
                    <div class='formelement'><label>font-size:</label><div id='font_size'>".$row["font_size"]."px;</div></div>
                    <div class='formelement'><label>color:</label><div id='color'>".$row["text_color"].";</div></div>
                    <div class='formelement'><label>text-shadow:</label><div id='text_shadow'>".$row["text_shadow_width"]."px ". $row["text_shadow_height"] . "px " . $row["textblur"] . "px ". $row["text_shadow_color"] . ";</div></div>
                    }<br>
                    text: <div id ='texxt'>". $row["text"] . "</div>"
                    ;
                }
                
            }else{
                //wypisanie lewego panelu domyslnego
                echo ".box {
                    <div class='formelement'><label>background-color:</label><div id='background_color'>#FFCACA;</div></div>
                    <div class='formelement'><label>border-radius:</label><div id='border_radius'>0px;</div></div>
                    <div class='formelement'><label>border-color:</label><div id='border_color'>#251B37;</div></div>
                    <div class='formelement'><label>border-width:</label><div id='border_width'>0px;</div></div>
                    <div class='formelement'><label>border-style:</label><div id='border_style'>none;</div></div>
                    <div class='formelement'><label>box-shadow:</label><div id='border_shadow'>10px 10px 10px #000000;</div></div>
                    <div class='formelement'><label>font-family:</label><div id='font_family'>Arial;</div></div>
                    <div class='formelement'><label>text-align:</label><div id='text_align'>left;</div></div>
                    <div class='formelement'><label>font-size:</label><div id='font_size'>12px;</div></div>
                    <div class='formelement'><label>color:</label><div id='color'>#000000;</div></div>
                    <div class='formelement'><label>text-shadow:</label><div id='text_shadow'>10px 10px 10px #000000;</div></div>
                    }<br>
                    text: <div id ='texxt'>-</div>
                    ";
            }
            mysqli_close($polaczenie1);
        ?>
            
        </div>
        <div class="left">
        <?php
        error_reporting(E_ERROR | E_PARSE);
            $id = $_POST['edit'];         
            $nazwa_serwera="localhost"; 
            $nazwa_uzytkownika="root";  
            $haslo_uzytkownika="";
            $nazwa_bazy_danych="pudelka";  
            $polaczenie1=mysqli_connect($nazwa_serwera, $nazwa_uzytkownika, $haslo_uzytkownika, $nazwa_bazy_danych);
            $kwerenda="SELECT `text`, `bg_color`, `border_color`, `border_radius`, `border_width`, `font_size`, `border_style`, `text_align`, `text_color`, `text_shadow_width`, `text_shadow_height`, `textblur`, `text_shadow_color`, `border_shadow_width`, `border_shadow_height`, `borderblur`, `border_shadow_color`, `font_family`, `id` FROM `galeria` WHERE `id` = '$id';";
            $wynikKwerendy=mysqli_query($polaczenie1, $kwerenda);
            echo "<div id='1' class='" . $id . "'></div>";
            if($wynikKwerendy->num_rows > 0) {
                while($row = $wynikKwerendy->fetch_assoc()) {
                    //rysowanie diva jezeli edytujemy jakiegos diva
                    echo "<div id='box' name='".$row["id"] ."' style='width: 655px; height: 467px; background-color: " .$row["bg_color"]  . "; border-color: " . $row["border_color"] . "; border-radius: " . $row["border_radius"]
                    ."px;" . " border-width: " . $row["border_width"] . "px; border-style: " . $row["border_style"] . "; font-size: " . $row["font_size"] . "px; text-align: " . $row["text_align"]
                    . "; color: " . $row["text_color"] . "; text-shadow: " . $row["text_shadow_width"] . "px "  .$row["textblur"] . "px " . $row["text_shadow_color"] . "; box-shadow: " . $row["border_shadow_width"] . "px " . 
                    $row["border_shadow_height"] . "px " .$row["borderblur"] . "px ". $row["border_shadow_color"] . "; font-family: " . $row["font_family"] . ";" . "'>" . $row["text"] . "</div>" . "<br>";
                }
                
            } else {
                //rysowanie zwyklego diva
                echo "<div id='box' class='box'></div>";
            }
            mysqli_close($polaczenie1);
        ?>
        
            
        </div>
        <div class="right">
            <form method="POST" name="formik" action="form.php">
                <?php
                    $id = $_POST['edit'];         
                    $nazwa_serwera="localhost"; 
                    $nazwa_uzytkownika="root";  
                    $haslo_uzytkownika="";
                    $nazwa_bazy_danych="pudelka";  
                    $polaczenie1=mysqli_connect($nazwa_serwera, $nazwa_uzytkownika, $haslo_uzytkownika, $nazwa_bazy_danych);
                    $kwerenda="SELECT `text`, `bg_color`, `border_color`, `border_radius`, `border_width`, `font_size`, `border_style`, `text_align`, `text_color`, `text_shadow_width`, `text_shadow_height`, `textblur`, `text_shadow_color`, `border_shadow_width`, `border_shadow_height`, `borderblur`, `border_shadow_color`, `font_family`, `id` FROM `galeria` WHERE `id` = '$id';";
                    $wynikKwerendy=mysqli_query($polaczenie1, $kwerenda);
                    echo "<div id='1' class='" . $id . "'></div>";
                    //ukryte pole z formularza na potrzeby przesłania id
                    if($wynikKwerendy->num_rows > 0){
                        echo "<input type='hidden' id='hidn' name='hidn' value='".$id."'>";
                    }
                    mysqli_close($polaczenie1);
                ?>
                <h3>Border</h3>
                <div class="formelement"><label>Text   </label><input type="text" id="text" onchange="text_changer()" name="text"></div>
                <div class="formelement"><label>Background color   </label><input type="color" value="#FFCACA" id="bg-color" onchange="bg_changer()" name="background-color"></div>
                <div class="formelement"><label>Border radius  </label><input type="range" value="10" onchange="borderradius_changer()" id="border-radius" min="10" max="90" name="border-radius"></div>
                <div class="formelement"><label>Border color </label><input type="color" value="#251B37" id="border-color" onchange="bordercolor_changer()" name="border-color"></div>
                <div class="formelement"><label>Border width</label><input type="range" id="border-width" value="0" onchange="borderwidth_changer()" min="10" max="90" name="border-width"></div>
                <div class="formelement"><label>Border style</label><select value="solid" onchange="borderstyle_changer()" id="border-style" name="border-style">
                    <option value="none">none</option>
                    <option value="hidden">hidden</option>
                    <option value="dotted">dotted</option>
                    <option value="dashed">dashed</option>
                    <option value="solid">solid</option>
                    <option value="double">double</option>
                    <option value="groove">groove</option>
                    <option value="ridge">ridge</option>
                    <option value="inset">inset</option>
                    <option value="outset">outset</option>
                </select></div>
                <div class="formelement"><label>Shadow width</label><input id="border-shadow-width" onchange="bordershadow_changer()" type="range" value="30" min="10" max="50" name="border-shadow-width"></div>
                <div class="formelement"><label>Shadow height</label><input id="border-shadow-height" onchange="bordershadow_changer()" type="range" value="30" min="10" max="50" name="border-shadow-height"></div>
                <div class="formelement"><label>Shadow blurr</label><input id="border-shadow-blurr" onchange="bordershadow_changer()" type="range" value="30" min="10" max="50" name="border-shadow-blurr"></div>
                <div class="formelement"><label>Shadow color</label><input id="border-shadow-color" onchange="bordershadow_changer()" type="color" name="border-shadow-color"></div>
               <h3>Text</h3>
               <div class="formelement"><label>Font</label>
                <select onchange="fontfamily_changer()" id="font-family" name="font-family">
                    <option value="Arial, Helvetica, sans-serif">Arial</option>
                    <option value="Impact, Charcoal, sans-serif">Impact</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Courier New">Courier New</option>
                </select></div>
                <div class="formelement"><label>Text alignment</label>
                <select id="text-align" name="text-align" onchange="textalign_changer()">
                    <option value="left">left</option>
                    <option value="right">right</option>
                    <option value="center">center</option>
                </select></div>
                <div class="formelement"><label>Font size</label><input type="range" value="12" id="font-size" onchange="fontsize_changer()" name="font-size" min="12" max="72"></div>
                <div class="formelement"><label>Font color</label><input type="color" id="text-color" onchange="textcolor_changer()" name="text-color"></div>
                <div class="formelement"><label>Shadow width</label><input type="range" onchange="textshadow_changer()" name="text-shadow-width" value="15" id="text-shadow-width" min="10" max="20"></div>
                <div class="formelement"><label>Shadow height</label><input type="range" onchange="textshadow_changer()" name="text-shadow-height" value="15" id="text-shadow-height" min="10" max="20"></div>
                <div class="formelement"><label>Shadow blurr</label><input type="range" onchange="textshadow_changer()" name="text-shadow-blurr" value="15" id="text-shadow-blurr" min="10" max="20"></div>
                <div class="formelement"><label>Shadow color</label><input type="color" onchange="textshadow_changer()" name="text-shadow-color" id="text-shadow-color"></div>
                <div class="formelement"><input type="submit" name="button" id="button" value="Save" action="form.php"><a href="galeria.php"><input type="button" name="galeriaa" id="galeriaa" value="Show gallery" action="galeria.php">
        </a><input type="button" name="reset" id="reset" value="Reset"></div>
        
            </form>
        </div>
    </div>
</body>
</html>