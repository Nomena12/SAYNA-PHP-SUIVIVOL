<?php

use kernel\Request;

/*
$vols = \app\Models\Vols::all();
foreach ($vols as $v) {
   

   var_dump(  kernel\Component::display('button',['url' => '.?controller=Vols&action=toggleFavori&vols='.$v->id,
        'label' => '<i class="fas fa-star"></i>',
        'type' =>'info', ]));

}
        */
/*
        $id = Request::get('vols');
      //  var_dump($id);

       $label = urldecode($_GET['label']);
       //$label = Request::get('label');
       
       var_dump($label);
      //$phrase='<i class="far fa-star"></i>';
       
       //var_dump(strlen($phrase));

       if ($label == '<i class="far fa-star"></i>') {
         $label = '<i class="fas fa-star"></i>';
         
         //header('Location:.?controller=Vols&action=index');
       } else {
        $label = '<i class="far fa-star"></i>';
        header('Location:.?controller=Vols&action=index');
    }
    */

     // Démarrer la session pour pouvoir utiliser $_SESSION

$id = Request::get('vols');
$label = urldecode($_GET['label']);
var_dump($label);

if ($label == '<i class="far fa-star"></i>') {
    $label = '<i class="fas fa-star"></i>';
    $_SESSION['label_' . $id] = $label;  // Stocker dans la session
   
    
} else {
    $label = '<i class="far fa-star"></i>';
    $_SESSION['label_' . $id] = $label;  // Stocker dans la session
    header('Location:.?controller=Vols&action=index');
}
