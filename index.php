<?php
	require_once('./Smarty/libs/Smarty.class.php');
	$smarty = new Smarty;

	$dsn  = 'mysql:dbname=school_management;host=localhost';
	$user = 'app_user';
	$pass = 'app_user';
	$dbh = new PDO( $dsn, $user, $pass );
	
	if( $_GET['p'] == 1 ){
		lists( $dbh );
	}else{
		main();
	}
	function main(){
		echo "main";
	}
	function lists(){
		$student_data = array();
		global $dbh, $smarty;
		try{
				$stt = $dbh->query("SET names utf8" );
				$stt = $dbh->query("SELECT * FROM student" );
				while( $row = $stt->fetch( PDO::FETCH_ASSOC )){
						$student_data[] = $row;	
				}
		}	
		catch( PDOException $e ){
				print( 'Error:'. $e->getMessage());
				die();
		}
		$smarty->assign('student_data', $student_data);
		$smarty->display('index.tpl');

		$pdo = null;
}
function delete( $id ){

}
?>
