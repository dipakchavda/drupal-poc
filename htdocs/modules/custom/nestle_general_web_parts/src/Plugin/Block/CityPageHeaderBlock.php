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
	// Term ID From URL
	$current_path = \Drupal::service('path.current')->getPath();
	$path_args 	  = explode('/', $current_path);
	$city_country_tid = isset($path_args[3]) ? $path_args[3] : 0;
	#print "<pre>";print_r($path_args); die;
	
	if ($city_country_tid) {
		$term = \Drupal\taxonomy\Entity\Term::load($city_country_tid);
		$result['title'] = "Taste Guide";
		$result['image_data'] = $term->get('field_img_city')->getValue();	// Image Object
		$result['image_url'] = ImageStyle::load('header_image_1680x408')->buildUrl(File::load($term->get('field_img_city')->getValue()[0]['target_id'])->getFileUri());	// Image URL
		$result['city_title'] = trim($term->toLink()->getText());
		$result['city_text'] = trim($term->getDescription());
	}

	#print "<pre>";print_r($result); die;
	return $result;
  }

}