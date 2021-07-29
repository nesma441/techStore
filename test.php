<?php
require_once("app.php"); 
// require_once("classes/request.php");
// require_once("classes/session.php");
// require_once("classes/db.php");
// require_once("classes/models/product.php");
// require_once("classes/models/order.php");
// require_once("classes/models/order.php");
// require_once("classes/validation/validationRule.php");
// require_once("classes/validation/required.php");
// require_once("classes/validation/numeric.php");
// require_once("classes/validation/max.php");
// require_once("classes/validation/email.php");
// require_once("classes/validation/str.php");
// require_once("classes/validation/validator.php");

use techStore\classes\models\Cat;
use techStore\classes\Request;
use techStore\classes\Session;

// $request=new Request;
//$sess=new Session;

// $sess->set('name','nesma abdelfatah ');

// $product1= new Product;
// $res=$product1->selectAll();

// echo '<pre>';
// print_r($res);
// echo '<pre>';

 //$order1= new Order;
//$res=$order1->selectAll();

// echo '<pre>';
// print_r($res);
// echo '<pre>';

//$prod=new Product;
//$count1=$prod->selectwhere("name =  'lenovo ideapad '");
//$count=$prod->getCount();
//$count=$order1->delete(1);
//print_r($count1);
//print_r($count);
////////////////////////////////
//$v=new Validitor;
// $v->validate('age','',['required','numeric']);
// echo'<pre>';
// print_r($v->getErrors());
// echo'<pre>';
/////////////////////

///echo $request->get('name');

$cat= new Cat;
print_r($cat->selectAll("id , name "));