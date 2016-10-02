<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

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
echo $child->dropDownList( 'ddp1', 2,['val1','val2','val3']  );
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
        [
            'type' => 'text',
            'name' => 'login',
            'value' => '23',
            'options'=>[ 'id' => 'loginId', 'class' => 'loginClass', 'placeholder' => 'login']
        ],
        [
            'type' => 'dropDownList',
            'name' => 'ddp2',
            'selected'=> 1,
            'data' => ['val1','val2','val3'],
            'options'=>['id'=>'3','class'=>'my_ddp']
        ],
        [
            'type' => 'radiobuttonsList',
            'name' => 'rbl',
            'value' => ['checked'=>1],
            'data' => ['inp_1','inp_2','inp_3'],
            'options'=> ['id'=>'my_rbl', 'class'=>'my_rbl_class']
        ],
        [
            'type' => 'checkboxList',
            'name' => 'cbl',
            'value' => ['checked'=>1],
            'data' => ['cbl1','cbl2','cbl3'],
            'options' =>['id'=>'cbl_id', 'class'=>'cbl_class']
        ],
        [
            'type' => 'password',
            'name' => 'pwd',
            'value' => '',
            'options' => ['class'=>'pwd_class']

        ]
    ]
]);
?>

</body>
</html>
