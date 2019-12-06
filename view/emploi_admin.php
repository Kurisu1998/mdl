<?php
 include("../view/entete.php"); 
 include("../view/nav_admin.php"); 
  include("../includes/v_connexion.php"); 
 include("../includes/v_emploi.php"); 
  include("../view/bien_admin.php"); 
 ?>


<table class="table table-striped table-dark">
   
    
<caption class="bg-primary text-white">Offres d'emplois</caption>
 
  <thead>
      
    <tr>
      
      <th scope="col">Nom de l'emploi</th>
      <th scope="col">Domaine</th>
      <th scope="col">Ville</th>
      <th scope="col">Date de publication</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
      
    </tr>
  </thead>
  <tbody>
      <?php 
 while($resultat = $requete->fetch()){
?>
    <tr>
     
      <td><?php echo $resultat['nom_emploi']?></td>
      <td><?php echo $resultat['domaine']?></td>
      <td><?php echo $resultat['ville']?></td>
      <td><?php echo $resultat['date_publication']?></td>
      <td><button type="button" onclick="location.href='modifier.php?id=<?= $resultat['id'] ?>'"  class="btn btn-primary" >Modifier</button></td>
      <td><button type="button" onclick="location.href='emploi_admin.php?supprime=<?= $resultat['id'] ?>'"   class="btn btn-danger" id="connection">Supprimer</button></td>
    </tr>
   
    
  </tbody>
  <?php 
 }
  
?>
  
</table>
<button type="submit" class="btn btn-primary" onclick="location.href='ajouter.php'" name="ajouter" id="ajouter">Ajouter</button>




<?php


include("../view/footer.php"); 
?>
