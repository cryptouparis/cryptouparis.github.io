<?php


include('ConnexionDB.php');

if(isset($_REQUEST['submit']))
{

        $prenom=$_REQUEST['prenom']; 
        $nom=$_REQUEST['nom']; 
        $email=$_REQUEST['email']; 
        $mdp=$_REQUEST['mdp']; 
        $ddn=$_REQUEST['ddn'];  

        $queryEmail = mysqli_query($conn,"SELECT * FROM `Inscription` WHERE email= '$email' ");
        
        if(mysqli_num_rows ($queryEmail)>0)
        {
        echo "Email deja utilisé";
        }
        else
        {

            $query="insert into Inscription(`prenom`,`nom`,`email`,`mdp`,`ddn`)
            values('$prenom','$nom','$email','$mdp','$ddn') ";
            $result=mysqli_query($conn,$query);

        
            if($result)
            {
                echo "Form submitted successfull";
            }
            else
            {
                echo "Error";
            }
        }

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscription.css"/>
    <title>Inscription</title>
</head>
<body>
<div id="bg">
    <form>
    <div class="contact">
         <input  type="text"class="détails" placeholder="Nom:" name="nom" required="required">
         <input  type="text"class="détails" placeholder="Prénom:" name="prenom" required="required">
         <input  type="email"class="détails" placeholder="Email:" name="email" required="required">
         <input  type="date" class="détails"  placeholder="date de naissance" name="ddn" required="required">
         <input  type="password"class="détails" placeholder="Mot de passe:" name="mdp" required minlength="8" maxlength="25" required="required">
         <input  type="password"class="détails" placeholder="Confirmer votre mot de passe:" required="required">
      

        <div class="button"><input type="submit" value="INSCRIPTION" name="submit"></div> 
     </div>
    </div>
    </form>

    <script type="text/javascript" src="particles.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</div>

</body>
</html>