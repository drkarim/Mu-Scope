<?php 
	
	
	// Function for finding entries with filenames: . and .. and .DS_Store files in the folder 
	function startsWith($haystack, $needle) {
	    // search backwards starting from haystack length characters from the end
	    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
	}


	/****************************************
	*		
	*			GET Request handler
	*	
	******************************************/

	$dicom_folder_root = "../dicom/";
	$file_list_json = json_encode(array());
	$slices_max = 200; 		// set to -1 if seeking to display all slices 

	if (isset($_GET['folder'])) {
		
		$dicom_folder = $_GET['folder']; 
		$dicom_folder = $dicom_folder_root.$dicom_folder."/";

		if (file_exists($dicom_folder)) {

			$files = scandir($dicom_folder);
			//echo "Finished scanning directory ... total files found = ".count($files)."\n";
			
			//file_put_contents('filenames.txt', print_r($files, true));

			// remove entries that start with . and .. and .DS_Store (in OSX)
			for ($i=0;$i<count($files);$i++)
			{
				if (startsWith($files[$i], "."))
				{
					unset($files[$i]);
				}

			}

			// Add dicom folder path to each file 
			foreach ($files as $idx=>$file)
			{
				$files[$idx] = $dicom_folder.$file; 
			}

			// Optional code: only if $slices_max is set a subset of the file list is sought
			if ($slices_max > 0)
			{
				$files = array_slice($files, 0, $slices_max);
			}

			
			//file_put_contents('filenames.txt', print_r($files, true));

			// Escaping slashes see http://stackoverflow.com/questions/10210338/json-encode-escaping-forward-slashes
			$file_list_json = json_encode($files, JSON_UNESCAPED_SLASHES); 	
		}
	}
	
	echo $file_list_json;




?>