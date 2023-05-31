<?php
if(isset($_POST["action"])){
    $action = $_POST["action"];

    switch($action){
        case "resultPaniek":
            $result = "resulaat_paniek";
            break; 
        case "resultOnkunde":
            $result = "resulaat_onkunde";
            break; 
        case "onkunde":
            $result = "form_onkunde";
            break; 
    }
}else{
    $result = "form_paniek";
}


function form_paniek(){
 ?>
    <div class="main"> 
        <b>Er heerst paniek...</b>
        <form method="post">
            <div class="d-flex">
                <div class="vragen" style="width: 50%; text-align: center" >
                    <div>Welk dier zou je nooit als huisdier willen hebben?</div>
                    <div>Wie is de belangrijkste persoon in je leven?</div>
                    <div>In welk land zou je graag willen wonen?</div>
                    <div>Wat doe je als je je verveelt?</div>
                    <div>Met welk speelgoed speelde je als kind het meest?</div>
                    <div>Bij welke docent spijbel je het liefst?</div>
                    <div>Als je €100.000,- had, wat zou je dan kopen?</div>
                    <div>Wat is je favoriete bezigheid?</div>
                </div>
                <div class="vragen" style="width: 50%; text-align: center" >
                    <div><input required type="text" name="animal" id=""></div>
                    <div><input required type="text" name="person" id=""></div>
                    <div><input required type="text" name="land" id=""></div>
                    <div><input required type="text" name="verveelt" id=""></div>
                    <div><input required type="text" name="speelgoed" id=""></div>
                    <div><input required type="text" name="docent" id=""></div>  
                    <div><input required type="text" name="kopen" id=""></div>
                    <div><input required type="text" name="bezigheid" id=""></div>
                </div>
            </div>

            <div class="mx-auto" style="width: 100px;">
                <button class="btn btn-danger" name="action" value="resultPaniek">Versturen</button>
            </div>
        </form>
    </div>
 <?php
}



function form_onkunde(){
 ?>
    <div class="main"> 
        <b>onkunde</b>
        <form method="post">
            <div class="d-flex">
                <div class="vragen" style="width: 50%; text-align: center" >
                    <div>Wat zou je graag willen kunnen?</div>
                    <div>Met welke persoon kun je goed opschieten?</div>
                    <div>Wat is je favoriete getal?</div>
                    <div>Wat heb je altijd bij je als je op vakantie gaat?</div>
                    <div>Wat is je beste persoonlijke eigenschap?</div>
                    <div>Wat is je slechtste persoonlijke eigenschap?</div>
                    <div>Wat is het ergste dat je kan overkomen</div>
                </div>
                <div class="vragen" style="width: 50%; text-align: center" >
                    <div><input required type="text" name="kunnen" id=""></div>
                    <div><input required type="text" name="person" id=""></div>
                    <div><input required type="text" name="getal" id=""></div>
                    <div><input required type="text" name="vakantie" id=""></div>
                    <div><input required type="text" name="beste" id=""></div>
                    <div><input required type="text" name="slechtste" id=""></div>  
                    <div><input required type="text" name="overkomen" id=""></div>
                </div>
            </div>

            <div class="mx-auto" style="width: 100px;">
                <button class="btn btn-danger" name="action" value="resultOnkunde">Versturen</button>
            </div>
        </form>
    </div>
 <?php
}

function resulaat_paniek(){
    ?>
    <div class="main"> 
        <b>Er heerst paniek...</b>
        <div class="antwoorden">
            <div>Er heerst paniek in het koninkrijk <?=$_POST["land"]?>, Koning egmod is ten einde raad en als koning <?=$_POST["docent"]?> ten einde raad is, dan roept hij zijn ten-einde-aadsheer <?=$_POST["person"]?>.</div>
            <div>"<?=$_POST["person"]?>! Het is een ramp! het is een schande!"</div>
            <div>"Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?"</div>
            <div>"Mijn <?=$_POST["animal"]?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$_POST["speelgoed"]?> voor het gekocht!"</div>
            <div>"Majesteit, uw <?=$_POST["animal"]?> komt vast vanzelf weer terug?"</div>
            <div>"Ja, da's leuk en aardig, maar hoe moet ik in de tissentijd"<?=$_POST["bezigheid"]?> leren?</div>
            <div>"Maar Sire, daar kunt u toch uw supercomputer voor gebruiken."</div>
            <div>"<?=$_POST["person"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</div>
            <div>"<?=$_POST["verveelt"]?>, sire."</div>
        </div>
    </div>
 <?php
}


function resulaat_onkunde(){
    ?>
    <div class="main"> 
        <b>Onkunde</b>
        <div class="antwoorden">
            <div>Er zijn veel mensen die niet kunnen <?=$_POST["kunnen"] ?>. Neem nou <?=$_POST["person"] ?>. Zelfs met de hulp</div>
            <div>van een <?=$_POST["vakantie"] ?> of zelfs <?=$_POST["getal"] ?> kan <?=$_POST["person"] ?> niet <?=$_POST["kunnen"] ?>. Dat heeft niet te maken met</div>
            <div>een gebrek aan <?=$_POST["beste"] ?>, maar met een te veel aan <?=$_POST["slechtste"] ?>. Te veel <?=$_POST["slechtste"] ?></div>
            <div>leidt tot <?=$_POST["overkomen"] ?> en dat is niet goed als je wilt <?=$_POST["kunnen"] ?>. Helaas voor <?=$_POST["person"] ?>.</div>
        </div>
    </div>
 <?php
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="page">
        <div class="box">
            <div class="title">
                Mad Libs
            </div>
            <div class="content">
                <div class="c1">
                    <div class="red-bar">
                        <form method="post">
                            <div class="d-flex">
                                <div class="option">
                                    <button>Er heerst paniek...</button>
                                </div>
                                <div class="option">
                                    <button name="action" value="onkunde" >onkunde</button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?=$result()?>
             </div>

                <footer>
                    ©Laars inc.
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
<style>
    body{
        background-color: #1f1c1c;
        color: white;
    }
    .title{
        font-size: 70px;
    }
    .page{
        margin: auto;
        width: 80%;
        border: 1px solid red;
    }
    .box{
        padding: 20px;
    }
    .content{
        background-color:white;
        color: black;
        border: 1px solid grey;
    }
    .c1{
        
    }
    .red-bar{
        background-color: red;
        font-size: 25px;
        padding: 10px; 
        color: white;
    }
    .main{
        padding: 20px;
        font-size: 25px;    
    }
    footer{
        background-color: red;
        padding: 15px;
        font-weight: bold;
        font-size: 20px;
        text-align: center;
    }
    .vragen > div{
        height: 40px;
        margin: 10px;
        white-space: nowrap;
    }
    .antwoorden{
        margin: 10px;
        text-align:left;

    }
    .option > button{
        background-color: red;
        border: 1px solid red;
        color: white;
        padding: 8px;
    }
    .option >button:hover{
        background-color: #e62e00;
        border: 1px solid #d9d9d9;
    }
    .option{
        margin-right: 25px;
    }
</style>    