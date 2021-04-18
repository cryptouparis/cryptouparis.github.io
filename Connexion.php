<?php
include('ConnexionDB.php');
session_start();


if(isset($_POST['login'])){

    $email= $_POST['email'];
    $mdp= $_POST['mdp'];

    $query = mysqli_query($conn,"SELECT id FROM Inscription WHERE email='$email'  AND mdp='$mdp'");

    if(mysqli_num_rows($query) == true){
        
        header('location:Accueil.php');
        // echo "Login valide";
        $_SESSION["email"] = $email;
    }
    else{
        echo "Login invalide";
    }


}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Connexion</title>
<link rel="stylesheet" href="Style1.css">
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
    <head>
        <link  href="style1.css" rel="stylesheet" >
        <meta charset="UTF-8">
        <!--Nom de l'onglet-->
        <title>Connexion</title>
    </head>
    <body>    <!--Corps de la page-->
       
        <div class="box">
    
            <form action="" method="POST" class="formBloc">
    
                <h3><strong>Connexion</strong></h3>
    
                <div class="formGroupe">
                    <label for="email">Email </label>
                    <input type="email" id="email" name="email" required maxlength="50">
                </div>
    
                <div class="formGroupe">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp" required minlength="8" maxlength="25">
                </div>
    
                <div class="formGroupe">
                    <input type="submit" value="login" class="buttonSub" name="login">
                </div>
    
                <div class="mdpPerdu">
                    <a href="#">S'inscrire ?</a>
                </div>
            </form>
    
        </div>
    
    
    
    
        
    <!--Le titre ( Label ) ne se supperpose pas sur un champ rempli-->
        <script>
             const inputs = document.querySelectorAll('input'); /*Recuperation de la donnée de input*/
    
            for (let i = 0; i < inputs.length; i++)
            {
    
                 let field = inputs[i]; /*Recuperation de la donnee Input tout en l'ecrasant a chaque fois*/
    
                   field.addEventListener('input', (e) => {
    
                   if(e.target.value != "") /*Si le champ n'est pas rempli*/
                   {
                        e.target.parentNode.classList.add('animation');
                    }
                     else if (e.target.value == "") /*Si le champ est rempli*/
                     {
                     e.target.parentNode.classList.remove('animation');
                     }
    
                     })
    
            }
    
        </script>
    </body>
</main>

