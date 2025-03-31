<?php include 'includes/header.php'; ?>


        <div class="wrapper">

            <header class="pagetitle pagetitle-sm">
                <div class="container">
                    <div class="divtable irow">
                        <div class="divcell">
                            <h1>
                                Contacto
                            </h1>
                            <div class="divider">
                            </div>
                            <span class="subtitle">
                                Informacion de contacto
                            </span>
                        </div>
                    </div>
                </div>
            </header>

 
            <div class="content no-pt">
                <div class="container">
                    <div class="row irow-sm text-center cols-border contact-wrap">
                        <div class="col-md-3 col-xs-6">
                            <div class="icon icon-size-4 celeste">
                                <i class="fa fa-clock-o">
                                </i>
                            </div>
                            <h4>
                                Horario de atención
                            </h4>
                            <address>
                                Contáctenos de Lunes a Viernes<br/>de 9 a 17 hs (0300 UTC)
                            </address>
                            <div class="heading-divider">
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="icon icon-size-4 celeste">
                                <i class="fa fa-map-marker">
                                </i>
                            </div>
                            <h4>
                                Donde estamos?
                            </h4>
                            <address>
                                Chile 1890,<br/>
                                Lanus, Buenos Aires,<br/>
                                Argentina<br/>
                                CP: B1822FGV
                            </address>
                            <div class="heading-divider">
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="icon icon-size-4 celeste">
                                <i class="fa fa-phone">
                                </i>
                            </div>
                            <h4>
                                Teléfonos
                            </h4>
                            <address>
                                Tel/Fax: +54-11-4208-9441
                            </address>
                            <div class="heading-divider">
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="icon icon-size-4 celeste">
                                <i class="fa fa-envelope-o">
                                </i>
                            </div>
                            <h4>
                                Emails
                            </h4>
                            <address>
                                <a href="mailto:ventas@agclima.com.ar">
                                    ventas@agclima.com.ar
                                </a>
                                <br/>
                            </address>
                            <div class="heading-divider">
                            </div>
                        </div>
                    </div>
                    <div class="google-map map-wrap">
                        <div class="google-map-container" data-center="-34.666791, -58.402390" data-markers="-34.666791, -58.402390" data-zoom="11">
                        </div>
                        <a class="a-map" data-toggle="modal" href="#map-modal">
                            <i class="fa fa-arrows-alt">
                            </i>
                        </a>
                    </div>
                </div>
                


                <hr class="hr-nobg"/>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4>Fomulario de Contacto</h4>
                            <p>Para más detalles comunicate con nosotros. Estamos muy atentos a tus comentarios.</p>
                            <hr class="hr-nobg"/>
                            <h6 class="celeste">RECURSOS HUMANOS</h6>
                            <p>Nuestro equipo de trabajo está en constante crecimiento.<br/>
Envie su CV a nuestras oficinas de Recursos Humanos a la espera de una oportunidad laboral o envíelo online.</p>
                            
                            <a class="btn btn-primary btn-border" href="mailto:rhseleccion@mideacarrier.com?subject=Envío Currículum desde Web AGClima">
                                Enviar CV
                            </a>
                        </a>
                        </div>
                        <div class="col-sm-8">
                            <form action="#" class="contact-form form-solid" method="post" novalidate="">
                                <div class="form-group">
                                    <label for="send-form-name">
                                        Nombre
                                    </label>
                                    <input id="send-form-name" name="name" required="required" type="text"/>
                                </div>
                                <div class="form-group">
                                    <label for="send-form-email">
                                        Email
                                    </label>
                                    <input id="send-form-email" name="email" required="required" type="email"/>
                                </div>
                                <div class="form-group">
                                    <label for="send-form-select">
                                        Tipo de Consulta
                                    </label>
                                    <select id="send-form-select">
                                        <option value="Comercial">
                                            Comercial
                                        </option>
                                        <option value="Técnica">
                                            Técnica
                                        </option>
                                        <option value="Garantías">
                                            Garantías
                                        </option>
                                        <option value="Repuestos">
                                            Repuestos
                                        </option>
                                        <option value="Recursos Humanos">
                                            Recursos Humanos
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="send-form-message">
                                        Mensaje
                                    </label>
                                    <textarea id="send-form-message" name="message" required="required">
                                    </textarea>
                                </div>
                                <input class="btn btn-primary btn-wide" type="submit" value="Enviar">
                                    <p class="succs-msg">
                                        El mensaje fue enviado correctamente
                                    </p>
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



  
        </div> <!-- fin wraper -->

        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAR4o9o4rMIiAHJU8fngffE1jvdHb2aXzk&v=3.exp&sensor=false&ver=1">
        </script>

        <script src="js/jquery-2.1.4.min.js">
        </script>
        <script src="js/bootstrap.min.js">
        </script>
        <script src="js/plugins.js">
        </script>
        <script src="js/fontawesome-markers.min.js">
        </script>
        <script src="js/custom.js">
        </script>
        <script src="js/ga.js">
        </script>

        
        <?php include 'includes/footer.php'; ?>


        <!-- Whatsapp Button -->
        <script>

            const wspBtn = document.getElementById('whatsappBtn');
            wspBtn.addEventListener('click', () => {
                window.open('https://wa.me/541122444412', '_blank');
            });

        </script>

    </body>
</html>