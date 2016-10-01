<?php

//define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
include ('libs/Forms.php');
include ('libs/ChildForm.php');
include ('libs/Debug.php');

//$our_form = new Forms();
$child = new ChildForm();
echo $child->begin(['id'=>'rrr', 'class'=>'ttt']);
$names = ["инпут1","инпут2","инпут3"];
$values = ['checked'=>1];
$classes = ['class'=>"class1"];
echo $child->radiobuttonsList("radiob",$values,$names,$classes);
echo $child->end();

echo $child->createForm([
    'id' => 'crForm',
    'class' => 'crFormClass',
    'action' => 'test.php',
    'method' => 'post',
    'items' => [
        [
            'type' => 'text',
            'name' => 'login',
            'id' => 'loginId',
            'class' => 'loginClass',
            'value' => '23',
            'placeholder' => 'login'
        ],
    ]
]);
