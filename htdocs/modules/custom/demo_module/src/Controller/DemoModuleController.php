<?php
namespace Drupal\demo_module\Controller;

class DemoModuleController {

	private $facebookPageId = '';
	private $facebookAppId = '432872030394927';
	private $facebookAppSecret = '2c67dacc46afa749c0a765386413eb6b';
	private $graph_url = "https://graph.facebook.com/me/feed?access_token=";
	
	public function loadPage() {
	
		$url = $this->getFacebookFeed();
	
		return [
			'#markup' => "This is demo module.<br/><a href='$url'>Load Facebook Feed</a>" 
		];
	}
	
	public function secondPage() {
		return [
			#'#markup' => 'This is demo module secondPage.'
			
			'#type' => 'markup',
			'#theme' => 'second_page_template',
			'#content' => $this->loadSecondPageContent(),
			'#myname' => 'Ashwin',
			'#cache' => ['max-age' => 0]
			
		];
	}
	
	private function loadSecondPageContent() {
		return [
			['name' => 'Nilesh', 'Gender' => 'M'],
			['name' => 'Sujaya', 'Gender' => 'F'],
			['name' => 'Prachi', 'Gender' => 'F'],
			['name' => 'Sumit', 'Gender' => 'M'],
			['name' => 'Ashwin', 'Gender' => 'M'],
			['name' => 'Niravsaheb', 'Gender' => 'M'],
		];
	}
	
	private function getFacebookFeed() {
		$url = 'https://graph.facebook.com/'.$this->facebookPageId.'/posts?&access_token='.$this->facebookAppId.'|'.$this->facebookAppSecret;
		return $url;
	}
	
}