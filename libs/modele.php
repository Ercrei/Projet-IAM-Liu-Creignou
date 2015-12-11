<?php



include("maLibSQL.pdo.php");


function listerUtilisateursSelect($utilisateur)
{
	$SQL = "SELECT u.statut, u.nom,u.prenom, h.label FROM users u, hubs h  WHERE u.idHub=h.id AND u.id='$utilisateur' "; /*  on récupère les champs de statut, de nom de  service et de label des tables utilisateurs (u ) et hub (h) quand les id des hubs correspondent */
   	return parcoursRs(SQLSelect($SQL));
}





?>
