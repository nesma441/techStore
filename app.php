<?php
// paths and urls  
define("PATH",__DIR__ ."/");
define("URL","http://localhost/techstore/");

// db cradentials 
echo PATH."inc/app.php";

// include classes 
require_once(PATH . "vendor/autoload.php");
// require_once(PATH . "classes/request.php");
// require_once(PATH ."classes/session.php");
// require_once(PATH ."classes/db.php");
// require_once(PATH ."classes/models/product.php");
// require_once(PATH ."classes/models/order.php");
// require_once(PATH ."classes/models/order_details.php");
// require_once(PATH ."classes/models/cat.php");
// //require_once(PATH ."classes/models/max.php");
// require_once(PATH ."classes/validation/validationRule.php");
// require_once(PATH ."classes/validation/required.php");
// require_once(PATH ."classes/validation/numeric.php");
// require_once(PATH ."classes/validation/max.php");
// require_once(PATH ."classes/validation/email.php");
// require_once(PATH ."classes/validation/str.php");
// require_once(PATH ."classes/validation/validator.php");

// use 3lshan y3rf y2ra elclass elli hy3ml mno obj 
use techStore\classes\request;
use techStore\classes\session;
//obj
$session= new Session;
$request= new Request;

// elouto loading wazefto y5taser stor elrequire 
// f satr wa7ed bs :: hnrequire elmalf elli 
// by auto load elclasses 
// w lw zawdt classes tanya w msheet 3la standard elnamespace 
// hyzwdlk elclass elli enta zawedto dh aoutomatic 