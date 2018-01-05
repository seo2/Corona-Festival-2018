<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Compra tu entrada para Corona Festival, Descubre quienes ser&aacute;n parte del festival y participa por estad&iacute;a, entradas y m&aacute;s!">
        <meta name="author" content="">
        <title>Corona Festival</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/landing-page.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="https://pjax.herokuapp.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.rut.js"></script>
    </head>
    <body id="main" class="intro-header-inicio">  
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="intro-message-inicio " >
                        <div class="boximg"><img src="img/logocorona.png" style="    margin: 0 auto;" class="img-responsive"/></div>
                        <div id="paso1">
                            <h3 class="text-uppercase mgtopbot">Felicitamos a los ganadores:</h3>
                            <h3 class="text-uppercase txt-mobile"><span class="amarillo">Ana María Morales Gonzalez +1</span></h3>
                            <h3 class="text-uppercase txt-mobile"><span class="amarillo">Cristian Ignacio Parsons Torrens +1</span></h3>
                            <h3 class="text-uppercase txt-mobile"><span class="amarillo">Patricia Soledad Hernandez Sanchez +1</span></h3>
                            <h3 class="text-uppercase txt-mobile"><span class="amarillo">Cristian Augusto Araneda Silva +1</span></h3>
                            <h3 class="text-uppercase txt-mobile"><span class="amarillo">Isidora Nataly Seen silva +1</span></h3>
                            <a href="/"><div class="boxcontinue"><h4 class="text-uppercase amarillo">Volver</h4></div></a> 
                        </div>
                    </div>
                    <!--
                    <div class="intro-message-inicio" id="paso2">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                                <div class="well-title">
                                    <h4 class="text-uppercase mgtopbot">Completa el formulario para participar<br class="hidden-xs">
                                        por ski pass, entradas y viajes a<br class="hidden-xs"><span class="amarillo">
                                            Corona FESTIVAL, Nevados de Chillán</span></h4>
                                </div>
                                <form action="sendbd.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="name" name="nombre" type="text" placeholder="NOMBRE*" required class="form-control input-md input-custom">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="email" name="apellido" type="text" placeholder="APELLIDO*" required class="form-control input-md input-custom">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input id="rut" name="rut" type="text" placeholder="RUT*" maxlength="12" pattern="[0-9]{1,2}.[0-9]{3}.[0-9]{3}-[0-9Kk]{1}" class="form-control input-md input-custom" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control input-custom" name="region" style="text-align-last: center; text-align: center;" required>
                                                    <option selected >REGI&Oacute;N*</option>
                                                    <option value="Region Metropolitana" >Región Metropolitana</option>
                                                    <option value="XV Arica y Parinacota" >XV Arica y Parinacota</option>
                                                    <option value="I Tarapaca">I Tarapacá</option>
                                                    <option value="II Antofagasta">II Antofagasta</option>
                                                    <option value="III Atacama">III Atacama</option>
                                                    <option value="IV Coquimbo">IV Coquimbo</option>
                                                    <option value="V Valparaiso">V Valparaíso</option>
                                                    <option value="VI O'Higgins">VI O'Higgins</option>
                                                    <option value="VII Maule">VII Maule</option>
                                                    <option value="VIII Biobio">VIII Biobío</option>
                                                    <option value="IX La Araucania">IX La Araucanía</option>
                                                    <option value="XIV Los Rios">XIV Los Ríos</option>
                                                    <option value="X Los Lagos">X Los Lagos</option>
                                                    <option value="XI Aysen">XI Aysén</option>
                                                    <option value="XII Magallanes y Antartica">XII Magallanes y Antártica</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-md input-custom" placeholder="CIUDAD*" name="ciudad" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">

                                                <input name="telefono" id="fono" class="form-control input-md input-custom" placeholder="TELÉFONO*" onkeypress="return isNumeric(event)"
                                           oninput="maxLengthCheck(this)"
                                           maxlength = "999"
                                           minlength = "8"
                                           min = "1"
                                           max = "99999999" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-md-offset-3">
                                            <div class="form-group">
                                                <input type="email" class="form-control input-md input-custom" placeholder="MAIL*" name="mail" required>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <h5 class="text-uppercase "> SI TIENES TU BOLETA, INGRESA EL NÚMERO Y<br class="hidden-xs">
                                                <span class="amarillo">MULTIPLICA TUS OPORTUNIDADES DE GANAR</span>
                                            </h5>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control input-md input-custom select-super2" name="super" style="text-align-last: center;">
                                                    <option data-max="0" selected >SUPERMERCADO</option>
                                                    <option data-max="99" data-type="" value="jumbo" >JUMBO</option>
                                                    <option data-max="99" data-type="" value="santa isabel" >SANTA ISABEL</option>
                                                    <option data-max="99" data-type="" value="unimarc">UNIMARC</option>
                                                    <option data-max="12" data-type="this.value=this.value.replace(/[^0-9]/g,'');" value="lider">LIDER</option>
                                                    <option data-max="13" data-type="this.value=this.value.replace(/[^0-9]/g,'');" value="tottus">TOTTUS</option>
                                                </select> 
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="boleta" class="form-control input-md numboleta input-custom" placeholder="N° DE BOLETA">
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <label class="text-uppercase font12 colorred" for="term"> 
                                                <input class="sub" id="term" type="checkbox" required> acepto los terminos y condiciones</label>
                                        </div>

                                        <div class="col-md-4 col-md-offset-4">
                                            <div class="form-group">
                                                <button id="singlebutton" name="singlebutton" class="btn btn-default" style="height: 50px;margin: 25px 0px;" onclick="ga('send', 'event', 'Enviar', 'Explora', 'Coronasunsets');">ENVIAR</button>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-md-offset-3">
                                            <a class="text-uppercase white" href="bases.pdf" target="_blank">BASES LEGALES</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                        
                        <form action="sendbd.php" method="post">
                            <h4 class="text-uppercase mgtopbot">Completa el formulario para participar<br class="hidden-xs">
                                por ski pass, entradas y viajes a<br class="hidden-xs"><span class="amarillo">
                                    Corona Sunsets FESTIVAL Chillán</span></h4>
                            <div class="col-lg-12 col-xs-12">
                                <div class="col-lg-2 col-xs-12 col-lg-offset-4" style="padding: 0px;">
                                    <input type="text" class="inputform" placeholder="NOMBRE*" name="nombre" required="">                        
                                    <input type="text" class="inputform" id="rut1" maxlength="12"  pattern="[0-9]{1,2}.[0-9]{3}.[0-9]{3}-[0-9Kk]{1}" placeholder="RUT*" name="rut" required> 
                                    <input type="text" class="inputform" placeholder="CIUDAD*" name="ciudad" required>  
                                </div>
                                <div class="col-lg-2 col-xs-12" style="padding: 0px;">
                                    <input type="text" class="inputform" placeholder="APELLIDO*" name="apellido" required>                                            
                                    <select class="inputform select-super" name="region" style="width: 98%;text-align-last: center;margin-top: 22px;padding: 0;">
                                        <option selected >REGI&Oacute;N</option>
                                        <option value="Region Metropolitana" >Región Metropolitana</option>
                                        <option value="XV Arica y Parinacota" >XV Arica y Parinacota</option>
                                        <option value="I Tarapaca">I Tarapacá</option>
                                        <option value="II Antofagasta">II Antofagasta</option>
                                        <option value="III Atacama">III Atacama</option>
                                        <option value="IV Coquimbo">IV Coquimbo</option>
                                        <option value="V Valparaiso">V Valparaíso</option>
                                        <option value="VI O'Higgins">VI O'Higgins</option>
                                        <option value="VII Maule">VII Maule</option>
                                        <option value="VIII Biobio">VIII Biobío</option>
                                        <option value="IX La Araucania">IX La Araucanía</option>
                                        <option value="XIV Los Rios">XIV Los Ríos</option>
                                        <option value="X Los Lagos">X Los Lagos</option>
                                        <option value="XI Aysen">XI Aysén</option>
                                        <option value="XII Magallanes y Antartica">XII Magallanes y Antártica</option>
                                    </select> 
                                    <input type="text" class="inputform" placeholder="TELÉFONO*"  onkeypress="return isNumeric(event)"
                                           oninput="maxLengthCheck(this)"                                          
                                           maxlength = "9"
                                           min = "9"
                                           max = "999999999" required name="telefono" required>
                                </div>  
                                <div class="col-lg-12 col-xs-12  ">
                                    <input type="email" class="inputform" placeholder="MAIL*" name="mail" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <h5 class="text-uppercase "> SI TIENES TU BOLETA, INGRESA EL NÚMERO Y<br class="hidden-xs">
                                    <span class="amarillo">MULTIPLICA TUS OPORTUNIDADES DE GANAR</span></h5>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="col-lg-2 col-xs-12 col-lg-offset-4">
                                    <select class="inputform select-super" name="super" style="margin-top: 22px;padding: 0;">
                                        <option data-max="0" selected >SUPERMERCADO</option>
                                        <option data-max="12" value="jumbo" >JUMBO</option>
                                        <option data-max="10" value="santa isabel" >SANTA ISABEL</option>
                                        <option data-max="9" value="unimarc">UNIMARC</option>
                                        <option data-max="12" value="lider">LIDER</option>
                                        <option data-max="12" value="tottus">TOTTUS</option>
                                    </select> 
                                </div>
                                <div class="col-lg-2 col-xs-12  ">
                                    <input type="text" name="boleta" class="inputform numboleta" placeholder="N° DE BOLETA">                                            
                                </div> 
                            </div>
                            <div class="col-lg-12 col-xs-12 minimarg">
                                <label class="text-uppercase font12 colorred" for="term">      <input class="sub" id="term" type="checkbox" required> acepto los terminos y condiciones</label>
                            </div>
                            <div class="col-lg-12 col-xs-12">
                                <div class="boxcontinue">
                                    <button type="submit" id="btn" class="btnnone amarillo">           <h4 class="text-uppercase amarillo">Enviar</h4> </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12 col-xs-12">
                            <a class="text-uppercase white" href="bases.pdf" target="_blank">BASES LEGALES</a>
                        </div>
                        -->
                    </div>
                </div>
            </div> 
        </div>
        <script>
            $(document).ready(function () {

                $('.select-super2').change(function () {
                    $(".numboleta").attr({
                        "maxlength": $(this).children('option:selected').data('max'),
                        "oninput": $(this).children('option:selected').data('type')
                    });
                });
                
                $('.boxcontinue').click(function(){
	                ga('send', 'event', 'Continuar', 'Explora', 'Coronasunsets');
                });

            });
            $("#rut").rut({formatOn: 'keyup', validateOn: 'keyup'})
                    .on('rutInvalido', function () {
                        $(this).addClass("invalid");
                    })
                    .on('rutValido', function () {
                        $(this).removeClass("invalid");
                        $(this).addClass("valid");
                    });
            function maxLengthCheck(object) {
                if (object.value.length > object.maxLength)
                    object.value = object.value.slice(0, object.maxLength)
            }

            function isNumeric(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault)
                        theEvent.preventDefault();
                }
            }
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-69908134-1', 'auto');
            ga('send', 'pageview');

        </script> 
    </body>
</html>
