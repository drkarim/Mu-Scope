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

    		foreach ($this->xml_obj->collection->specimen as $specimen)
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

            foreach ($this->xml_obj->collection as $collection)
            {
                $attrib = $collection->attributes();

                if ($attrib["name"] == $specimen_group_name)
                {
                    $specimen_node = $collection;
                    break;
                }
            }

            return $specimen_node;
        }

        /*!
        *   Returns an array of specimen ids
        */
        private function Getcollection($specimen_group_name)
        {
            $specimen_ids = array();

            $specimen_group = $this->GetSpecimenGroupNode($specimen_group_name);

            if ($specimen_group != NULL) {
                foreach ($specimen_group->specimen as $collection)
                {
                    $attrib = $collection->attributes();

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
                else if ($which_data == "introduction")
                {
                    $data = "".$specimen_node->introduction;
                }
                else if ($which_data == "dicom_description")
                {
                    $data = "".$specimen_node->dicom_description;
                }
                else if ($which_data == "stl_description")
                {
                    $data = "".$specimen_node->stl_description;
                }

                // Note: add more lines here if you add extra specimen tags

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




    	//! Returns the number of collection
    	/*!
    	*	Returns the total number of collection
    	*/
    	public function GetSpecimenCount()
    	{
    		return count($this->xml_obj->collection->specimen);
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

        //!
        /*!
        *   Get a specimen's name
        */
        public function GetSpecimenName($specimen_id)
        {
            $specimen_node = $this->GetSpecimenNodeFromID($specimen_id);

            $attrib = $specimen_node->attributes();
            return $attrib["name"];

        }
        

        /*
        *   Get a digest of the specimen data
        */
        public function GetSpecimenDataDigest($collection_name)
        {
            $specimen_ids = array();
            $output = array();

            $specimen_ids = $this->Getcollection($collection_name);

            if (count($specimen_ids) > 0)
            {
                foreach ($specimen_ids as $specimen_id)
                {
                    $data = array();
                    $data["title"] = $this->GetSpecimenData($specimen_id, "title");
                    $data["subtitle"] = $this->GetSpecimenData($specimen_id, "subtitle");
                    $data["introduction"] = $this->GetSpecimenData($specimen_id, "introduction");
                    $data["dicom_description"] = $this->GetSpecimenData($specimen_id, "dicom_description");
                    $data["stl_description"] = $this->GetSpecimenData($specimen_id, "stl_description");
                    $data["image"] = $this->GetSpecimenURL($specimen_id);

                    // Note: add more lines here if you add extra specimen tags

                    // name and id attribute of each specimen
                    $data['specimen_name'] = "".$this->GetSpecimenName($specimen_id);
                    $data['specimen_id'] =$specimen_id;

                    $output[$specimen_id] = $data;
                }
            }

            return $output;
        }
        
        /*
        *   Get a list of collection names as an array 
        */
        function GetAllCollections()
        {
            $collection_names = array();
            
            foreach ($this->xml_obj->collection as $collection)
            {
                $attrib = $collection->attributes();
                    
                array_push($collection_names, "".$attrib["name"]); 
                
            }
            
            return $collection_names;
        }




    }		// end class



?>
