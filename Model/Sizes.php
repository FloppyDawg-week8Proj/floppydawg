<?php
	Class Sizes{
		static function getAllSizes(){
			$sql = 'SELECT * FROM sizes';
			$arrResults = DB::getRecord()->runSQL("getAllData", $sql);
			$arrSizes = [];
			foreach($arrResults as $result){
				$arrSizes[$result['id']] = $result['strName'];
			}
			
			return $arrSizes;
		}
	}

?>