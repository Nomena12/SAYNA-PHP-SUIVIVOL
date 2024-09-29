<?php 

include('../app/Views/header.php');



?>




        <div class="row">
            <h1>Liste des Pays</h1>
        </div>

        <div class="row">


        
<!--
        $html = '<li class="'.($item['checked']?'done':'').' ">
                     drag handle -->
                    
                    <!-- checkbox 
                    <div class="icheck-primary d-inline ml-2">
                    <a href="toggleItem.php?item='.$item['id'].' ">';

                if($item['checked']){
                  $html.=   '<i class="far fa-check-square"></i>'; 
                }else{
                  $html.=  '  <i class="far fa-square"></i> '; 

                  <FontAwesomeIcon icon="fas fa-star" />
                }
     $html.='    </a>     </div>

            -->
        </div>
     
<?php
include('../app/Views/footer.php');
