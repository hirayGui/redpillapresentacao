<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redpill</title>
    <!--Importando bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--Importando animações adicionais-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--Importando webslides-->
    <link rel="stylesheet" href="css/webslides.css">
    <!--Importando fonte MontSerrat-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;800&display=swap" rel="stylesheet">
    <!--Importando CSS-->
    <link rel="stylesheet" href="css/style.css">
    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <main role="main">
        <article id="webslides" class="horizontal">
            <!--Slide 1-->
            <?php
            require './slides/slide1.php';
            ?>

            <!--Slide 2-->
            <?php
            require './slides/slide2.php';
            ?>

            <!--Slide 3-->
            <?php
            require './slides/slide3.php';
            ?>

            <!--Slide 4-->
            <?php
            require './slides/slide4.php';
            ?>

            <!--Slide 5-->
            <?php
            require './slides/slide5.php';
            ?>

            <!--Slide 6-->
            <?php
            require './slides/slide6.php';
            ?>

            <!--Slide 7-->
            <?php
            require './slides/slide7.php';
            ?>

            <!--Slide 8-->
            <?php
            require './slides/slide8.php';
            ?>

            <!--Slide 9-->
            <?php
            require './slides/slide9.php';
            ?>

            <!--Slide 10-->
            <?php
            require './slides/slide10.php';
            ?>

            <!--Slide 11-->
            <?php
            require './slides/slide11.php';
            ?>

            <!--Slide 12-->
            <?php
            require './slides/slide12.php';
            ?>

            <!--Slide 13-->
            <?php
            require './slides/slide13.php';
            ?>

            <!--Slide 14-->
            <?php
            require './slides/slide14.php';
            ?>

            <!--Slide 15-->
            <?php
            require './slides/slide15.php';
            ?>
        </article>
    </main>

    <!--Importando bootstrap-->
    <script src="js/bootstrap.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <!--Importando webslides-->
    <script src="js/webslides.js"></script>

    <script>
        window.ws = new WebSlides();
    </script>
</body>

</html>