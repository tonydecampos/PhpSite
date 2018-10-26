<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script type="text/javascript" src="JS/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
        <script type="text/javascript">
            function scroll_to_div(div_id)
            {
                $('html,body').animate(
                        {
                            scrollTop: $("#" + div_id).offset().top
                        },
                        'slow');
            }
        </script>
        <meta charset="UTF-8">
        <title>Template 1</title>
    </head>
    <body>
        <div id="divCabecalho" class="header">
            <div class="divMenu">
                <ul class="menuHorizontal">
                    <li><a href="#" class="scroll_button" onclick="scroll_to_div('div1')">Home</a></li>
                    <li><a href="#" class="scroll_button" onclick="scroll_to_div('div2')">Quem somos</a></li>
                    <li><a href="#" class="scroll_button" onclick="scroll_to_div('div3')">História</a></li>
                    <li><a href="#" class="scroll_button" onclick="scroll_to_div('div4')">Contato</a></li>
                    <li><a href="#" class="scroll_button" onclick="scroll_to_div('div5')">Localização</a></li>
                </ul>
            </div>
        </div>
        <div style="clear: both;" />
        <div id="divPrincipalViewPort" class="principalviewport">
            <div id="div1" class="scroll_div">
                <img src="Imagens/imagem1.jpg" class="largura100porcento" alt="Div 1 - Imagem 1">
<!--                <img src="workplace.jpg" alt="Workplace" usemap="#workmap">
                <map name="workmap">
                    <area shape="rect" coords="34,44,270,350" alt="Computer" href="computer.htm">
                    <area shape="rect" coords="290,172,333,250" alt="Phone" href="phone.htm">
                    <area shape="circle" coords="337,300,44" alt="Coffee" href="coffee.htm">
                </map>-->
            </div>
            <div id="div2" class="scroll_div">
                <img src="Imagens/imagem2.jpg" class="largura100porcento" alt="Div 2 - Imagem 2">
            </div>
            <div id="div3" class="scroll_div">
                <img src="Imagens/imagem3.jpg" class="largura100porcento" alt="Div 3 - Imagem 3">
            </div>
            <div id="div4" class="scroll_div">
                <img src="Imagens/imagem4.jpg" class="largura100porcento" alt="Div 4 - Imagem 4">
            </div>
            <div id="div5" class="scroll_div">
                <img src="Imagens/imagem5.jpg" class="largura100porcento" alt="Div 5 - Imagem 5">
            </div>
        </div>
        <div id="divRodape" class="footer">
            Estamos no rodapé!
        </div>
    </body>
</html>
