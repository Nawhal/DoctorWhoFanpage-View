
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head><title>Personne - formulaire</title>
</head>

<body>
<?php


// on v�rifie les donn�es provenant du mod�le
if (isset($dVue))
{?>
<center>


<?php
if (isset($dVueEreur) && count($dVueEreur)>0) {
echo "<h2>ERREUR !!!!!</h2>";
foreach ($dVueEreur as $value){
    echo $value;
}}
?>

<h2>Personne - formulaire</h2>
<hr>
<!-- affichage de donn�es provenant du mod�le --> 
<?= $dVue['data']  ?>


<form method="post" >
<table> <tr>
<td>Nom</td>
<td><input name="txtNom" value="<?= $dVue['nom']  ?>" type="text" size="20"></td>
 </tr>
<tr><td>Age</td>
<td><input name="txtAge" value="<?= $dVue['age'] ?>" type="text" size="3"></td>
</tr>
<tr>
</table>
<table> <tr>
<td><input type="submit" value="Envoyer"></td>
<td><input type="reset" value="R�tablir"></td>
<td><input type="button" value="Effacer"></td> </tr> </table>

<!-- action !!!!!!!!!! --> 
<input type="hidden" name="action" value="validationFormulaire">
</form></center>

<?php }
else {
print ("erreur !!<br>");
print ("utilisation anormale de la vuephp");
} ?>

</body> </html> 