<?php 
require_once( "./include/initialize.php");
// require_once("./../include/config.php");
// require_once("./../include/function.php");
// require_once("./../include/accounts.php");
// require_once("./../include/autonumbers.php");  
// require_once("./../include/companies.php");  
// require_once("./../include/job.php");  
// require_once("./../include/employees.php");  
// require_once("./../include/categories.php");  
// require_once("./../include/applicant.php");  
// require_once("./../include/jobregistration.php");  
// require_once("./../include/database.php");
 if(!isset($_SESSION['ADMIN_USERID'])){
    redirect(web_root."admin/login.php");
  }

$content='home.php';
$view = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
switch ($view) {
  case '1' :
        // $title="Home"; 
    // $content='home.php'; 
    if ($_SESSION['ADMIN_ROLE']=='Cashier') {
        # code...
      redirect('orders/');

    } 
    if ($_SESSION['ADMIN_ROLE']=='Administrator') {
        # code... 

      redirect('meals/');

    } 
    break;  
  default :
 
      $title="Home"; 
    $content ='home.php';    
}
require_once("theme/templates.php");
?>
