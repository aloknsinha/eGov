<?php
class DBforpdf {
	private $host = "localhost";
	private $user = "root";
	private $password = "passwd@123";
	private $database = "egov";
	
	private static $conn;
	
	function __construct() {
	    $this->conn = $this->connectDB();
	    if(!empty($this->conn)) {
	        $this->selectDB();
	    }
	}
	
	function connectDB() {
	    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
	    return $conn;
	}
	
	function selectDB() {
	    mysqli_select_db($this->conn, $this->database);
	}
	
	function runQuery($query) 
	{
	    $result = mysqli_query($this->conn, $query);
	    while($row=mysqli_fetch_assoc($result)) 
	    {
	        $resultset[] = $row;
	    }
	    if(!empty($resultset))
	        return $resultset;
	}

	function runforimage($query1)
	{
		$result1 = mysqli_query($this->conn, $query1);  
	    while($row = mysqli_fetch_assoc($result1)) 
	    {
	       $image = $row['image'];//blub in jdbc
	       $image_src = "upload/".$image;
	       $temp = echo "<img src=$image_src>";
	       $resultset1[] = $temp;
	    }
	    return $resultset1;
	}
	
	function numRows($query) 
	{
	    $result  = mysqli_query($this->conn, $query);
	    $rowcount = mysqli_num_rows($result);
	    return $rowcount;
	}
}
?>