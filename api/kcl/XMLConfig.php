<?php

//!  XML Configurator  class 
/*!
 * @author Rashed Karim 2016
 * PHP class that is fully capable of reading and parsing museum.xml and its functions provide info on the XML's contents
 *  
 */
    include_once("ServerLogs.php");
    

    class XMLConfig
    {

    	public $xml_file_path; 
        public $xml_obj;
        public $xml_string; 
        
       
       	
        /*
        *	Constructor seeks path to app_config.xml
        */
    	public function __construct($xml_file_path)
    	{

    		$this->xml_file_path = $xml_file_path; 
    		
    		$this->xml_string  = @file_get_contents($this->xml_file_path); 		// @ suppress warnings 

    		if ($this->xml_string != FALSE) 
    		{
	    	
	    		// read the XML 
	    		$this->xml_obj = new SimpleXMLElement($this->xml_string);	

	    		//file_put_contents('debug.txt', print_r($this->xml_obj, true));
    		}
    		else {
				$this->xml_obj = new SimpleXMLElement('<error>Incorrect path to XML file</error>');	    
				ServerLogs::LogDebugMessage("Fatal error from XMLConfig, wrong path to XML or could not read config xml from ".$xml_file_path); 
    		}

    	}

    	//! 
    	/*!
    	*	Returns the link to the node in the XML pertaining to the specimen 
    	*/
    	private function GetSpecimenNodeFromID($specimen_id)
    	{
    		$specimen_node = NULL;

    		foreach ($this->xml_obj->specimens->specimen as $specimen)
    		{

    			$attrib = $specimen->attributes(); 



    			if ($attrib["id"] == $specimen_id)
    			{
    				$specimen_node = $specimen;
    				break;
    			}
    		}

    		return $specimen_node;
            //file_put_contents('debug.txt', print_r($specimen_node, true));
    	}

        //! 
        /*!
        *   Returns the link to the node in the XML pertaining to the specimen-groups 
        */
        private function GetSpecimenGroupNode($specimen_group_name)
        {
            $specimen_node = NULL;

            foreach ($this->xml_obj->specimens as $specimens)
            {
                $attrib = $specimens->attributes(); 

                if ($attrib["name"] == $specimen_group_name)
                {
                    $specimen_node = $specimens;
                    break;
                }
            }

            return $specimen_node;
        }

        /*!
        *   Returns an array of specimen ids 
        */
        private function GetSpecimens($specimen_group_name) 
        {
            $specimen_ids = array(); 

            $specimen_group = $this->GetSpecimenGroupNode($specimen_group_name);

            if ($specimen_group != NULL) {
                foreach ($specimen_group->specimen as $specimens)
                {
                    $attrib = $specimens->attributes(); 

                    array_push($specimen_ids, "".$attrib['id']);
                }
            }   

            return $specimen_ids; 
        }

        /*****************************************************
        *
        *       PUBLIC FUNCITONS FOLLOW 
        *
        ******************************************************/

        /*!
        *   Returns the specimen's data 
        */
        public function GetSpecimenData($specimen_id, $which_data)
        {
            $data = "<i>".$which_data."</i> not found in xml";
            $specimen_node = $this->GetSpecimenNodeFromID($specimen_id); 

            if ($specimen_node != NULL) {

                if ($which_data == 'title')
                {
                    $data = "".$specimen_node->title; 
                }
                else if ($which_data == "subtitle")
                {
                    $data = "".$specimen_node->subtitle; 
                }
                else if ($which_data == "description")
                {
                    $data = "".$specimen_node->description; 
                }
                
            }

            return $data; 
        }

        /*!
        *       Image URL
        */
        public function GetSpecimenURL($specimen_id)
        {
            $data = "<i>Image URL</i> not found in xml";
            $specimen_node = $this->GetSpecimenNodeFromID($specimen_id); 
            
            try{ 
                $data = "".$specimen_node->image->url;
            }
            catch (Exception $e) {
                ServerLogs::LogDebugMessage('No image URL for specimen $specimen_id');
            }

            return $data; 

        }




    	//! Returns the number of specimens 
    	/*!
    	*	Returns the total number of specimens 
    	*/
    	public function GetSpecimenCount()
    	{
    		return count($this->xml_obj->specimens->specimen);
    	}



    	//! 
    	/*! 
    	*	Get Specimen group id 
    	*/
    	public function GetSpecimenGroupID($specimen_group_name)
    	{
    		$specimen_node = $this->GetSpecimenGroupNode($specimen_group_name);    		


            //print_r($specimen_node, true);
    		
    		/*if ($app_node !=NULL)
    		{
    			return "".$app_node->appid;
    		}*/ 

    		$specimen_id = 'app id not found';
			
			// See http://stackoverflow.com/questions/1652128/accessing-attribute-from-simplexml
			// The output from attributes() needs to be cast as an array
			foreach ($specimen_node->attributes() as $attribute => $attribute_value)
			{
				if ($attribute == 'id')	
					$specimen_id = "".$attribute_value;
			}

	    	return $specimen_id; 
    	}

        /*
        *   Get a digest of the specimen data 
        */
        public function GetSpecimenDataDigest($specimen_group_name)
        {
            $specimen_ids = array();
            $output = array();

            $specimen_ids = $this->GetSpecimens($specimen_group_name); 

            if (count($specimen_ids) > 0)
            {
                foreach ($specimen_ids as $specimen_id)
                {
                    $data = array();
                    $data["title"] = $this->GetSpecimenData($specimen_id, "title");
                    $data["subtitle"] = $this->GetSpecimenData($specimen_id, "subtitle");
                    $data["description"] = $this->GetSpecimenData($specimen_id, "description");
                    $data["image"] = $this->GetSpecimenURL($specimen_id);

                    $output[$specimen_id] = $data; 
                }
            }

            return $output;
        }

    	


    }		// end class 



?>