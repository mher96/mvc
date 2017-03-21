<?php
require_once "../vendor/autoload.php";
use SameerShelavale\PhpCountriesArray\CountriesArray;

class holidayController {
	
	function __construct()
	{
		
	}


	public function index(){
		$countries = CountriesArray::get( 'alpha2', 'name' );
		$view = new generalView($countries);
		$view->render('holiday');
	}


	public function holiday($country){
		$country = $country[0];
		$key = 'b8f6d302-e660-4289-b69e-d93f3f261836';
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', 'https://holidayapi.com/v1/holidays?key='.$key.'&country='.$country.'&year=2016');
		// echo $res->getStatusCode();
		// "200"
		// echo $res->getHeader('content-type');
		// echo $res->getBody();
		$res = $res->getBody();
		// echo $res;
		$res = json_decode($res,true);
		$var = [];
		foreach ($res['holidays'] as $key => $value) {
			$var[] = $key.' '.$value[0]['name'].'</br>';
		}
		$view = new generalView($var);
		$view->render('hol');
	}
}

?>