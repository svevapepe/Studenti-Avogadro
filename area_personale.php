<?php
   include('session.php');
   include("config.php"); 
?>
<html lang="it">
    <head>
        <title>Area Personale - Studenti dell'Avogadro</title>
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
                            <li><a href="articoli.html">Articoli</a></li>
                            <li><a href="/libri.php" title="Compra-vendita libri scolastici">Libri</a></li>
                            <li><a href="sportello.php">Sportello</a></li>
                            <li><a href="/rappresentanza.html">La Rappresentanza</a></li>
                            <li><a href="/collettivo.html">Il Collettivo</a></li>
                            <li><a href="https://family.sissiweb.it/Secret/REStart.aspx?Customer_ID=80202890580" target="_blank">Registro Elettronico</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Log in</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- CORPO -->
        <div class="container">
            <div class="col-sm-8">
                <h1>Area Personale - <?php echo $login_session; ?></h1><br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            <a  href="/vendi.php">Vendi un libro <i class="fa fa-external-link-square" aria-hidden="true" style="text-decoration:none;"></i></a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Per vendere i tuoi libri, inserirli in <a href="/libri.php" target="_blank">questa tabella</a> e far si che chiunque sia interessato possa contattarti e comprarlo.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color:black; text-decoration:none;">I tuoi libri <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?php
                            
include("config.php");
    if ($mysqli->connect_error) {
        die( 'Errore di connessione al server (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
    } else {
        echo "Stato connessione al nostro server: Connesso. \n\n";
    }
?>
                            <div class="table-scroll">
                                <table class="table table-striped" id="tabella_libri">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ISBN</th>
                                            <th>Titolo e Autore</th>
                                            <th>Condizioni</th>
                                            <th>Prezzo</th>
                                            <th>Contatto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$sql = "SELECT * FROM libri WHERE nome='$login_session';";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row[id];?></td>
            <td><?php echo $row[ISBN];?></td>
            <td><?php echo $row[titolo];?></td>
            <td><?php echo $row[condizioni];?></td>
            <td><?php echo $row[prezzo];?></td>
            <td><?php echo $row[contatto];?></td>

</tr>
    
        <!--echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["cognome"]. "<br>";-->
<?php
    }
} else {
    echo "Nessun libro trovato";
}

mysqli_close($db);
?>
    
                        </tbody>
                    </table>
                </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> <!--class="panel-title"-->
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color:black; text-decoration:none;">Modifica un libro <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">
                            Per modificare un libro già inserito basta inserire qui sotto l'id(che trovi nella tabella <a href="#collapse2">qui</a> sopra) e l'ISBN del libro.
                            
                            <form class="form-horizontal" method="post" action="modifica_libro.php">
                    <div class="form-group">
                        <label class="control-label col-sm-2">ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="id" value="" class="form-control" placeholder="ID libro">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">ISBN</label>
                        <div class="col-sm-10">
                            <input type="text" name="ISBN" value="" class="form-control" placeholder="Codice del libro">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" name="mail" value="<?php echo $mail_session; ?>" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" align="center">
                            <button type="submit" class="btn btn-danger"><b>Modifica</b></button>
                        </div>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="color:black; text-decoration:none;">Elimina libro <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            <a  href="#">Modifica i tuoi dati <i class="fa fa-external-link-square" aria-hidden="true" style="text-decoration:none;"></i></a>
                        </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse in">
                        <div class="panel-body">
                            Se desideri cambiare password, classe, o altri tuoi dati.
                        </div>
                    </div>
                </div>
                <a href = "logout.php">Sign Out</a>
                
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
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
    </body> 
</html>