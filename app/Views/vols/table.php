<div class="row">
            <table class='table table-bordered table-striped'>
                <thead>
                    <tr>
                        <th>Star</th>
                        <th>Numéro</th>
                        <th>Compagnie </th>
                        <th>Aéroport Départ </th>
                        <th>Aéroport Arrivée </th>
                        <th>Date Heure Départ Prévue</th>
                        <th>Date Heure Arrivée Prévue</th>
                        <th>Statut</th>
                        <th>Porte Embarquement</th>
                    </tr>

                </thead>

                <tbody>

           

                    <?php
                    

                    
                    foreach ($vols as $v) {
                        echo '<tr>';

                       // echo '<td><i class="far fa-star"></i></td>';
                       
                      // session_start(); // Démarrer la session

                      
                        echo '<td>';
                        echo kernel\Component::display('button', [
                            'url' => '.?controller=Vols&action=toggleFavori&vols=' . $v->id,
                            'label' => $v->favori, // Utiliser le label stocké dans la base de données
                            'type' => 'info',
                        ]);
                        echo '</td>';
                   
                    


                       




/*
                       echo '<td>';

                        echo kernel\Component::display('button',['url' => '.?controller=Vols&action=toggleFavori&vols='.$v->id. '&label=' . urlencode('<i class="far fa-star"></i>'),
                            'label' => '<i class="far fa-star"></i>',
                            'type' =>'info', ]);

                        echo '</td>';
*/

                        echo '<td>'.$v->numero.'</td>';
                        echo '<td>'.\app\Models\Compagnies::find($v->compagnie_id)->name.'</td>';
                        echo '<td>'.\app\Models\Aeroports::find($v->aeroportDepart_id)->name.'</td>';
                        echo '<td>'.\app\Models\Aeroports::find($v->aeroportArrivee_id)->name.'</td>';
                        echo '<td>'.date('d/m/y  h:i' ,strtotime($v->dateHeureDepartPrevue)).'</td>';
                        echo '<td>'.date('d/m/y h:i' ,strtotime($v->dateHeureArriveePrevue)).'</td>';
                        echo '<td>'.$v->statut.'</td>';
                        echo '<td>'.$v->porteEmbarquement.'</td>';



                        echo '</tr>';
                    }




                    ?>

                </tbody>


            </table>

        </div>