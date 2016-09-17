<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Sportello d'Ascolto - Studenti dell'Avogadro</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Andrea Licitra">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Hai dubbi o proposte da fare inerenti scuola o altro? Eccoci! Questo sportello ha il fine di collegare gli studenti con i ragazzi in grado di aiutarli.">
        <meta name="keywords" content="Avogadro scuola notitie Amedeo studenti collettivo Agorà">
        <!-- CSS -->
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="stylesheet.css" rel="stylesheet" media="screen">
        <link href="component.css" rel="stylesheet" media="screen">
        <script src="https://use.fontawesome.com/f001180178.js"></script>
        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto|Nunito|Tillana|Open+Sans:400,600,700|Raleway" rel="stylesheet" type="text/css">
    </head>
    <body>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v2.7";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-54331155-3', 'auto');   ga('send', 'pageview');  </script> <!-- TESTATA -->
        <div class="head-box">
            <div class="img"> Studenti Avogadro <div class="com">(.com)</div><!--<img src="h-img.svg" alt="Studenti Avogadro" height="200px">--></div>
            <nav class="navbar navbar-inverse" data-offset-top="197">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<div class="pc-hide"><a class="navbar-brand" href="#">StudentiAvogadro.com</a></div>-->
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="/index.html">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notizie<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Comunicazioni</a></li>
                                    <li><a href="#">Avogadro</a></li>
                                    <li><a href="#">Scuola</a></li>
                                    <li><a href="#">L'Esterno</a></li>
                                </ul>
                            </li>
                            <li><a href="/articoli.html">Articoli</a></li>
                            <li><a href="#"  title="Compra-vendita libri scolastici">Libri</a></li>
                            <li class="active"><a href="#">Sportello</a></li>
                            <li><a href="/rappresentanza.html">La Rappresentanza</a></li>
                            <li><a href="/collettivo.html">Il Collettivo</a></li>
                            <li><a href="https://family.sissiweb.it/Secret/REStart.aspx?Customer_ID=80202890580" target="_blank">Registro Elettronico</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/login.php"><span class="glyphicon glyphicon-user"></span> Log in</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- CORPO -->
        <div class="container">
            <div class="col-sm-8">
                <h1>Lo Sportello d’Ascolto</h1>
                <h4>(Gestito da noi ragazzi/rappresentanti per chiunque ne abbia bisogno)</h4>
                <p>
                    Quante volte ti è capitato di avere problemi con un prof, note ingiuste, uscite didattiche negate, crepe nei muri...o quante idee che non siete riusciti mai a proporre perché non avevate i "giusti" contatti...beh ora basta, siamo qui ad offrirvi una mano; gestito da ragazzi e ragazze competenti tra cui alcuni rappresentanti d’Istituto e della Consulta, questo sportello ha lo scopo di rispondere tempestivamente a ogni vostro dubbio inerente la scuola, questo sito o il Collettivo Agorà.
                </p>
                <div style="text-align:right">- "L'Amministrazione" -</div>
                <p>Riempite i campi qui sotto per contattarci:</p><br>
                <?php
                //if "email" variable is filled out, send email
                if (isset($_REQUEST['email']))  {
                    
                    //Email information
                    $ip=$_SERVER['REMOTE_ADDR']; 
                    $admin_email = "collettivoagora@gmail.com";
                    $email = $_REQUEST['email'];
                    $name = $_REQUEST['name'];
                    //$subject = $_REQUEST['subject'];
                    $comment = $_REQUEST['comment'];
                    
                    //send email
                    mail($admin_email, "Dal sito" , "$comment \n \nDa: $name \nIP:$ip \nQuesta mail è stata inviata tramite la pagina 'sportello' ", "From:" . $email);
                    
                    //Email response
                    echo 'Ti risponderemo appena ci pijerà di leggere le mail <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>';
                }
                
                //if "email" variable is not filled out, display the form
                //By Andrea Licitra
                else  {
                ?>
                
                    <form class="form-horizontal" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="" class="form-control" placeholder="Tuo nome e la tua classe">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="" class="form-control" id="email" placeholder="Inserisci la tua mail">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="comment">Messaggio:</label>
                            <div class="col-sm-10">
                                <textarea name="comment" class="form-control" rows="5" id="comment" placeholder="Inserisci il tuo messaggio"></textarea>
                                (Questo messaggio sarà inviato alla casella postale di collettivoagora@gmail.com)
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10" align="right">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" class="btn btn-default">Invia</button>
                            </div>
                        </div>
                </form>
                
                <?php
                }
                ?>
            </div>
            <div class="ri-col">
            <div class="col-sm-4">
                <div class="last-news">
                    <h4>Ultime news</h4>
                    <p>Come back...</p>
                </div>     
                <hr>
                <div>
                    <h4>Join Us</h4>
                    <p>Sei interessato/a a prendere parte in modo attivo alle attività della nostra scuola?</p>
                </div>
                <hr>
                <div class="component">
                    <h4>I nostri diritti (e doveri)</h4>
                    <nav class="cl-effect-5">
                        <a href="/Statuto%20Studenti%20con%20modifiche%20DPR%20249-98%20235-07.pdf" target="_blank"><span data-hover="Il nostro statuto">Il nostro statuto</span></a>
                        <a href="/crediti.pdf" target="_blank"><span data-hover="crediti scolastici">Crediti Scolastici</span></a>
                        <a href="/Articolo_21.pdf" target="_blank"><span data-hover="Articolo 21">Articolo 21</span></a>
                    </nav>
                </div>
                <hr>
                <div>
                    <div class="fb-page" data-href="https://www.facebook.com/collettivoaavogadro/" data-tabs="timeline" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/collettivoaavogadro/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/collettivoaavogadro/">Collettivo Agorà</a></blockquote></div>
                </div>
            </div>
            </div>
        </div>
        <!-- FOOTER -->
        <footer class="panel-footer">
            <div class="container">
                <p class="f-link">
                    <a href="#">Contattaci</a> - 
                    <a href="#">Entra nel collettivo</a> - 
                    <a href="#">Humans</a> - 
                    <a href="#">Galleria</a>
                </p>
                <p>Made with <i class="fa fa-heart" aria-hidden="true" style="color:#cf6565"></i>  -  By Andrea Licitra</p>
                <p class="life" title="Andrea Licitra">Change the world, now.</p>
            </div>
        </footer>

        
         <!-- jQuery e plugin JavaScript  -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body> 
</html>