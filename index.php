<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LandingPage</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="slider">
        <section class="secPrincipal" id="principal">
            <section class="secPrincipal__containerInfo">
                <img src="./assets/Logo.svg" alt="" class="secPrincipal__containerInfo-logo">

                <h1 class="secPrincipal__containerInfo-tittle">Take your brand to <br> another level.</h1>
                <h2 class="secPrincipal__containerInfo-subtittle">With really attractive designs</h2>
                <p class="secPrincipal__containerInfo-parrafo">I can give you a landing page that captures the attention
                    you need to increase your reach
                </p>

                <a href="" class="secPrincipal__containerInfo-btn">Go to your website</a>

                <article class="secPrincipal__containerInfo-networks">
                    <a href="https://www.facebook.com/profile.php?id=100090796002084" target="_blank"><img src="./assets/facebook.svg" alt=""></a>
                    <a href="https://instagram.com/pecrash_dev?igshid=YmMyMTA2M2Y=" target="_blank"><img src="./assets/instagram.svg" alt=""></a>
                    <a href=""><img src="./assets/twitter.svg" alt=""></a>
                </article>
            </section>
            <section class="secPrincipal__containerImg">
                <a href="#contacto" class="secPrincipal__containerImg-contact">contact me</a>

                <article class="secPrincipal__containerImg-parrafo">
                    <p>I can make you an <br> illustration too</p>
                    <p>Puedo hacer una ilustración para ti también</p>
                </article>

                <img src="./assets/Character-F.svg" alt="" class="secPrincipal__containerImg-img">
            </section>
        </section>

        <section class="slider__section" id="form">
            <h1>No dudes en contactarme</h1>
            <p>*Este es un website de muestra, sin embargo no dudes en llenar el formulario para contactarte conmigo,
                el mensaje llegará a mi correo real*</p>

            <form class="slider__section_form" id="contacto" action="https://formspree.io/f/mayzekjk" method="POST">
                <input type="text" class="slider__section_form-box" name="name" required>
                <label for="" class="slider__section_form-label">
                    <span>Tu Nombre</span>
                </label>

                <input type="text" class="slider__section_form-box" name="phone" required>
                <label for="" class="slider__section_form-label">
                    <span>Número de Teléfono</span>
                </label>

                <input type="text" class="slider__section_form-box" name="email" required>
                <label for="" class="slider__section_form-label">
                    <span>Correo</span>
                </label>

                <textarea class="slider__section_form-box message" name="subject" required></textarea>
                <label for="" class="slider__section_form-label message">
                    <span>Mensaje</span>
                </label>

                <div class="slider__section_form-submit">
                    <input type="submit" class="slider__section_form-submit-btn" value="Enviar">
                </div>
            </form>
        </section>

        <section class="slider__controls" id="controls">
            <a href="#principal" class="slider__controls-ball active" id="principal"></a>
            <a href="#form" class="slider__controls-ball" id="form"></a>
        </section>
    </div>

    <script src="./src/index.js"></script>
</body>

</html>