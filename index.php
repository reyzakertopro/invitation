<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Invitation</title>

    <!-- GoogleFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Barlow:wght@200;400&family=Dancing+Script:wght@500;600;700&family=Kaushan+Script&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/1020a358ce.js" crossorigin="anonymous"></script>

    <style>
      *{
        padding: 0;
        margin: 0;
        text-decoration: none;
        border: none;
        box-sizing: border-box;
      }

      body{font-family: 'Barlow', sans-serif;}

      .tombol{
        background-color: #010101;
        color: #fff;
        display: flex;
        align-items: center;
        padding: .35em .5em;
        gap: .5em;
      }

    </style>

  </head>

  <body>
    <audio id="myAudio"><source src="audio/TheOvertunes  I Still Love You Acoustic Version.mp3" type="audio/mpeg"></audio>

    <main>
      <?php include 'header.php'; ?>

      <?php include 'meta.php'; ?>

      <?php include 'carousel.php'; ?>

    </main>

  </body>

</html>
