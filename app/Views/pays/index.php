<?php 

include('../app/Views/header.php');



?>


        <div class="row">
            <h1>Liste des Pays</h1>
        </div>

        <div class="row">

               <table class='table table-bordered table-striped'>
                <thead>

                </thead>
                    <tbody>
                        <?php
                        foreach($pays as $p){
                            
                            echo '<tr>';
                            echo '<td>'. $p->name .'</td>';
                            echo '<td>';
                            echo kernel\Component::display('button',['url' => '.?controller=Pays&action=edit&pays='.$p->id,
                            'label' => '<i class="fas fa-pen"></i>',
                            'type' =>'info', ]);
                            
                           

                             echo kernel\Component::display('button',['url' => '.?controller=Pays&action=delete&pays='.$p->id,
                            'label' => '<i class="fas fa-trash"></i>',
                            'type' =>'danger', ]);

                           
                           
                            echo '</td>';

                            echo '</tr>';
                        }

                       
                        


                        ?>

                    </tbody>


               </table>
        </div>
     
<?php
include('../app/Views/footer.php');