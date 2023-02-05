<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background: #008b8b;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    form,button,.check{
        text-align: center;
    }
    b{
        font-size: 35px;
        color: #ff7f50;
    }
    span{
        font-size: 35px;
        color: aqua; 
    }
    div{
        font-family: timenewsroman;
        font-size: 20px;
    }
    div,.text1{
        color: #ffebcd;
    }
    div,.text2{
        color: #00FFFF;
    }
    div,#mung{
        height: 25px;
    }
    div,#day{
        height: 25px;
    }
    button{
        font-size:15px;
        font-weight:bold;
        height: 30px;
        width: 90px;
        background: #FFCCCC;
        border: 3px solid purple;
        border-radius: 10px;
        margin-top: 10px;
        justify-content: center;
    }
    button:hover{
        cursor: pointer;
    }
    button:hover{
        background-color: orange;
        font-size: 100%;
        color: blue;
    }
</style>
<body>
    <?php
    $day = $_POST["mung"];
    switch($day) {
        case 1:
            $day = "Visit Papa"; break; 
        case 2:
            $day = "Visit Mama"; break;
        case 3:
            $day = "Visit Myfriends"; break;
        case 4:
            $day = "Sleep every Day"; break;
        case 5:
            $day = "Play football in game"; break;
        case 6:
            $day = "Work some thing to do"; break;
        case 7:
            $day = "Return PNV"; break;
        case 8:
            $day = "This day finish Tet holiday"; break;
    }
    ?>

    <form action="demo.php" method = "post">
    <b>WHAT SHOULD <span>YOU DO ??</span></b><br><br>
        <div class="text1">
            Enter today's date:
            <input type="text" name="mung" id="mung" placeholder="Click here" style="background-color: #006666">
        </div><br>
        <div class="text2">
            Today you going to: 
            <input type="text" name="day" id="day" value="<?php echo $day;?>" readonly="true" style="background-color: #99CCFF">
        </div><br>
        <button class="check" type="submit" name="submit">Check</button>
        
    </form>
</body>
</html>