<?php
include('session.php');
include("config.php");
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <title>Vendi un libro - Studenti dell'Avogadro</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Andrea Licitra">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sito degli studenti dell&#039;Avogadro autogestito dal Collettivo Agorà">
        <meta name="keywords" content="Avogadro scuola notizie Amedeo studenti collettivo Agorà">
        <meta name="google-site-verification" content="gbvTA28Cwjl57lBh945M_UEZaxda1u8JMRaMxOFF84Q" />
        <!-- CSS -->
        <link href="/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="stylesheet.css" rel="stylesheet" media="screen">
        <link href="component.css" rel="stylesheet" media="screen">
        <!-- SCRIPT -->
        <script src="https://use.fontawesome.com/f001180178.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
                            <li><a href="articoli.html">Articoli</a></li>
                            <li><a href="/libri.php" title="Compra-vendita libri scolastici">Libri</a></li>
                            <li><a href="sportello.php">Sportello</a></li>
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
                <h1>Vendi un libro</h1>
                <p>
                    Vendere un libro è molto semplice. Ti basterà compilare i dati qui sotto, premere invio e chiunque sia interesato potrà vederlo e contattarti attraverso la tua mail, il tuo telefono o la tua classe.
                </p>
                <form class="form-horizontal" method="post" action="conferma-vendita.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2">ISBN: <!--<a href="#" title="Cos'è l'ISBN?" data-toggle="popover" data-trigger="focus" data-content="&Egrave; una sequenza numerica di 13 cifre usata internazionalmente per la classificazione dei libri, una sorta di codice univoco, se non riesci a trovarlo, vattelo a cercare su goooogle!">--><i class="fa fa-question-circle" aria-hidden="true" title="&Egrave; una sequenza numerica di 13 cifre usata internazionalmente per la classificazione dei libri, una sorta di codice univoco, se non riesci a trovarlo, vattelo a cercare su goooogle!" style="color: #337ab7;"></i><!--</a>--></label>
                        <div class="col-sm-10">
                            <input type="text" name="ISBN" value="" class="form-control" placeholder="Codice libro">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Titolo e Autore:</label>
                        <div class="col-sm-10">
                            <input type="text" name="titolo" value="" class="form-control" placeholder="Separali da un trattino">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Condizioni libro: <!--<a href="#" title="Sii onesto" data-toggle="popover" data-trigger="focus" data-content="Nun fa il furbo, se dici che è buono e poi e carta straccia, non te lo comprano comunque no?">--><i class="fa fa-question-circle" title="Nun fa il furbo, se dici che è buono e poi e carta straccia, non te lo comprano comunque no?" style="color: #337ab7;" aria-hidden="true"></i><!--</a>--></label>
                        <div class="col-sm-10">    
                            <select class="form-control" id="condizioni" name="condizioni">
                                <option value="Ottime">Ottime</option>
                                <option value='Buone'>Buone</option>
                                <option value='Rovinato'>Rovinato</option>
                                <option value='Vecchio'>Vecchio</option>
                                <option value='Rotto'>Rotto</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Prezzo: <!--<a href="#" title="Quanto inserire?" data-toggle="popover" data-trigger="focus" data-content="Normalmente per i libri usati, cioè evidenziati o comunque consumati dal tempo ci si tiene sempre sotto la metà del prezzo di uno nuovo, dovrai inserire un prezzo che non sia palesemente esagerato ;)">--><i class="fa fa-question-circle" title="Normalmente per i libri usati, cioè evidenziati o comunque consumati dal tempo ci si tiene sempre sotto la metà del prezzo di uno nuovo, dovrai inserire un prezzo che non sia palesemente esagerato ;)" style="color: #337ab7" aria-hidden="true"></i><!--</a>--></label>
                        <div class="col-sm-10">    
                            <input type="text" name="prezzo" value="" class="form-control" placeholder="0.00">
                            <span class="help-block" align="center">Inserisci solo il numero, <u>senza</u> "&euro;"</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Contatto: <!--<a href="#" title="Come può contattarti l'interessata/o?" data-toggle="popover" data-trigger="focus" data-content="Scegli attraverso cosa puoi essere contattato per chi vuole comprare il libro (mail, cellulare, classe, fb...)">--><i class="fa fa-question-circle" title="Scegli attraverso cosa puoi essere contattato per chi vuole comprare il libro (mail, cellulare, classe, fb...)" style="color:#337ab7" aria-hidden="true"></i><!--</a>--></label>
                        <div class="col-sm-10">
                            <div class="col-sm-10">    
                            <select class="form-control" id="contatto" name="contatto">
                                <?php
                                $sql = "SELECT * FROM utenti WHERE nome='$login_session' and password='$password_session'";
                                $result = mysqli_query($db, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option value="<?php echo $mail_session; ?>"><?php echo $mail_session; ?></option>
                                <option value="<?php echo $row[telefono]; ?>"><?php echo $row[telefono]; ?></option>
                                <option value="<?php echo $row[classe]; ?>"><?php echo $row[classe]; ?></option>
                                <option value="Cercami su Facebook">Cercami su Facebook</option>
                                <?php
                                    }
                                }
                                else{
                                    echo "ERRORE!!";
                                }
                                ?>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="center">
                            <button type="submit" class="btn btn-danger"><b>Invia</b></button>
                        </div>
                    </div>
                </form>
                
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
                    <h4>Links utili</h4>
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
        <script>
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover();
            });
        </script>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body> 
</html>