<?php 

foreach ($_GET as $key => $value) {
    for($i=0; $i <= $_GET["largeur"]; $i++) {
        echo "_ ";
    }
    for($i=0; $i <= $_GET["hauteur"]; $i++) {
        echo "|<br>";
    }
} 


for ($i = 0; $i < $_GET["hauteur"]; $i++) { 
    for($roof= $_GET["hauteur"]; $roof>=$i; $roof--) {
        if($roof!=$_GET["hauteur"]-1) {
            echo "&nbsp&nbsp";

        }
     
        }
    echo "/"; 
   
    for($roof =1; $roof <=$i; $roof++) {
        echo "__";
     
        }
     
    echo "\ "; 
    echo "<br>";
 
}

for($i = 1; $i < $_GET["largeur"]; $i++) { 
       
  

}
for ($i = 0; $i < $_GET["hauteur"]; $i++) {     

    for($j = 0; $j < $_GET["largeur"]; $j++) {
        if($j==0) {
            echo '&nbsp&nbsp|';


        }
        elseif ($j==$_GET["largeur"]-1) {
            
            if($i!=$_GET["hauteur"]) {
                
                   
                echo '|<br>';
            }
           
       
            
        }
        else {
            if ($i==$_GET["hauteur"]-1) {
                echo '_';
            }
            else {
                echo "&nbsp&nbsp";

            }


        }
    }
   
}



?>

<!DOCTYPE html>
<html lang="fr">
    <form action="" method="get">
        <br>
        <input type="text" name="largeur" placeholder="Largeur">

        <input type="text" name="hauteur" placeholder="Hauteur">

        <button type="submit">Valider</button>
    </form>
</html>
