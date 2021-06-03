<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script async src='https://platform.twitter.com/widgets.js' charset='utf-8'></script>
    <style>
        .flexbox-centering {
            border: 3px solid aquamarine;
            background: linear-gradient(to right, #1fa2ff, #12d8fa, #a6ffcb);
            font-family: E;
            font-size: 27px;
            display: flex;
            border-radius: 9px;
            width: 99.5%;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 1%;
            left: 0%;
            height: 100px;
        }
        .tweets{
            position: absolute;
            top: 16%;
            width: 40%;
        }
    </style>
</head>
<body>
<div class="tweets">
<div id="demo" ></div>
<div id="demo2" ></div>
<div id="demo3" ></div>
<div id="demo4" ></div>
<div id="demo5" ></div>
</div>
<div id="jeff"></div>
<?php
session_start();  
$fsys0 = session_id();
//echo($fsys0);
/*$session = session_id();
global $text;*/
$user = $_SESSION['username'];
//ignore_user_abort(true); <== use with caution, may load results form previous tests!
//ob_end_flush();
//ob_implicit_flush();
//echo("Hey Vsauce, Michael here90000!");
//$fh = fopen( "ids.txt", "w" );
//fclose($fh);
exec("chmod -R 777 ids{$fsys0}0.txt");
exec("chmod -R 777 ids{$fsys0}1.txt");
exec("chmod -R 777 ids{$fsys0}2.txt");
exec("chmod -R 777 ids{$fsys0}3.txt");
exec("chmod -R 777 ids{$fsys0}4.txt");
error_reporting(E_ERROR | E_PARSE);
for($k = 0; $k < 1500; $k++){
    sleep(2);
    $fs0 = "ids{$fsys0}0.txt";
    echo($fs0);
    $myfile = fopen($fs0, "r") or die("Unable to open file0!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text = fgets($myfile);
    if(strlen( $text ) === 0){
        die();
    }
    else{
        $fullurl = "https://twitframe.com/show?url=https://twitter.com{$text}";
        echo($fullurl);
        break;
    }
}
for($k2 = 0; $k2 < 20; $k2++){
    sleep(1);
    $fs1 = "ids{$fsys0}1.txt";
    $myfile2 = fopen($fs1, "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text2 = fgets($myfile2);
    if( $text === $text2){
        echo("no update(from php)2");
        echo($fs1);
    }
    else{
        $fullurl2 = "https://twitframe.com/show?url=https://twitter.com{$text2}";
        echo($fullurl2);
        break;
    }
}
for($k3 = 0; $k3 < 20; $k3++){
    sleep(1);
    $fs2 = "ids{$fsys0}2.txt";
    $myfile3 = fopen($fs2, "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text3 = fgets($myfile3);
    if( $text2 === $text3){
        if($k3 > 5){
            echo("That's all!(from php)");
            $fullurl3 = " ";
            echo($fullurl3);
            break;
        }
        else{
            echo("still waiting for third tweet...");
        }
    }
    else{
        $fullurl3 = "https://twitframe.com/show?url=https://twitter.com{$text3}";
        echo($fullurl3);
        break;
    }
}
for($k4 = 0; $k4 < 20; $k4++){
    sleep(1);
    $fs3 = "ids{$fsys0}3.txt";
    $myfile4 = fopen($fs3, "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text4 = fgets($myfile4);
    if( $text3 === $text4){
        if($k4 > 5){
            echo("That's all!(from php)");
            $fullurl4 = " ";
            echo($fullurl4);
            break;
        }
        else{
            echo("still waiting for forth tweet...");
        }
    }
    else{
        $fullurl4 = $text4;
        echo($fullurl4);
        break;
    }
}
for($k5 = 0; $k5 < 20; $k5++){
    sleep(1);
    $fs4 = "ids{$fsys0}4.txt";
    $myfile5 = fopen($fs4, "r") or die("Unable to open file!");
    //$text = fread($myfile,filesize("ids.txt"));
    $text5 = fgets($myfile5);
    if( $text4 === $text5){
        if($k5 > 5){
            echo("That's all!(from php)");
            $fullurl5 = " ";
            echo($fullurl5);
            break;
        }
        else{
            echo("still waiting for fifth tweet...");
        }
    }
    else{
        $fullurl5 = $text5;
        echo($fullurl5);
        break;
    }
}
?>
<script>
const sleep = (delay) => new Promise((resolve) => setTimeout(resolve, delay))

window.addEventListener('load', function () {
  const repeatedGreetings = async () => {
    alert("still here")
    var clone = 0;
    rank = [];
    var text = "";
    text += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$text?>?ref_src=twsrc%5Etfw'></a></blockquote>";
    document.getElementById("demo").innerHTML = text;
    var text2 = "";
    text2 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$text2?>?ref_src=twsrc%5Etfw'></a></blockquote>";
    document.getElementById("demo2").innerHTML = text2;
    try{
      var text3 = "";
      text3 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$text3?>?ref_src=twsrc%5Etfw'></a></blockquote>";
      document.getElementById("demo3").innerHTML = text3;
    }
    catch{
      console.log("only two tweets(from JS)3")
    }
    try{
      var text4 = "";
      text4 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$fullurl4?>?ref_src=twsrc%5Etfw'></a></blockquote>";
      document.getElementById("demo4").innerHTML = text4;
    }
    catch{
      console.log("only two tweets(from JS)4")
    }
    try{
      var text5 = "";
      text5 += "<blockquote class='twitter-tweet'><a href='https://twitter.com<?=$fullurl5?>?ref_src=twsrc%5Etfw'></a></blockquote>";
      document.getElementById("demo5").innerHTML = text5;
    }
    catch{
      console.log("only two tweets(from JS)5")
    }
  }
  repeatedGreetings()
});
</script>
<div class="flexbox-centering">
  <div><?=$user?>'s top 5 tweets from 2021-04-01 to 2021-04-08</div>
</div>
<?php
/*file_put_contents("ids0.txt", "");
file_put_contents("ids1.txt", "");
file_put_contents("ids2.txt", "");
file_put_contents("ids3.txt", "");
file_put_contents("ids4.txt", "");*/
unlink("ids{$fsys0}0.txt");
unlink("ids{$fsys0}1.txt");
unlink("ids{$fsys0}2.txt");
unlink("ids{$fsys0}3.txt");
unlink("ids{$fsys0}4.txt");
echo("unlinked!!!!!!!!!!");
//session_destroy();
?>
</body>
</head>