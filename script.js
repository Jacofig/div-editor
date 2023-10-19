function start(){
    //bierzemy wszystkie pola z panelu lewego
    document.getElementById("reset").addEventListener("click", resetuj);
    let tlo = document.getElementById("background_color").innerHTML;
    let promien = document.getElementById("border_radius").innerHTML;
    let kolorramki = document.getElementById("border_color").innerHTML;
    let gruboscramki = document.getElementById("border_width").innerHTML;
    let stylramki = document.getElementById("border_style").innerHTML;
    let rozmiarczcionki = document.getElementById("font_size").innerHTML;
    let rozmieszczenietekstu = document.getElementById("text_align").innerHTML;
    let fontfamily = document.getElementById("font_family").innerHTML;
    let textcolor = document.getElementById("color").innerHTML;
    let textshadow = document.getElementById("text_shadow").innerHTML;
    let bordershadow = document.getElementById("border_shadow").innerHTML;
    let tekst = document.getElementById("texxt").innerHTML;
    let textshadowwidth = textshadow.slice(0, 2);
    let textshadowheight = textshadow.slice(5, 7);
    let textshadowblurr = textshadow.slice(10, 12);
    let textshadowcolor = textshadow.slice(15, 22);
    let bordershadowwidth = bordershadow.slice(0, 2);
    let bordershadowheight = bordershadow.slice(5, 7);
    let bordershadowblurr = bordershadow.slice(10, 12);
    let bordershadowcolor = bordershadow.slice(15, 22);
    
    //zmieniamy formularz na pola z lewego panelu
    document.getElementById("text").value = tekst;
    document.getElementById("text-shadow-width").value = textshadowwidth;
    document.getElementById("text-shadow-height").value = textshadowheight;
    document.getElementById("text-shadow-blurr").value = textshadowblurr;
    document.getElementById("text-shadow-color").value = textshadowcolor;
    document.getElementById("border-shadow-width").value = bordershadowwidth;
    document.getElementById("border-shadow-height").value = bordershadowheight;
    document.getElementById("border-shadow-blurr").value = bordershadowblurr;
    document.getElementById("border-shadow-color").value = bordershadowcolor;
    document.getElementById("bg-color").value = tlo.slice(0, -1);
    document.getElementById("border-radius").value = promien.slice(0, -1);
    document.getElementById("border-color").value = kolorramki.slice(0, -1);
    document.getElementById("border-width").value = gruboscramki.slice(0, -1);
    document.getElementById("border-style").value = stylramki.slice(0, -1);
    document.getElementById("font-size").value = rozmiarczcionki.slice(0, -1);
    document.getElementById("text-align").value = rozmieszczenietekstu.slice(0, -1);
    document.getElementById("font-family").value = fontfamily.slice(0, -1);
    document.getElementById("text-color").value = textcolor.slice(0, -1);
}

function text_changer(){
    let text = document.getElementById("text").value;
    document.getElementById("box").innerHTML = text;
    document.getElementById("texxt").innerHTML = text;
}

function bg_changer(){
    let bg_color = document.getElementById("bg-color").value; //wartosc danego pola z formularza
    document.getElementById("box").style.backgroundColor = bg_color; //zmiana stylu
    document.getElementById("background_color").innerHTML = bg_color.concat(';'); //zmiana lewego panelu
}

function borderradius_changer(){
    let border_radius = document.getElementById("border-radius").value;
    document.getElementById("box").style.borderRadius = border_radius.concat('px');
    document.getElementById("border_radius").innerHTML = border_radius.concat('px;');
}

function borderwidth_changer(){
    let border_width = document.getElementById("border-width").value;
    document.getElementById("box").style.borderWidth = border_width.concat('px');
    document.getElementById("border_width").innerHTML = border_width.concat('px;');
}

function bordercolor_changer(){
    let border_color = document.getElementById("border-color").value;
    document.getElementById("box").style.borderColor = border_color;
    document.getElementById("border_color").innerHTML = border_color.concat(';');
}

function fontsize_changer(){
    let font_size = document.getElementById("font-size").value;
    document.getElementById("box").style.fontSize = font_size.concat('px');
    document.getElementById("font_size").innerHTML = font_size.concat('px;');
}

function borderstyle_changer(){
    let border_style = document.getElementById("border-style").value;
    document.getElementById("box").style.borderStyle = border_style;
    document.getElementById("border_style").innerHTML = border_style.concat(';');
}

