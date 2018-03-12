<?php 
	$bdd = new PDO('mysql:host=localhost;dbname=ind&cie;charset=utf8', 'root', '');
	array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
	$reponse = $bdd->query('SELECT * FROM musiques');

while ($donnees = $reponse->fetch())
{
	echo $donnees['CodeChanson']."<br/>";
	echo $donnees['titre']."<br/>";
	echo $donnees['chanteur']."<br/>";
	echo $donnees['album']."<br/>";
	echo $donnees['genre']."<br/>";
	echo "<img src='".$donnees['cover']."'><br/>";	
	echo "<audio controls><source src='".$donnees['audio']."' type='audio/mp3'/> </audio>";
}
putenv("TOTO=$toto");
$test=getenv($toto);
echo $toto;
echo $test;
$retest=$_SERVER['TOTO'];
echo $retest;

$reponse->closeCursor();
?>