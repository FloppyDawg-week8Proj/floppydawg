<?php
Class Products
{	
	const products = "SELECT products.*, categories.strName as categoryName, photos.strFile FROM (products LEFT JOIN categories ON categories.id=products.nCategory LEFT JOIN photos ON photos.nProductID = products.id)";
	
	//set the SQL to be used to get the required data
	static function setSQL($case){
		switch ($case){
			case 'all':
				return self::products." WHERE photos.bMainPhoto=1";
			break;
				
			case 'features':
				return self::products." WHERE bFeatures=1 AND photos.bMainPhoto=1";
			break;
			
			case 'category':
				return self::products." WHERE products.nCategory=".$_GET['categoryID']." AND photos.bMainPhoto=1";
			break;
				
			default:
			break;
				
		}
	}
	
	//get all the information foreach product for this filter
	static function getProductsInfo($filter){
		
		//set wich products you want to use
		$sql = self::setSQL($filter);
		
		$arrData = DB::getRecord()->runSQL("getAllData", $sql);
		
		$products = '';
		foreach($arrData as $product){
			 $products .= (empty($products)?$product['id']:','.$product['id']);
		}		
		$arrProductsAdvantagesID = self::getProductsAdvantages($products);
		
		$arrProducts = [];
		foreach($arrData as $product){
			$product['advantages'] = $arrProductsAdvantagesID[$product['id']];
			array_push($arrProducts, $product);
		}
		
		return $arrProducts;
	}
	
	static function getProductsAdvantages($arrProductsID){
		$sql = "SELECT product_advantages.nAdvantageID, product_advantages.nProductID FROM product_advantages WHERE product_advantages.nProductID IN (".$arrProductsID.")";
		$arrResults = DB::getRecord()->runSQL("getAllData", $sql);
		
		$arrAdvantagesID = [];
		foreach($arrResults as $result){
			!isset($arrAdvantagesID[$result['nProductID']])?$arrAdvantagesID[$result['nProductID']] = []:'';
			array_push($arrAdvantagesID[$result['nProductID']], $result['nAdvantageID']);
		}

		return $arrAdvantagesID;
	}
	
}
?>