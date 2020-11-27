<?php
//Créer tableau associatif des personnes présentes dans votre groupe. Utilisez pour les clés "person1", "perosn2",...

//Code à faire ici
//key 'yoann'=>'person1'value

$tabAssoc=[
    'person1'=>'yoann',
    'person2'=>'saufiane',
    'person3'=> 'aimad',
    'person4'=>'célia',
    'person5'=>'anthony',
    'person6'=> 'jérémy',
    'person7'=>'miguel',
    'person8'=>'sanaa',
    'person9'=>'zak',
    
    ];
    var_dump($tabAssoc);
    echo '<br>';
    echo implode($tabAssoc);
    echo '<br>';
    foreach ($tabAssoc as $key => $value) {
    echo "key : $key value: $value <br>";
    }