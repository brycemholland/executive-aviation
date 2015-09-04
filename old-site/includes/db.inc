<?php

function find_time($destination)
{
	$Host 		= ":/var/lib/mysql/mysql.sock";
	$Database	= "executiveaviation";
	$User		= "execaviation";
	$Password	= "exec2010fly"; 
	
	// Connecting, selecting database
	$link = mysql_connect($Host, $User, $Password)
	    or die('Could not connect: ' . mysql_error());
	mysql_select_db($Database) or die('Could not select database');
	
	$query = "SELECT * from flight_time WHERE destination = '" . $destination . "'";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	$result_array = mysql_fetch_row($result);
	
	return $result_array;
} // function find_time($destination)

function populate_table()
{
	$Host 		= ":/var/lib/mysql/mysql.sock";
	$Database	= "executiveaviation";
	$User		= "execaviation";
	$Password	= "exec2010fly"; 
	
	// Connecting, selecting database
	$link = mysql_connect($Host, $User, $Password)
	    or die('Could not connect: ' . mysql_error());
	mysql_select_db($Database) or die('Could not select database');
	
	$fp = fopen("execairtimes.csv", "r");
	
	$id	= 0;
	while($new_line = fgetcsv($fp, 99999, ","))
	{
		/* FORMAT
		0: destination
		1: hours
		2: minutes
		3: plane type
		*/
		if($new_line[0] != "Destination")
		{
			$destination 	= $new_line[0];
			$hours		 	= $new_line[1];
			$minutes 		= $new_line[2];
			$plane_type 	= $new_line[3];
			$query 			= (sprintf("INSERT INTO flight_time(id, destination, hours, minutes, plane_type) VALUES($id, '%s', $hours, $minutes, '%s')", addslashes($destination), addslashes($plane_type)));
			$result 		= mysql_query($query) or die("Query failed: " . mysql_error());
		}
		$id++;
	}	
} // function populate_table

?>