function textalign_changer(){
    let text_align = document.getElementById("text-align").value;
    document.getElementById("box").style.textAlign = text_align;
    document.getElementById("text_align").innerHTML = text_align.concat(';');
}

function textcolor_changer(){
    let text_color = document.getElementById("text-color").value;
    document.getElementById("box").style.color = text_color;
    document.getElementById("color").innerHTML = text_color(';');
}

function textshadow_changer(){
    let text_shadow_width = document.getElementById("text-shadow-width").value;
    let text_shadow_height = document.getElementById("text-shadow-height").value;
    let text_shadow_blurr = document.getElementById("text-shadow-blurr").value;
    let text_shadow_color = document.getElementById("text-shadow-color").value;
    document.getElementById("box").style.textShadow = text_shadow_width.concat('px ', text_shadow_height, 'px ', text_shadow_blurr, 'px ', text_shadow_color);
    document.getElementById("text_shadow").innerHTML = text_shadow_width.concat('px ', text_shadow_height, 'px ', text_shadow_blurr, 'px ', text_shadow_color, ';');

}

function bordershadow_changer(){
    let border_shadow_width = document.getElementById("border-shadow-width").value;
    let border_shadow_height = document.getElementById("border-shadow-height").value;
    let border_shadow_blurr = document.getElementById("border-shadow-blurr").value;
    let border_shadow_color = document.getElementById("border-shadow-color").value;
    document.getElementById("box").style.boxShadow = border_shadow_width.concat('px ', border_shadow_height, 'px ', border_shadow_blurr, 'px ', border_shadow_color);
    document.getElementById("border_shadow").innerHTML = border_shadow_width.concat('px ', border_shadow_height, 'px ', border_shadow_blurr, 'px ', border_shadow_color, ';');
}

function fontfamily_changer(){
    let font_family = document.getElementById("font-family").value;
    document.getElementById("box").style.fontFamily = font_family;
    document.getElementById("font_family").innerHTML = font_family.concat(';');
}

function resetuj(){
    //resetujemy wyglad diva
    document.getElementById("box").innerHTML = '';
    document.getElementById("box").style.backgroundColor = '#FFCACA';
    document.getElementById("box").style.borderRadius = '0px';
    document.getElementById("box").style.borderWidth = '0px';
    document.getElementById("box").style.borderColor = '#251B37';
    document.getElementById("box").style.fontSize = '12px';
    document.getElementById("box").style.borderStyle = 'none';
    document.getElementById("box").style.textAlign = 'center';
    document.getElementById("box").style.color = 'black';
    document.getElementById("box").style.textShadow = '10px 10px 10px #FFFFFF';
    document.getElementById("box").style.boxShadow = '10px 10px 10px #FFFFFF';
    document.getElementById("box").style.fontFamily = 'Arial';

    //resetujemy formularz
    document.getElementById("text").value = '';
    document.getElementById("text-shadow-width").value = 10;
    document.getElementById("text-shadow-height").value = 10;
    document.getElementById("text-shadow-blurr").value = 10;
    document.getElementById("text-shadow-color").value = '#000000';
    document.getElementById("border-shadow-width").value = 0;
    document.getElementById("border-shadow-height").value = 0;
    document.getElementById("border-shadow-blurr").value = 0;
    document.getElementById("border-shadow-color").value = '#000000';
    document.getElementById("bg-color").value = '#FFCACA';
    document.getElementById("border-radius").value = 0;
    document.getElementById("border-color").value = '#251B37';
    document.getElementById("border-width").value = 0;
    document.getElementById("border-style").value = 'none';
    document.getElementById("font-size").value = 12;
    document.getElementById("text-align").value = 'left';
    document.getElementById("font-family").value = 'Arial';
    document.getElementById("text-color").value = '#000000';

   //resetujemy lewy panel
    document.getElementById("text_shadow").innerHTML = '10px 10px 10px #000000;';
    document.getElementById("border_shadow").innerHTML = '10px 10px 10px #000000;';
    document.getElementById("background_color").innerHTML = '#FFCACA;';
    document.getElementById("border_radius").innerHTML = '0px;';
    document.getElementById("border_color").innerHTML = '#251B37;';
    document.getElementById("border_width").innerHTML = '0px;';
    document.getElementById("border_style").innerHTML = 'none;';
    document.getElementById("font_size").innerHTML = '12px;';
    document.getElementById("text_align").innerHTML = 'left;';
    document.getElementById("font_family").innerHTML = 'Arial;';
    document.getElementById("color").innerHTML = '#000000;';
    document.getElementById("texxt").innerHTML = '-';   
}
