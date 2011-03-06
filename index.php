<?php
	require_once('./Smarty/libs/Smarty.class.php');
	$smarty = new Smarty;

	$dsn  = 'mysql:dbname=school_management;host=localhost';
	$user = 'app_user';
	$pass = 'app_user';
	$student_data = array();
	try{
		$dbh = new PDO( $dsn, $user, $pass );
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
?>
