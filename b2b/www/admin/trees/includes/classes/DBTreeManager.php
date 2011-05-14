<?php
/**************************************
     File Name: DBTreeManager.php
     Begin:  Sunday, April, 12, 2009, 11:36 AM
     Author: Ozan Koroglu
 			 Ahmet Oguz Mermerkaya 	
     Email:  koroglu.ozan@gmail.com
     		 ahmetmermerkaya@hotmail.com
 ***************************************/ 
 
 require_once('ITreeManager.php');
 
 class DBTreeManager implements ITreeManager
 {
 	private $db;
	
    public function __construct($dbc){
    	$this->db = $dbc;
    } 
	
 	public function insertElement($name, $pid, $slave)
	{
		$pid = (int) $pid;
        $pPath = '';
        $path  = '';
        if(0 == $pid){
            $path = '0';
        }else{
            $sql = "select path from " . TREE_TABLE_PREFIX . '_tree where id='.$pid;
            $query = $this->db->query($sql);
            $row   = $this->db->fetchObject($query);
            $pPath = $row->path;
            $path  = $pPath . ',' . $pid;
        }

		$sql = sprintf('INSERT INTO ' 
								. TREE_TABLE_PREFIX . '_tree(name, position, pid, slave,path)
							SELECT 
								\'%s\', ifnull(max(el.position)+1, 0), %d, %d,\''.$path.'\'  
							FROM '
								. TREE_TABLE_PREFIX . '_tree el 
							WHERE 
								el.pid = %d ',
							$name , $pid, $slave, $pid);
		$out = FAILED;
		if ($this->db->query($sql) == true) {
				$out = '({ "elementId":"'.$this->db->lastInsertId().'", "elementName":"'.$name.'", "slave":"'.$slave.'"})';
		}
		
		return $out; 	
 	}
 	
 	
 	
 	public function getElementList($pid, $pageName)
	{
		if ($pid == null) {
			$pid = 0;
		}
		else {
			$pid = (int) $pid;
		}
		$sql = sprintf("SELECT 
        					id, name, slave 
        				FROM " 
        					. TREE_TABLE_PREFIX . "_tree
		      			WHERE
		      				pid = %d  
		      			ORDER BY
		      				position ",
        				$pid);
						
		$str = FAILED;
        $result = $this->db->query($sql);
        if ($result !== false)
        {
        	$str = NULL;
            while ($row = $this->db->fetchObject($result))
            {
                $supp = NULL;
                if ($row->slave == 0)
                {
                    $supp = "<ul class='ajax'>"
                    ."<li id='".$row->id."'>{url:".$pageName."&action=getElementList&pid=".$row->id."}</li>"
                    ."</ul>";
                }
        
                $str .= "<li class='text' id='".$row->id."'>"
                ."<span>".$row->name."</span>"
                .$supp
                ."</li>";
            }
        }
        return $str;				
						
 	
 	}
 	
 	
 	public function updateElementName($name, $elementId, $pid)
	{
		$elementId = (int) $elementId;
 		$sql = sprintf('UPDATE ' 
        						. TREE_TABLE_PREFIX.'_tree 
							SET 
								name = \'%s\'
					    	WHERE 
					    		id = %d ',
        					$name, $elementId);
		$out = FAILED;					
		if ($this->db->query($sql) == true) {
				$out = '({"elementName":"'.$name.'", "elementId":"'.$elementId.'"})';
		}
		
		return $out;
 	}
 	
 	
     public function deleteElement($elementId, &$index = 0, $pid)
     {
     	$elementId = (int) $elementId;
         $sql = sprintf('SELECT
     				 		id, slave, position, pid 
     					FROM '. TREE_TABLE_PREFIX .'_tree
     					WHERE 
     						pid = %d ',
         				$elementId);
         $row = NULL;
         $index++;
         if ($result = $this->db->query($sql))
         {
             while ($row = $this->db->fetchObject($result))
             {
                 // if element type is not slave,
                 // there can be childs belonging to that master
                 if ($row->slave == "0")
                 {
                     // recursive operation, to reach the deepest element
                     $this->deleteElement($row->id, $index);
                 }
             }
         }
         $index--;
     
         // only update the elements' position on the same level of our first element
         if ($index == 0)
         {
             $sql = sprintf('SELECT 
     							position, pid
     						FROM '
             .TREE_TABLE_PREFIX.'_tree
     						WHERE
     							id = %d',
            				 $elementId);
     
     
             if ($result = $this->db->query($sql))
             {
                 if ($row = $this->db->fetchObject($result))
                 {
                     $sql = sprintf('UPDATE '
                    				 .TREE_TABLE_PREFIX.'_tree
     								SET 
     									position = position - 1
     								WHERE 
     									pid = %d
     									AND
     									position > %d',
                     					$row->pid, $row->position);
                     $this->db->query($sql);
                 }
             }
         }
     
         // start to delete it from bottom to top
         $sql = sprintf('DELETE FROM '
         					.TREE_TABLE_PREFIX.'_tree
     	        		WHERE 
     			        	pid = %d 
     			        	OR
     			        	id = %d ',  $elementId, $elementId);
     
	 	 $out = FAILED;
         if ($this->db->query($sql) == true)
         {
             $out = SUCCESS;
         }
         return $out;     
     }
 	
 	public function changeOrder($elementId, $oldOwnerEl, $destOwnerEl, $destPosition)
	{
        $oPath = '';
        $nPath = '';
        if(0 == $destOwnerEl){
            $nPath = '0';
        }else{
            $sql = sprintf('SELECT
						 		path 
							FROM '
								. TREE_TABLE_PREFIX . '_tree 
							WHERE 
								id = %d
							LIMIT 1',
							$destOwnerEl);
            $query = $this->db->query($sql);
            $row   = $this->db->fetchObject($query);
            $nPath = $row->path . ',' . $destOwnerEl;

        }
        $sql = sprintf('SELECT
                        pid, position,path 
                    FROM '
                        . TREE_TABLE_PREFIX . '_tree 
                    WHERE 
                        id = %d
                    LIMIT 1',
                    $elementId);
		$out = FAILED;					
		if ($result = $this->db->query($sql))
		{			
				if ($element = $this->db->fetchObject($result))
				{						
					$sql1 = sprintf('UPDATE '
										 . TREE_TABLE_PREFIX . '_tree 
									 SET 
									 	position = position - 1
									 WHERE  
									 	position > %d
									    AND
									    pid = %d ',
									 $element->position, $element->pid);
							   
					$sql2 = sprintf('UPDATE '
										. TREE_TABLE_PREFIX . '_tree 
									 SET 
									 	position = position + 1
									 WHERE
							 			 position >= %d 
									   	 AND
									   	 pid = %d ',
									 $destPosition, $destOwnerEl);
							   
					$sql3 = sprintf('UPDATE '
										. TREE_TABLE_PREFIX . '_tree 
									 SET 
									 	position = %d , pid = %d , path = \''.$nPath.'\'
									 WHERE 
									 	id = %d ',
										$destPosition, $destOwnerEl, $elementId);
	            
                    $oPath  = $element->path . ',' . $elementId;
                    $nPath .= ','.$elementId;
				    $sql4   = 'UPDATE '
										. TREE_TABLE_PREFIX . '_tree 
									 SET 
									 	path = REPLACE(path,\''.$oPath.'\',\''.$nPath.'\')
									 WHERE
                                        path like \''.$oPath.'\%\'
                                    ';
				
                    $changePath = true;
                    if($destOwnerEl != $oldOwnerEl){
                        if(!$this->db->query($sql4)){
                            $changePath = false;
                        }
                    }
					if ($this->db->query($sql1) && $this->db->query($sql2) && $this->db->query($sql3) && $changePath) {					
						$out = '({"oldElementId":"'.$elementId.'", "elementId":"'. $elementId .'"})';
					}					
				}
				
		}
		return $out;				
 	}
	
	
	public function getRootId(){
		return 0;
	}
 	
 }
 ?>
