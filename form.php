<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="added"><p>Added to gellery<br>
    <a href="index.php">Go back</a></p></div>
<?php
    $hdn = $_POST['hidn'];
    $text = $_POST['text'];
    $bg_color = $_POST['background-color'];
    $border_color = $_POST['border-color'];
    $border_radius = $_POST['border-radius'];
    $border_width = $_POST['border-width'];
    $font_size = $_POST['font-size'];
    $border_style = $_POST['border-style'];
    $text_align = $_POST['text-align'];
    $text_color = $_POST['text-color'];
    $text_shadow_width = $_POST['text-shadow-width'];
    $text_shadow_height = $_POST['text-shadow-height'];
    $text_shadow_color = $_POST['text-shadow-color'];
    $border_shadow_width = $_POST['border-shadow-width'];
    $border_shadow_height = $_POST['border-shadow-height'];
    $border_shadow_color = $_POST['border-shadow-color'];
    $font_family = $_POST['font-family'];
    $border_shadow_blurr = $_POST['border-shadow-blurr'];
    $text_shadow_blurr = $_POST['text-shadow-blurr'];

    $nazwa_serwera="localhost"; 
    $nazwa_uzytkownika="root";  
    $haslo_uzytkownika="";
    $nazwa_bazy_danych="pudelka";  
    $polaczenie1=mysqli_connect($nazwa_serwera, $nazwa_uzytkownika, $haslo_uzytkownika, $nazwa_bazy_danych);
    if ($hdn != 0)
    {
       $kwerenda="UPDATE `galeria` SET `text` = '$text', `bg_color` = '$bg_color', `border_color` = '$border_color', `border_radius` = '$border_radius',
       `border_width` = '$border_width', `font_size` = '$font_size', `border_style` = '$border_style', `text_align` = '$text_align', `text_color` = '$text_color',
       `text_shadow_width` = '$text_shadow_width', `text_shadow_height` = '$text_shadow_height', `text_shadow_color` = '$text_shadow_color',
       `border_shadow_width` = '$border_shadow_width', `border_shadow_height` = '$border_shadow_height', `border_shadow_color` = '$border_shadow_color',
       `font_family` = '$font_family', `borderblur` = '$border_shadow_blurr', `textblur` = '$text_shadow_blurr'
       WHERE `id` = '$hdn';";
    }else{
    $kwerenda="INSERT INTO `galeria` (`text`, `bg_color`, `border_color`, `border_radius`, `border_width`, `font_size`, `border_style`, `text_align`,
    `text_color`, `text_shadow_width`, `text_shadow_height`, `textblur` ,`text_shadow_color`, `border_shadow_width`, `border_shadow_height`, `borderblur` ,`border_shadow_color`, `font_family`, `id`) 
    VALUES('$text', '$bg_color', '$border_color', '$border_radius', '$border_width', '$font_size', '$border_style', '$text_align', '$text_color', 
    '$text_shadow_width', '$text_shadow_height', '$text_shadow_blurr' ,'$text_shadow_color', '$border_shadow_width', '$border_shadow_height', '$border_shadow_blurr' ,'$border_shadow_color', '$font_family', '');";
    }
    $wynikKwerendy=mysqli_query($polaczenie1, $kwerenda);
    mysqli_close($polaczenie1);
?>
</body>
</html>
