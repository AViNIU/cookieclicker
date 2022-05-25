<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">

</head>

<body>
    <div class="cookie" onclick="cookieClick()" id="btn"><p id="numbers" class="hajs" onclick="click()"></p></div>
    <div class="mult" onclick="addmult()"><p id="error" class="err"></p></div>
    
    <p id="kup"></p>
    <p id="abc"></p>
    
    <script>
        var num = 0;
        var cookie = document.getElementById("cookie");
        var mult = 1;
        var buy = 20;

        function addmult() {
            if (num >= buy) {
                num -= buy;
                buy *= 3;
                mult += 1;

            } else {
                var xD = document.getElementById("error");
                xD.innerHTML = "masz za malo pieniedzy";
                setTimeout(() =>{
                    var xD = document.getElementById("error");
                    xD.innerHTML = "";
                }, 5000);
            }
            update();
        }
    

        function cookieClick() {
            num += 1 * mult;
            document.getElementById("btn").style.borderColor = "red";
            document.getElementById("btn").style.boxShadow
            setTimeout(() =>{
                document.getElementById("btn").style.borderColor = "black";     
                }, 100);
            update();
        }

        function update() {
            var numbers = document.getElementById("numbers");
            numbers.innerHTML = num;
            var mo = document.getElementById("kup");
            mo.innerHTML = buy;
            var multip = document.getElementById("abc");
            multip.innerHTML = "mnoznik :" + mult + "x";
        }
    </script>
</body>

</html>