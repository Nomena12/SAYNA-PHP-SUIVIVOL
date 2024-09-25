<?php

namespace seeders;

use kernel\Model;





chdir('../www');
include('../include.php');


// Récupérer toutes les compagnies et les aéroports
$compagnies = \app\Models\Compagnies::all();
$aeroports = \app\Models\Aeroports::all();

for ($i = 0; $i < 1000; $i++) {
    $vol = new \app\Models\Vols();
    $vol->numero = random_int(10, 99) . '-' . random_int(1000, 9999);
    $vol->compagnie_id = $compagnies[array_rand($compagnies)]->id;

    do {
        $vol->aeroportDepart_id = $aeroports[array_rand($aeroports)]->id;
        $vol->aeroportArrivee_id = $aeroports[array_rand($aeroports)]->id;
    } while ($vol->aeroportDepart_id == $vol->aeroportArrivee_id);

    $vol->dateHeureDepartPrevue = date('Y-m-d H:i:00', time() + random_int(0, 3000));
    $vol->dateHeureArriveePrevue = date('Y-m-d H:i:00', strtotime($vol->dateHeureDepartPrevue) + random_int(3600, 10800));
    $vol->statut = 'OK';
    $vol->porteEmbarquement = chr(random_int(65, 90));

    // Vérifiez ici avant d'appeler store()
    echo "<pre>";
    print_r($vol);
    echo "</pre>";

    // Enregistrement du vol
    $vol->store();
}




