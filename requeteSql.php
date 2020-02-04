<?php 

$bdd = new PDO('mysql:host=localhost;dbname=restaurantSql;charset=utf8', 'marie', '12345');
if ($bdd){
    echo 'bdd connectée';
}


//trier les commandes de la table 10 par le type de service
// $sql = ('SELECT * FROM commandes WHERE idTable=10 ORDER by idService');

//Afficher le nombre de commandes de la table 10
// $sql = ('SELECT COUNT(*) FROM commandes WHERE idTable=10');


// afficher le nombre de commandes de la tazble 10 et 6 groupées par le type de service
// $sql = ('SELECT COUNT(*) FROM commandes WHERE idTable=10 or idTable=6 GROUP BY idService');

//Afficher les commandes de la table 10 en disant si ils sont du service midi ou du service soir
// $sql = ('SELECT idTable, idService, CASE WHEN idService = 1 THEN "Service du Midi" WHEN idService = 2 THEN "Service du Soir" ELSE "Erreur" END AS Service FROM commandes');

//Afficher les commandes à venir, trier par ordre décroissant
// $sql = ('SELECT * FROM commandes WHERE idCommande ORDER BY DateCommande');


//afficher les commandes du mois d'octobre 2019
// $sql = ('SELECT idCommande, DateCommande FROM commandes WHERE MONTH(DateCommande) >= 10 AND YEAR(DateCommande) = 2019');


//afficher le nombre de commandes total pour chaque mois de l'année  2019
// $sql = ('SELECT COUNT(idCommande) FROM commandes WHERE DateCommande GROUP BY MONTH(DateCommande)');


//afficher les mois où il y a au moins 5 commandes
// $sql = ('SELECT COUNT(dateCommande), MONTH(dateCommande) FROM commandes GROUP BY MONTH(DateCommande) HAVING COUNT(DateCommande)>=5');


//-----Sous requêtes-----//


//Lister les noms des employés n'ayant pris aucune commande
// $sql = ('');
     $sql =   ('SELECT idCommande, idEmploye FROM commandes '
     ('SELECT idEmploye, nom FROM employes WHERE commandes.idEmploye = employes.idEmploye ORDER BY nom'));

$req1 = $bdd->prepare($sql);
$req1->execute();

$result1 = $req1->fetchAll(PDO::FETCH_ASSOC);
var_dump($result1);
// while ($donnees = $sql-> fetch())
// {
// print_r ($donnees);
// echo "<br>";
// } 
 //afficher nb de commandes passés à la table 10
//  echo "<b>"."nombre de commandes passées à la Table 10" ."</b>" ."<br>";
// while ($donnees = $sql -> fetch())
// {
   
// print_r ($donnees);
// echo "<br>";
// }



?>