	<?php
		// get the brand bame
		$brandName = $_GET['brand']; 
		// Connect to the database table and retrieve the required brand data
 		try {		
 			// Make a connection to the drinks database
			$dbhandle = new PDO('sqlite:../../db/test1.db', 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));

			// Prepare a SQL statement to select a record matching the brand name selected in the view drop-down list
			$sql = 'SELECT * FROM Model_3D WHERE brand = "'. $brandName. '"';
			
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $dbhandle->query($sql);
		
			// Set up an array to return the results to the view
			$result = null;
			
			// Set up a variable to index each row of the array
			$i=0;	
			
			// Use PDO fetchall() the results from the database using a while loop
			// Use a while loop to loop through the table rows — there may be more than one record with the same brand name
			while ($data = $stmt->fetch()) {
				
				// Write the database contents to the results array for sending back to the view
				$result[$i]['brand'] = $data['brand'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				
				// increment the row index
				$i++;
			}
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}
    	
    	// Close the database connection
		$dbhandle = NULL;
		
		echo json_encode($result);

 ?>