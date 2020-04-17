<!DOCTYPE html>
<html>
    <head>
        <title>Solidarios en Red Tucumán</title>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="images/sert2.png">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>

        <!-- Wrapper -->
        <div id="wrapper" class="divided">

            <!-- One -->
            <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
                <div class="content">
                    <h1>Solidarios en Red Tucumán</h1>
                    <p class="major">Somos la Red de Organizaciones de la Sociedad Civil (OSC-ONG) más grande de la provincia de Tucumán</p>
                    <ul class="actions vertical">
                        <li><a href="#first" class="button big wide smooth-scroll-middle">Empezá a conocernos</a></li>
                    </ul>
                </div>
                <div class="image">
                    <img src="images/sert2.png" alt="" />
                </div>
            </section>

            <!-- Two -->
            <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
                <div class="content">
                    <p>Estamos convencidos que nuestra sociedad necesita unir fuerzas para lograr mayores impactos en las acciones que realizamos, 
                        y para ello tenemos que tejer redes de trabajo articulando entre los diferentes actores sociales presentes.</p>
                    <ul class="actions vertical">
                        <li><a href="#second" class="button big wide smooth-scroll-middle">Conocé más</a></li>
                    </ul>
                </div>
                <div class="image">
                    <img src="images/diaparadar.jpg" alt="" />
                </div>
            </section>

            <!-- Three -->
            <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in" id="second">
                <div class="content">
                    <h2>Nuestra misión es </h2>
                    <p>Generar conciencia solidaria a través de la difusión de las actividades que hacemos las OSCs.</p>
                    <p>Promover un espacio de encuentro con el fin de articular acciones que contribuyan a una sociedad más justa, integrada e igualitaria.</p>
                    <p>Fomentar el concepto de Responsabilidad Social Empresarial en Tucumán.</p>
                    <ul class="actions vertical">
                        <li><a href="#third" class="button big wide smooth-scroll-middle">Somos muchos!</a></li>
                    </ul>
                </div>
                <div class="image">
                    <img src="images/teatro.jpg" alt="" />
                </div>
            </section>

            <!-- Five -->
            <section class="wrapper style1 align-center">
                <div class="inner" >
                    <h2>Mirá cuantos somos...</h2>
                    <p id="third" >Estas son algunas de las Organizaciones de la Sociedad Civil que forman parte de Solidarios en Red Tucumán.</p>
                </div>

                <!-- Gallery -->
                <div class="gallery style2 medium lightbox onscroll-fade-in">
                    <?php for ($i = 1; $i < 77; $i++) { ?>
                        <article>
                            <a href="images/gallery/fulls/0<?php echo $i; ?>.jpg" class="image">
                                <img src="redimensionarimagen.php?w=240&h=150&img=images/gallery/fulls/0<?php echo $i; ?>.jpg" alt="" />
                            </a>
                        </article>
                    <?php } ?>

                </div>

            </section>

            <!-- Seven -->
            <section class="wrapper style1 align-center">
                <div class="inner small" id="templatemo_contactform" name="templatemo_contactform">
                    <h2>Contáctanos!</h2>
                    <form method="post" action="#">
                        <div class="field half first">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" value="" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="" />
                        </div>
                        <div class="field">
                            <label for="message">Mensaje</label>
                            <textarea name="message" id="message" rows="6"></textarea>
                        </div>
                        <ul class="actions">
                            <button type="button" class="button big wide" onClick="enviar()">Enviar el mensaje</button>
                            <!--<li><input type="submit" name="submit" id="submit" value="Enviar el mensaje" /></li>-->
                        </ul>
                    </form>
                </div>
            </section>

            <!-- Footer -->
            <footer class="wrapper style1 align-center">
                <div class="inner">
                    <ul class="icons">
                        <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/SolidariosEnRedTucuman/" class="icon style2 fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
                        <li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
                    </ul>
                </div>
            </footer>
        </div>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
        function validarEmail()
        {
            //Creamos un objeto 
            object = document.getElementById('email');
            valueForm = object.value;

            // Patron para el correo
            var patron = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
            if (valueForm.search(patron) == 0)
            {
                return true;
            }
            object.style.color = "#f00";
            alert("El email es incorrecto");
            return false;
        }
        function validarCampos() {
            if ($.trim($('#name').val()) != "" && $.trim($('#message').val()) != "") {
                return true;
            } else {
                alert("Complete todos los campos correctamente");
                return false;
            }
        }
        function enviar() {

            if (validarEmail($.trim($('email').val())) && validarCampos()) {
                var param = {
                    'nombre': $.trim($('#name').val()),
                    'mail': $.trim($('#email').val()),
                    'message': $.trim($('#message').val())
                };
                $.ajax({
                    data: param,
                    url: 'scripts/mail.php',
                    type: 'post',
                    success: function (response) {
                        $('#templatemo_contactform').css('display', 'none');
                        $('#templatemo_contactform').html(response);
                        $('#templatemo_contactform').fadeIn(800);
                    }
                });
            }
        }
    </script>

    </body>
</html>
