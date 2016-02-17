<?php
	$host="cs1.ucc.ie"; // Host name
	$username="cmw2"; // Mysql username
	$password="iepuidee"; // Mysql password
	$db_name="cmw2project"; // Database name
	$tbl_name ="users"; //table name for users
	$tbl_name1 ="tickets"; //table name for tickets
	
	
	// Connect to server and select database.
		$link = mysqli_connect("$host", "$username", "$password");
		if ($link->connect_error) {
			die("Connection failed: " . $link->connect_error);
		} 
		mysqli_select_db($link,$db_name )or die("cannot select DB");
		
	$sql_firstname="SELECT first_name FROM $tbl_name WHERE user_id = 1";
	$sql_lastname="SELECT last_name FROM $tbl_name  WHERE user_id = 1";
	$sql_attending ="UPDATE $tbl_name1 SET attending = '1' WHERE ticket_id = 0";
	
	$firstname_attribute = "first_name";
	$lastname_attribute = "last_name";
	
	mysqli_query($link, $sql_attending);
	
	function sqltoString($link1, $sqlstatement, $attribute) {    
		if ($object = mysqli_query($link1, $sqlstatement)) {
			/* fetch associative array */
			while ($row = mysqli_fetch_assoc($object)) {
				$string = $row[$attribute];
			}
		/* free result set */
		mysqli_free_result($object);
		return $string;
		}
	}
	

	
	$firstname = sqltoString($link,$sql_firstname, $firstname_attribute);
	$lastname = sqltoString($link, $sql_lastname, $lastname_attribute);
	
	$my_img = imagecreate( 425, 250 );
	$background = imagecolorallocate( $my_img, 200, 255, 255 );
	$text_colour = imagecolorallocate( $my_img, 0, 0, 0 );
	$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
	imagestring( $my_img, 50, 30, 25, "Name Badge ", $text_colour );
	imagestring( $my_img, 5, 30, 90, $firstname, $text_colour );
	imagestring( $my_img, 5, 200, 90, $lastname, $text_colour );
	imagesetthickness ( $my_img, 5 );
	imageline( $my_img, 30, 45, 300, 45, $line_colour );

	header( "Content-type: image/png" );
	imagepng( $my_img );
	imagecolordeallocate( $line_color );
	imagecolordeallocate( $text_color );
	imagecolordeallocate( $background );
	imagedestroy( $my_img );
?>
