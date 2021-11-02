<?php

$titre= "Valeur"; $titre2= "Type"; $titre3= "Exemple";
$valeurl1= "Chaîne de caractères" ; $typel1= "string" ;
$valeurl2= "Nombres Entier" ; $typel2= "int" ;
$valeurl3= "Nombres Décimaux" ; $typel3= "float" ;
$valeurl4= "Booléens" ; $typel4= "bool" ;
$valeurl5= "Rien" ; $typel5= "nul" ;



?>

<html>

<body>
    <main>
    <div>


        <table>

            <div>
            <thead>
        <tr>
        <th> <?php echo $titre ?>  </th>
        <th> <?php echo $titre2 ?> </th>
        <th> <?php echo $titre3 ?> </th>
        </tr>
        
            </thead>
            </div>

        <tbody>      

            
            <tr>
        <td> <?php echo $valeurl1 ?> </td>
        <td> <?php echo $typel1 ?> </td>
        <td> $authorName="Mathieu" </td>

            </tr>


            
            <tr>
        <td> <?php echo $valeurl2 ?> </td>
        <td> <?php echo $typel2 ?> </td>
        <td> $authorAge=3; </td>

            </tr>


            
            <tr>
        <td> <?php echo $valeurl3 ?> </td>
        <td> <?php echo $typel3 ?> </td>
        <td> $productPrice=14 738; </td>

            </tr>


            
            <tr>
        <td> <?php echo $valeurl4 ?> </td>
        <td> <?php echo $typel4 ?> </td>
        <td> $isAllowed=true; </td>

            </tr>


            
            <tr>
        <td> <?php echo $valeurl5 ?> </td>
        <td> <?php echo $typel5 ?> </td>
        <td> $authorName="Mathieu" </td>

            </tr>




            </tbody>
            

        </div>



    </main>
    <footer>
    </footer>

</body>

</html>