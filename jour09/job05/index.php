<?php
    $bdd = mysqli_connect('localhost','root','','jour08');
    mysqli_set_charset($bdd , 'utf8');
    $requete = mysqli_query($bdd,"SELECT * FROM etudiants WHERE naissance > CURRENT_DATE - INTERVAL '18' YEAR");
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
     <th>id</th>
     <th>Prenom</th>
     <th>Nom</th>
     <th>Naissance/th>
     <th>Sexe</th>
     <th>Email</th>
  </tr>
  </thead>
<tbody>


<?php 
foreach ($etudiants as $etudiant) :?>

  <tr>

        <td> <?php echo $etudiant ['id']; ?></td>
        <td> <?php echo $etudiant ['prenom']; ?></td>
        <td> <?php echo $etudiant ['nom']; ?></td>
        <td> <?php echo $etudiant ['naissance']; ?></td>
        <td> <?php echo $etudiant ['sexe']; ?></td>
        <td> <?php echo $etudiant ['email']; ?></td>

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