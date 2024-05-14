<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: lavender;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
    <h1 style="color: rgb(225, 133, 147); text-align:center;">SELAMAT DATANG!</h1>
    <h2 style="color: rgb(225, 133, 147); text-align:center;">
    Welcome <?php echo $_GET["first-name"];
    ?>  <?php echo $_GET["last-name"];
    ?>!<br />
    Your Gender Is <?php echo $_GET["gender"];
    ?> <br />
    Your Nationality Is <?php echo $_GET["negara"];
    ?> <br />
    Your Language Spoke Is <?php echo $_GET["buatbox"];
    ?>  <br />
    Your biodata Is : <?php echo $_GET["massage"];
    ?>  <br /> </h2>
    <h3 style="color: rgb(225, 133, 147); text-align:center;" >Terima kasih telah bergabung di Website Kami <?php echo $_GET["first-name"];
    ?>  <?php echo $_GET["last-name"];
    ?>. Media Belajar kita bersama!</h3>
</body>
</html>