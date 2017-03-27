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
 * Provides a 'Country Page Header Block' Block.
 *
 * @Block(
 *   id = "country_header_block",
 *   admin_label = @Translation("Country Page Header Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class CountryPageHeaderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'country_header_block',
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
	
	if ($city_country_tid) {
		$term = \Drupal\taxonomy\Entity\Term::load($city_country_tid);
		$result['title'] = "TASTE GUIDE";
		$result['image_data'] = $term->get('field_img_country')->getValue();	// Image Object
		$result['image_url'] = ImageStyle::load('header_image_1680x408')->buildUrl(File::load($term->get('field_img_country')->getValue()[0]['target_id'])->getFileUri());	// Image URL
		$result['country_title'] = trim($term->get('field_country_title')->getValue()[0]['value']);
		$result['country_subtitle'] = trim($term->get('field_country_subtitle')->getValue()[0]['value']);
		$result['country_text'] = trim($term->get('field_country_text')->getValue()[0]['value']);
	}

	#print "<pre>";print_r($result); die;
	return $result;
  }

}