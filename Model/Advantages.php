<?php
	Class Advantages {
		static function getAllAdvantages(){
			$sql = 'SELECT * FROM advantages';
			$arrResults = DB::getRecord()->runSQL("getAllData", $sql);
			$arrAdvantages = [];
			foreach($arrResults as $result){
				$arrAdvantages[$result['id']] = $result['strName'];
			}
			
			return $arrAdvantages;
		}
	}
?>