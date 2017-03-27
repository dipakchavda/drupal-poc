<?php

/**
 * @file
 */
namespace Drupal\nestle_general_web_parts\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
use \Drupal\Core\Routing;
use \Drupal\Core\Url;
use Drupal\image\Entity\ImageStyle;
use \Drupal\file\Entity\File;

/**
 * Provides a 'City Page Header Block' Block.
 *
 * @Block(
 *   id = "city_header_block",
 *   admin_label = @Translation("City Page Header Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class CityPageHeaderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'city_header_block',
		'#content' => $this->getContent(),
		'#cache' => array('max-age' => 0)
    );
  }
  
  private function getContent() {

	$result = array();

	// Language ID
	$language_code = \Drupal::languageManager()->getCurrentLanguage()->getId();
	// Language Name
	$language_name =  \Drupal::languageManager()->getCurrentLanguage()->getName();
	
	$query = \Drupal::entityQuery('taxonomy_term')->condition('vid', 'country')->execute();
	
	if ($query) {
		
		foreach($query as $key=>$tid) {
			$country_term = \Drupal\taxonomy\Entity\Term::load($tid);			
		}
	}
	
	#print "<pre>";print_r($result); die;
	return $result;
  }

}