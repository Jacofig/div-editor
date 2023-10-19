<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container" style='zoom: 0.5; -moz-transform: scale(0.5)'>
    <form name="galer" method="POST" action="index.php">
    <?php
        $nazwa_serwera="localhost"; 
        $nazwa_uzytkownika="root";  
        $haslo_uzytkownika="";
        $nazwa_bazy_danych="pudelka";  
        $polaczenie1=mysqli_connect($nazwa_serwera, $nazwa_uzytkownika, $haslo_uzytkownika, $nazwa_bazy_danych);
        $kwerenda="SELECT `text`, `bg_color`, `border_color`, `border_radius`, `border_width`, `font_size`, `border_style`, `text_align`, `text_color`, `text_shadow_width`, `text_shadow_height`, `textblur`, `text_shadow_color`, `border_shadow_width`, `border_shadow_height`, `borderblur`, `border_shadow_color`, `font_family`, `id` FROM `galeria`;";
        $wynikKwerendy=mysqli_query($polaczenie1, $kwerenda);
        
        if($wynikKwerendy->num_rows > 0) {
            while($row = $wynikKwerendy->fetch_assoc()) {
                //rysowanie divow dopoki sa w tabeli
                echo "<div style='width: 655px; height: 467px; background-color: " .$row["bg_color"]  . "; border-color: " . $row["border_color"] . "; border-radius: " . $row["border_radius"]
                ."px;" . " border-width: " . $row["border_width"] . "px; border-style: " . $row["border_style"] . "; font-size: " . $row["font_size"] . "px; text-align: " . $row["text_align"]
                . "; color: " . $row["text_color"] . "; text-shadow: " . $row["text_shadow_width"] . "px " .$row["text_shadow_height"] . "px " .$row["textblur"] . "px " . $row["text_shadow_color"] . "; box-shadow: " . $row["border_shadow_width"] . "px " . 
                $row["border_shadow_height"] . "px " .$row["borderblur"] . "px " . $row["border_shadow_color"] . "; font-family: " . $row["font_family"] . ";" . "'>" . $row["text"] . "</div>" . "<input type='radio' name='edit' value='". $row["id"] ."'id='". $row["id"] ."'> ";

                //wypisywanie cssa divow dopoki sa w tabeli
                echo "<div>background-color: " .$row["bg_color"]  . "; border-color: " . $row["border_color"] . "; border-radius: " . $row["border_radius"]
                    ."px;" . " border-width: " . $row["border_width"] . "px; border-style: " . $row["border_style"] . "; font-size: " . $row["font_size"] . "px; text-align: " . $row["text_align"]
                    . "; color: " . $row["text_color"] . "; text-shadow: " . $row["text_shadow_width"] . "px "  .$row["textblur"] . "px " . $row["text_shadow_color"] . "; box-shadow: " . $row["border_shadow_width"] . "px " . 
                    $row["border_shadow_height"] . "px " .$row["borderblur"] . "px ". $row["border_shadow_color"] . "; font-family: " . $row["font_family"] . ";" . "</div><br>";
            }
        }
        mysqli_close($polaczenie1);
    ?>
    <a href="index.php"><input type='submit' value='EDIT' id='subm' name='subm' action='index.php'></a>
    </form>
    </div>
</body>
</html>