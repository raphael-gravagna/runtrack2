<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"select * FROM etudiants WHERE sexe = 'Femme'");
    $etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang= "en">
    <head>
        <title>Tableau</title>
    </head>
    <body>
        <table>
  <thead aligne = "left">
  <tr>
     <th>Prénom</th>
     <th>Nom</th>
     <th>Date de naissance</th>
  </tr>
  </thead>
<tbody>


<?php 
foreach ($etudiants as $etudiant) :?>

  <tr>

        <td> <?php echo $etudiant ['prenom']; ?></td>
        <td> <?php echo $etudiant ['nom']; ?></td>
        <td> <?php echo $etudiant ['naissance']; ?></td>

  </tr>

<style>
table,
td {
    border: 1.8px solid #333;
}

thead,
tfoot {
    background-color: pink;
    color: black;
}
</style>

<?php endforeach;?>

</tbody>
</table>
</html>