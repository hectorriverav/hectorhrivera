<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2P3XVJRCY2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2P3XVJRCY2');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <meta name="description" content="Welcome! This website aims to demonstrate my front-end developer and SEO skills. And show my developing aptitudes in full-stack and as a cybersecurity analyst.">
    <meta name="keywords" content="Hector H. Rivera, Technical SEO specialist, front-end developer, cybersecurity analyst, internet marketing, web developer ">
    <link rel="stylesheet" href="/build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cb1ec135db.js" crossorigin="anonymous"></script>
    <title>Hector H. Rivera</title>
    <link rel="icon" type="image/x-icon" href="/build/img/favicon-32x32.png">
<!-- schema -->
    <script type="application/ld+json"> 
        {
        "@context": "https://schema.org",
        "@type": "Person",
        "image": "/build/img/favicon-32x32.png",
        "jobTitle": "B.A., SEO, front-end developer, cybersecurity analyst",
        "name": "Hector H. Rivera-Vaca",
        "url": "https://hectorhrivera.com/"
        }
    </script>
</head>
<body>
    <div class="ContentHome">

        <div class="MainHome">
            <main>                             
                <section class="hero__home">

                    <div class="hero__content">                            
                        <button type="button" class="hero__button">
                            <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#101;&#109;&#97;&#105;&#108;&#64;&#104;&#101;&#99;&#116;&#111;&#114;&#104;&#114;&#105;&#118;&#101;&#114;&#97;&#46;&#99;&#111;&#109;"</a>
                            Email me
                            </a>
                        </button>
                    </div>
                </section>
            </main>
        </div>

        <!-- New section begins -->
        <main class="Containter"><!--Menu cards-->        
            <article>

                <section class="CardGeneral containter CardArticle__Layout"> <!--About me-->

                    <div class="CardHeader">
                        <div class="CardGeneral__title" >
                            <h2>Learn about me</h2>
                        </div>
        
                        <div>
                            <img class="CardArticle__Image" src="/build/img/AboutHeroImage.webp" alt="A tablet screen with statistical graphs, a cup of coffee and a cellphone" title="Photo by form PxHere" width="173" height="122">
                        </div>
                    </div>
                        
                    <div class="CardArticle__body">
                        <div class="CardGeneral__text">
                            <p>
                            Business Administrator turned digital marketing & SEO expert. Launched 10+ projects, helping businesses grow for 18 years.
                            </p>
                        </div>
                        
                        <div class="CardArticle__button">
                            <a href="/about">Learn more</a>
                        </div>
                    </div>
                </section>
            </article>
            
            <article class="CardGeneral containter CardArticle__Layout"> <!--Porfolio-->
                <div class="CardHeader">
                    <div class="CardGeneral__title" >
                        <h2>Take a look to my portfolio</h2>
                    </div>
    
                    <div>
                        <img class="CardArticle__Image" src="/build/img/ShakingHands.webp" alt="Two cartoon people chaking hands" >
                    </div>
                </div>
                    
                <div class="CardArticle__body">
                    <div class="CardGeneral__text">
                        <p>
                        Web Deveveloper, Technical SEO expert & SEM Pro. Look at my portfolio for past projects & the skills I bring to your business. 
                        </p>
                    </div>                    
                    <div class="CardArticle__button">
                        <a href="/porfolio">Learn more</a>
                    </div>
                </div>
            </article>           
           
        </main>

            <div>
                <h2> <center>Dig into my blog</center></h2>
            </div>

            <div>
                <p> 
                    <center>I do my best to write clear tech articles (SEO, Web Dev, Cybersecurity) for non-tech audience. See latest on my blog!</center>
                </p>
            </div>
        <!-- New section ends -->

        <!-- NEW blog section begins -->
        
        <div class="Blog"> <!--Blog Sections-->
            <section  class="Blog__Sections">
                <div>
                    <h2 id="blog-sections" >Blog Sections</h2>
                    <div class="Blog__Section">
                        <div>
                            <div class="Blog__Sections__Button">
                                <a href="./Blog/Marketing/marketing">Marketing</a>
                            </div>
                        </div>
                        
                        <div>
                            <div class="Blog__Sections__Button">
                                <a href="./Blog/SEO/seo">SEO</a>
                            </div>
                        </div>

                        <div>
                            <div class="Blog__Sections__Button">
                                <a href="./Blog/Web-Dev/web-dev">Web Dev</a>
                            </div>
                        </div>

                        <div>
                            <div class="Blog__Sections__Button">
                                <a href="./Blog/Cybersecurity/security">Cybersecurity</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- NEW blog section ends -->

        </main>

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