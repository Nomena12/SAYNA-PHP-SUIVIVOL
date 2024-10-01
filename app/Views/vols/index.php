<?php 

include('../app/Views/header.php');


use kernel\Auth;


?>


        <div class="row">
            <h1>Liste des Vols</h1>
         
        </div>

        <div class="row">
        <h2>Trier les vols</h2>
       
<form class="search-container" action=".?controller=Vols&action=search" method="post">
    <label for="compagnie">Compagnie :</label>
    <select id="compagnie" name="compagnie_id">
        <option value="">Sélectionnez une compagnie</option>
       

        <?php 
        foreach($compagnies as $c){
            echo '<option value="' . $c->id . '">' . htmlspecialchars($c->name) . '</option>';
        }
        ?>
        <!-- Ajouter d'autres compagnies ici -->
    </select>

    <label for="depart">Départ :</label>
    <select id="depart" name="aeroportDepart_id">
        <option value="">Sélectionnez un lieu de départ</option>
        
        <?php 
        foreach($aeroports as $a){
            echo '<option value="' . $a->id . '">' . htmlspecialchars($a->name) . '</option>';
        }
        ?>
        <!-- Ajouter d'autres lieux de départ ici -->
    </select>

    <button type='submit'>
        
        <img src="https://img.icons8.com/ios-filled/24/ffffff/search.png" alt="Icône de recherche">
    </button>
    </form>

<?php  include('../app/Views/vols/table.php');  ?>
        </div>

<?php
include('../app/Views/footer.php');
