<?php

//define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
include ('libs/Forms.php');

$our_form= new Forms();
echo $our_form->begin();
$names = ["инпут1","инпут2","инпут3"];
$values = ['checked'=>1];
$classes = ['class'=>"class1"];
echo $our_form->radiobuttonsList("radiob",$values,$names,$classes);
echo $our_form->end();
