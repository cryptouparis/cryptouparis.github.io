<?php
session_start();
$session = NULL;

    require_once('identifier.php');
    require_once("connexionDB.php");
	$user=$_SESSION['user'];
	$id= $user['iduser'];
    
    $nomCrypto=isset($_GET['nomCrypto'])?$_GET['nomCrypto']:"all";
    
    $size=isset($_GET['size'])?$_GET['size']:6;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;
    
    if($nomCrypto=="all"){
        $requete="select * from crypto
                
                limit $size
                offset $offset";
		$requete2="select Binance_coin,Bitcoin,Etherum,Filecoin,Litecoin from portefeuille
								where iduser=$id";
								
        
        $requeteCount="select count(*) countC from crypto";
    }else{
         $requete="select * from crypto
                where  nomCrypto='$nomCrypto' 
                limit $size
                offset $offset";
				
		if($nomCrypto=="eth"){
	     $requete2="select Etherum from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="btc"){
	     $requete2="select Bitcoin from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="bnb"){
	     $requete2="select Binance_coin from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="ltc"){
	     $requete2="select Litecoin from portefeuille
								where iduser=$id";
		}
		else if($nomCrypto=="fil"){
	     $requete2="select Filecoin  from portefeuille
								where iduser=$id";
		}
        
        $requeteCount="select count(*) countC from crypto
                where  nomCrypto='$nomCrypto'";
    }

    $resultatC=$pdo->query($requete);
	$resultatV=$pdo->query($requete2);

    $resultatCount=$pdo->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nbrCrypto=$tabCount['countC'];
    $reste=$nbrCrypto % $size;   // % operateur modulo: le reste de la division 
                                 //euclidienne de $nbrCrypto par $size
    if($reste===0) //$nbrCrypto est un multiple de $size
        $nbrPage=$nbrCrypto/$size;   
    else
        $nbrPage=floor($nbrCrypto/$size)+1;  // floor : la partie entière d'un nombre décimal
?>

<!DOCTYPE html>
<html lang="fr"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="./style5.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
    <title>CryptoUparis - Porte-feuille</title> 
    <!--Logo site-->
    <link rel="icon" type="image/png" sizes="16x16" href="https://forge.ens.math-info.univ-paris5.fr/svn/2020-l3k1/TRUNK/Images/Logo_Site.png">
     <!--/*Texte apparaissant dans l'onglet du navigateur*/-->    
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js" charset="UTF-8"></script></head>     <body>  <!--Corps de la page-->
     <header>
            <h1><a href="accueil.php">CRYPTO-UPARIS</a></h1>   <!--/*Titre principal header*/-->
            <nav>     <!--/*Barre à onglets*/-->
                <ul> <!-- Liste des différents pages consultables du site -->
                    <li class="pageactive"><a href="Accueil.php">Accueil</a></li>
    
                    <li class="Trade\Marche"><a href="Trade.php">Trade/Marche</a> </li>
        
                    <li class="porte-feuille"><a href="PortefeuilleO.php">Porte-feuille</a>
                        <ul class="sous-menu">
                            <li><a href="Donneespersonnelles.php">Donnees personnelles</a></li>
                            <li><a href="Mesmonnaies.php">Mes monnaies</a></li>
                        </ul>
                    </li>
        
                    <li class="inscription"><a href="Inscription.php">
                    <?php
                    if(isset($_SESSION['email']))
                    {
                        echo $_SESSION['email'];
                    }
                    else
                    {
                        echo 'Inscription';
                    }
                    ?></a>
                    </li>
        
                    <li class="connexion"><a href="Connexion.php">Connexion</a></li>
         
                </ul>
            </nav> 
        </header>

	<div class="container">
            <div >
          
				
				<div class="panel-body ">
					
					<form method="get" action="test.php" class="form-inline">
					
						
                        
                        <label for="nomCrypto">crypto:</label>
			            <select name="nomCrypto" class="form-control" id="nomCrypto" 
                                onchange="this.form.submit()">
                            <option value="all" <?php if($nomCrypto==="all") echo "selected" ?>>all</option>
                            <option value="eth"   <?php if($nomCrypto==="eth")   echo "selected" ?>>etherum</option>
                            <option value="bnb"   <?php if($nomCrypto==="bnb")   echo "selected" ?>>binance coin</option>
                            <option value="btc"  <?php if($nomCrypto==="btc")  echo "selected" ?>>bitcoin</option>
                            <option value="ltc"   <?php if($nomCrypto==="ltc")   echo "selected" ?>>litecoin</option>
                            <option value="fil"   <?php if($nomCrypto==="fil")   echo "selected" ?>>filecoin</option> 
			            </select>
					</form>	
				</div>
				<button>
					<span>Trade</span>
				</button>
			</div>
            
            <div >
                
                <div class="panel-body">
                    <table class="table" id="tableauCrypto">
                        <thead>
                            <tr>
                              <th>rang</th><th>symbole</th><th>nom crypto</th><th>valeur crypto</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                          <?php 
								$crypto2=$resultatV->fetch();
								 $j=-1;
							while($crypto=$resultatC->fetch()){ 
							?>
                                <tr>
							<td><?php echo $crypto['idCrypto']; ?> </td>
							<td><img class='img-circle' src="../images/<?php echo $crypto['Photo'] ?>" width ="50px" height="50px"/></td>
							<td><?php echo $crypto['nomCrypto']; ?> </td>
							<td><?php $j++; echo $crypto2[$j];?></td> 	
					            </tr>
							<?php } ?> 
                       </tbody>
                    </table>
                
                </div>
				<div>
                    <ul class="pagination">
                        <?php for($i=1;$i<=$nbrPage;$i++){ ?>
                            <li class="<?php if($i==$page) echo 'active' ?>"> 
            <a href="test.php?page=<?php echo $i;?>&nomCrypto=<?php echo $nomCrypto ?>">
                                    <?php echo $i; ?>
                                </a> 
                             </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
	
	
</body></html>