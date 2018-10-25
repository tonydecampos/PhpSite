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
                    <li><a href="#" class="scroll_button" onclick="scroll_to_div('div1')">Contato</a></li>
                    <li><a href="#" class="scroll_button" onclick="scroll_to_div('div2')">Localização</a></li>
                </ul>
            </div>
        </div>
        <div id="divPrincipalViewPort" class="principalviewport">
            Estamos na principal!
            <div id="div1" class="scroll_div">
                <h2>DIV 1</h2>
                <p>
                    This is a sample content and This is a demo of Smooth Scrolling Div Using jQuery
                    This is a sample content and This is a demo of Smooth Scrolling Div Using jQuery
                </p>
            </div>

            <div id="div2" class="scroll_div">
                <h2>DIV 2</h2>
                <p>
                    This is a sample content and This is a demo of Smooth Scrolling Div Using jQuery
                    This is a sample content and This is a demo of Smooth Scrolling Div Using jQuery
                </p>
            </div>

            <div id="div3" class="scroll_div">
                <h2>DIV 3</h2>
                <p>
                    This is a sample content and This is a demo of Smooth Scrolling Div Using jQuery
                    This is a sample content and This is a demo of Smooth Scrolling Div Using jQuery
                </p>
            </div>
        </div>
        <div id="divRodape" class="footer">
            Estamos no rodapé!
        </div>
    </body>
</html>
