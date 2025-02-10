<?php
include_once 'DB.php';
class ManageBD extends DB{
  public function getQueries(){

	$course = $this->connect()->query('SELECT * FROM course');
	$department =$this->connect()->query('SELECT * FROM department');
	$instructor=$this->connect()->query('SELECT * FROM instructor');
	$student=$this->connect()->query('SELECT * FROM student');
	$takes=$this->connect()->query('SELECT * FROM takes');
	$teaches=$this->connect()->query('SELECT * FROM teaches');
	
	
	$queries = array (
		"course"=>$course,
		"department"=>$department,
		"instructor"=>$instructor,
		"student"=>$student,
		"takes"=>$takes,
		"teaches"=>$teaches,
		
		
	);
	
		return $queries;
	
	}
}
?>