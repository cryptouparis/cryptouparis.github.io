<?php
session_start();
$session = NULL;

  $host = 'sql11.freesqldatabase.com';
  $dbname = 'sql11404359';
  $username = 'sql11404359';
  $password = 'DZVXM4pTze';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM Inscription WHERE email = '".$_SESSION["email"]."'";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Accueil</title>
<link rel="stylesheet" href="styleTrade.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header>
<div class="menu-bar">
<ul>
<img src="./Images/Logo_Site.png" class="logo" >
<li class="active"><a href="Accueil.php"><i class="fa fa-home"></i> Accueil</a></li>    
<li><a href="Trade.php">Trade</a>
    <div class="sub-menu-1">
        <ul>
            <li class="hover-me"><a href="BTC24hLineTrade.php">BTC</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                    <li class="hover-me2"><a href="BTC24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                         <ul>
                            <li><a href="BTC24hLineTrade.php">Line</a></li>
                            <li><a href="BTC24hCsTrade.php">CandleStick</a></li>
                         </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="BTC7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BTC7dLineTrade.php">Line</a></li>
                            <li><a href="BTC7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="BTC30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BTC30dLineTrade.php">Line</a></li>
                            <li><a href="BTC30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="BTC365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BTC365dLineTrade.php">Line</a></li>
                            <li><a href="BTC365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="BNB24hLineTrade.php">BNB</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                 <ul>
                 <li class="hover-me2"><a href="BNB24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB24hLineTrade.php">Line</a></li>
                            <li><a href="BNB24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="BNB7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB7dLineTrade.php">Line</a></li>
                            <li><a href="BNB7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="BNB30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB30dLineTrade.php">Line</a></li>
                            <li><a href="BNB30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="BNB365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="BNB365dLineTrade.php">Line</a></li>
                            <li><a href="BNB365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="ETH24hLineTrade.php">ETH</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="ETH24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH24hLineTrade.php">Line</a></li>
                            <li><a href="ETH24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="ETH7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH7dLineTrade.php">Line</a></li>
                            <li><a href="ETH7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="ETH30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH30dLineTrade.php">Line</a></li>
                            <li><a href="ETH30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="ETH365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="ETH365dLineTrade.php">Line</a></li>
                            <li><a href="ETH365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>            
            </li>
            <li class="hover-me"><a href="FIL24hLineTrade.php">FIL</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="FIL24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL24hLineTrade.php">Line</a></li>
                            <li><a href="FIL24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="FIL7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL7dLineTrade.php">Line</a></li>
                            <li><a href="FIL7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="FIL30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL30dCsTrade.php">Line</a></li>
                            <li><a href="FIL30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="FIL365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="FIL365dLineTrade.php">Line</a></li>
                            <li><a href="FIL365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>
            <li class="hover-me"><a href="LTC24hLineTrade.php">LTC</a><i class="fa fa-angle-right"></i>
            <div class="sub-menu-2">
                <ul>
                 <li class="hover-me2"><a href="LTC24hLineTrade.php">24h</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC24hLineTrade.php">Line</a></li>
                            <li><a href="LTC24hCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                    <li class="hover-me2"><a href="LTC7dLineTrade.php">7d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC7dLineTrade.php">Line</a></li>
                            <li><a href="LTC7dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="hover-me2"><a href="LTC30dLineTrade.php">30d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC30dLineTrade.php">Line</a></li>
                            <li><a href="LTC30dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                
                
                    </li>
                    <li class="hover-me2"><a href="LTC365dLineTrade.php">365d</a><i class="fa fa-angle-right"></i>
                    <div class="sub-menu-3">
                        <ul>
                            <li><a href="LTC365dLineTrade.php">Line</a></li>
                            <li><a href="LTC365dCsTrade.php">CandleStick</a></li>
                        </ul>
                    </div>
                    
                    
                    </li>
                </ul>
            </div>
            </li>



        </ul>
    </div>
</li>    


<li><a href="PortefeuilleO.php">Portefeuille</a>
    <div class="sub-menu-1">
        <ul>
            <li><a href="Donneespersonnelles.php">Donnees Personnelles</a></li>
            <li><a href="Mesmonnaies.php">Mes Monnaies</a></li>
            



        </ul>
    </div>
</li>
<li class="inscription"><a href="Inscription.php">
                    <?php
                    if(isset($_SESSION['email']))
                    {
                        echo 'Utilisateur : ' . $_SESSION['email'];
                    }
                    else
                    {
                        echo 'Inscription';
                    }
                    ?></a>
                    </li>
<li><a href="Connexion.php"><?php
                    if(isset($_SESSION['email']))
                    {
                        echo 'Solde : ';
                    }
                    else
                    {
                        echo 'Connexion';
                    }
                    ?></a></li>
</ul>
</div>
</body>
</header>


<main>
 <table>
   <thead>
     <tr>
       <th>NOM</th>
       <th>PRENOM</th>
       <th>SOLDE TOTAL</th>
       <th>BNB</th>
       <th>BTC</th>
       <th>FIL</th>
       <th>LIT</th>
       <th>ETH</th>
       

     </tr>
   </thead>
   <tbody>
     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['nom']); ?></td>
       <td><?php echo htmlspecialchars($row['prenom']); ?></td>
       <td><?php echo htmlspecialchars($row['soldeUSDT']); ?></td>
       <td><?php echo htmlspecialchars($row['soldeBNB']); ?></td>
       <td><?php echo htmlspecialchars($row['soldeBTC']); ?></td>
       <td><?php echo htmlspecialchars($row['soldeFIL']); ?></td>
       <td><?php echo htmlspecialchars($row['soldeLIT']); ?></td>
       <td><?php echo htmlspecialchars($row['soldeETH']); ?></td>
       
     </tr>
     <?php endwhile; ?>
   </tbody>
 </table>

 <style type="text/css">
table{
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 59%;
 transform: translate(-50%,-50%);
 width: 100%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #b8b2b2;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}
 </style>
</main>
</body>
</html>