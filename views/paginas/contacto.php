<?php

    require_once './controllers/ServicioController.php';

    //$servicio = new ServicioController();

?>


<!-- MAIN CONTAINER -->
<main class="main__contact-container ">
    <!-- Banner contact -->
    <section class="banner__cto">
        <div class="banner__cto--box m-top-sect l-container">
            <h1 class="title">Nos encanta estar cerca de nuestros clientes</h1>
            <span class="border__bottom"></span>
            <p class="subtitle U-opacity-9">Contactar con Chip Designs es comunicarnos en privado y poder analizar las necesidades requeridas.</p>
            <h3 class="title">
                !No dudes y comentanos en que podemos ayudarte!
            </h3>
        </div>
        <div class="banner__cto--image center-block l-section l-container">
            <img src="assets/img/banner-contacto.jpg" alt="Banner contacto chip designs" class="image center-block">
        </div>
    </section>

    <!-- Section two action info contact -->
    <section class="contact__info__action ">
        <div class="contact__info__action--description-2 l-container p-top p-bottom">
            <!--<h3 class="title medium">¿Estás interesado? <br> No dudes en llenar el formulario de contacto</h3>-->
            <h3 class="txt responsive-l-font">Escribenos si necesitas optimizar tu sitio o diseñar una página web.</h3>
            <h4 class="txt responsive-l-font">Si necesitas una audotoría y mejorar la <span class="enfasis-title-1">optimización</span> <span class="enfasis-title-2">WEB-SEO</span>.</h4>
        </div>
    </section>

    <!-- Section three - action info form -->
    <section class="main__form__box">
        <div class="form__content">
            <article class="form__content--info">
                <div class="title-box m-b">
                    <h3 class="title responsive-l-font">Información de contácto</h3>
                    <span class="border__bottom"></span> 
                </div>
                <p class="txt m-b">Mas información detallada por si quieres ponerte en contacto con nuestro equipo</p>
                <ul class="contact__info__list">
                    <li class="contact__info__list--item">
                        <p class="txt">Atención comercial:</p>
                        <small>Teléfono: 699 206 774</small>
                        <small>Email: info@chipdesigns.com</small>
                    </li>
                    <li class="contact__info__list--item">
                        <p class="txt">Soporte técnico:</p>
                        <small>Teléfono: 699 206 774</small>
                        <small>Email: soporte@chipdesigns.com</small>
                    </li>
                    <li class="contact__info__list--item">
                        <p class="txt">Horarios:</p>
                        <p class="txt">Nuestro horario comercial:</p>
                        <small>Lunes a viernes: De 10:00 a 14:00 y De 16:00 a 20:30</small>
                        <small>Sabado: De 10:00 a 14:00</small>
                    </li>
                    <li class="contact__info__list--item">
                        <p class="txt">Localización:</p>
                        <small>Madrid</small>
                        <small>Granada</small>
                    </li>
                </ul>
            </article>
            <aside class="form__content--box">
                <div class="title-box m-b">
                    <h3 class="title responsive-l-font">Contáctanos!</h3>
                    <span class="border__bottom"></span> 
                </div>
                <p class="txt m-b">Rellena el formulario y nos pondremos en contacto contigo</p>
                <form class="form" action="">
                    <div class="form--item">
                        <!--<label class="tag-name" for="name">Nombre</label>-->
                        <input id="name" class="form-style-name" placeholder="Nombre" type="text" name="name" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚú\s]+$">
                    </div>
                    <div class="form--item">
                        <!--<label class="tag-email m-b" for="email">Email</label>-->
                        <input id="email" class="form-style-email" placeholder="Email" type="email" name="email" pattern="^[a-z0-9-]+
                        (\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$">
                        <!--Expresión regular de html5 para validar que se escriba correctamente el email con
                        @ antes y despues > pattern="^[a-z0-9-]+
                        (\.[a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$""--> 
                    </div>
                    <div class="form--item">
                        <!--<div class="m-b"><label class="tag-consulta" for="consulta">Consulta</label></div>-->
                        <textarea class="form-style-consulta" placeholder="Consulta" name="consulta" id="consulta" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form--item">
                        <div>
                            <!--<label class="tag-privacidad" for="privacidad">Política de privacidad</label>-->
                        </div>
                            <input class="form-stylecheckbox" type="checkbox">
                            <label class="tag-privacidad" for="">He leído y acepto la <a href="#">Política de privacidad</a></label>
                        </div>
                    <div class="form--item center-block">
                        <input class="form-style-btn buttom-1" type="submit" value="Enviar">
                    </div>
                    
                </form>
            </aside>
        </div>
    </section>

</main>
<!-- MAIN CONTAINER END -->

