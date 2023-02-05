<?php
include("email-functions.php");
include("code-generate.php");

// if(isset($_POST['send'])) {
//     echo "This is Button1 that is selected";
//     // $to = $_POST['to'];
//     // $subject = $_POST['subject'];
//     // $body = $_POST['body'];

//     $to = "shashishajanith1@gmail.com";
//     $subject = "test";
//     $body = "test msg";

//     echo "consol.log'".$to."' '".$subject."' '".$body."'";
//     send_email($to, $subject, $body);

// }
$genCode = generateCode();
$to = "shashishajanith1@gmail.com";
$subject = "test";
$arrayDigits = str_split($genCode);
$body = include("../account-verify.php");
// "<!DOCTYPE html>
// <html lang='en'>

// <head>
//     <meta charset='UTF-8'>
//     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
//     <meta name='viewport' content='width=device-width, initial-scale=1.0'>
//     <link rel='preconnect' href='https://fonts.googleapis.com'>
//     <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
//     <link href='https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap' rel='stylesheet'>
// </head>
// <body style='width: 600px;'>
//     <div style='width: 100%; height: 10px; background-color: #FF9C00;;'></div>
//     <div style='width: 100%; display: flex; flex-direction: column; align-items: center;font-family: 'Manrope', sans-serif;'>
//         <img src='../assets/sanakin-logo.png' style='width: 200px; margin-top: 30px;' alt='sanakin.lk'>
//         <p style='font-size: 36px; font-weight: bold; color: #000000;'>Verify Your Email</p>
//         <img src='../assets/icons/orange-shild.svg' style='width: 165px;margin-top: 20px;' alt='verify code'>
//         <div style='width: 512px; font-size: 16px;font-weight: 500;margin-top: 30px;'>
//             <p>Thanks for registering an account with <a href='#' style='color: #FF9C00;text-decoration: none;'>Sanakin.lk!</a><br><br>
//                 Find you’r email Verification code and verify your email within 5 minutes. if failure to verify your email within the time duration you have to get a new code and try again.</p>
//         </div>
//         <div style='width: 100%; display: flex; flex-direction: row; justify-content: center; gap: 10px;font-size: 36px; margin-top: 30px; '>
//             <div style='width: 55px; height: 72px; display:flex; justify-content:center;align-items: center; background-color: #F0F0F0;border: 0px soild transparent;border-radius: 5px;'>
//                 <p>".$arrayDigits[0]."</p>
//             </div>
//             <div style='width: 55px; height: 72px; display:flex; justify-content:center;align-items: center; background-color: #F0F0F0;border: 0px soild transparent;border-radius: 5px;'>
//                 <p>".$arrayDigits[1]."</p>
//             </div>
//             <div style='width: 55px; height: 72px; display:flex; justify-content:center;align-items: center; background-color: #F0F0F0;border: 0px soild transparent;border-radius: 5px;'>
//                 <p>".$arrayDigits[2]."</p>
//             </div>
//             <div style='width: 55px; height: 72px; display:flex; justify-content:center;align-items: center; background-color: #F0F0F0;border: 0px soild transparent;border-radius: 5px;'>
//                 <p>".$arrayDigits[3]."</p>
//             </div>
//             <div style='width: 55px; height: 72px; display:flex; justify-content:center;align-items: center; background-color: #F0F0F0;border: 0px soild transparent;border-radius: 5px;'>
//                 <p>".$arrayDigits[4]."</p>
//             </div>
//             <div style='width: 55px; height: 72px; display:flex; justify-content:center;align-items: center; background-color: #F0F0F0;border: 0px soild transparent;border-radius: 5px;'>
//                 <p>".$arrayDigits[5]."</p>
//             </div>
//         </div>
//         <p style='font-size: 16px; font-weight: 500;'>Verification Code</p>
//     </div>
//     <div style='width: 100%;display: flex;flex-direction: column;align-items: center;'>
//         <span style='background-color: gray;width: 512px; height: 2px;'></span>
//         <div style='width: 512px; font-family:  'Manrope', sans-serif; font-size: 14px; text-align: center; color: gray;'>
//             <p>You have received this mandatory service announcement to update you about important changes to <a href='#' style='color: #FF9C00; text-decoration: none;'>Sanakin.lk</a> or your account.</p>
//         </div>
//     </div>

// </div>

// </body>
// </html>";
send_email($to, $subject, $body);


// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $to = $_POST['to'];
//     $subject = $_POST['subject'];
//     $body = $_POST['body'];

//     $to = "shashishajanith1@gmail.com";
//     $subject = "test";
//     $body = "test msg";

//     echo "consol.log'" . $to . "' '" . $subject . "' '" . $body . "'";
//     send_email($to, $subject, $body);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="send_email.php" method="POST">
        <!-- <input type="email" name="to" placeholder="Recipient Email"> -->
        <!-- <input type="text" name="subject" placeholder="Subject"> -->
        <!-- <textarea name="body" placeholder="Email Body"></textarea> -->
        <input type="submit" id="send" name="send" value="Send">
    </form>

</body>

</html>