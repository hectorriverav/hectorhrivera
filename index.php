<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome! This website aims to demonstrate my front-end developer and SEO skills. And show my developing aptitudes in full-stack and as a cybersecurity analyst.">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cb1ec135db.js" crossorigin="anonymous"></script>
    <title>Hector H. Rivera</title>
    <link rel="icon" type="image/x-icon" href="/build/img/favicon-32x32.png">
</head>
<body>
    <div class="ContentHome">

        <div class="MainHome">
            <main>                             
                <section class="hero__home">

                    <div class="hero__content">

                        <p class="inConstruction" >Sorry for the dust... I'm still building this webiste</p>
                    
                        <!-- <h1 class="hero__title">
                            Hector H. Rivera
                        </h1>

                        <p class="hero__text">
                            Commercial Engineer | Technnical SEO | Web developer
                        </p> -->
                            
                        <button type="button" class="hero__button">
                            <a href="mailto:email@hectorhrivera.com">
                            Email me
                            </a>
                        </button>
                    </div>
                </section>
            </main>
        </div>
        
        <footer>
        <!--Menu-->
        <?php

        include "./includes/templates/top-menu.php"

        ?>
            <!-- Credits -->
            <div class="credits">
                <p>
            Hector H. Rivera Vaca &copy; <?php $year=date("Y"); echo $year?>
                </p>
            </div>
        </footer>
    </div>
        
    <script src="/script.js"></script>

</body>

</html>