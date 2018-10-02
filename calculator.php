<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>Arithmetic Calculator</h1>
<img src="kids.png" width="300" height="300" ><br/><br/>
Introduce expression (Example: 5+3*2)<br/>
<input id="expression" size="44" type="text"/><br/><br/>
Result:<br/>
<input id="result" type="text"/><br/><br/>
<button id="cleanBtn">Clean</button><br/>

<div id="textDisplay"></div>
<div id="imgDisplay" display="none">
    <img src="happyMonkey.gif" id="happyMonkey" style="display:none">
    <img src="sadMonkey.gif" id="sadMonkey" style="display:none">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.3.0/math.min.js" type="text/javascript"></script>
<script>


    $("input").on("input", function() {
        compare(math.eval($("#expression").val()));
    });

    function compare(res) {
        var userRes = $("#result").val();
        if (userRes == null || userRes==""){
            return;
        }else {
            if (res == userRes) {
                var correct = $("#textDisplay");
                correct.text("CORRECT!");
                correct.css({color: "green", fontSize: "x-large"});
                addImageCorrect();

            } else {
                var wrong = $("#textDisplay");
                wrong.text("WRONG!");
                wrong.css({color: "red", fontSize: "x-large"});
                addImageIncorrect();

            }
        }
    }

    function addImageCorrect(){
        $("#sadMonkey").css("display","none");
        $("#happyMonkey").css("display","inline");
    }

    function addImageIncorrect(){
        $("#sadMonkey").css("display","inline");
        $("#happyMonkey").css("display","none");
    }

    $("input").on("input", function() {
        calculate();

    });
    $("#op").on("change", function() {
        calculate()
    });
    $("#cleanBtn").click(function(){
        $("#leftOp").val("");
        $("#rightOp").val("");
        $("#result").val("");
        $("#sadMonkey").css("display","none");
        $("#happyMonkey").css("display","none");
        $("#textDisplay").text("");

    });


</script>
</body>
</html>
