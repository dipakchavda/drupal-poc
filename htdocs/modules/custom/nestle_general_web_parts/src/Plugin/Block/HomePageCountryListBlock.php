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
use \Drupal\nestle_general_web_parts\Controller\NestleGeneralWebPartsController;

/**
 * Provides a 'Country List' Block.
 *
 * @Block(
 *   id = "country_list_block",
 *   admin_label = @Translation("Home Page Country List Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class HomePageCountryListBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
	  
    return array(
		'#type' => 'markup',
		'#theme' => 'country_list_block',
		'#content' => $this->getContent(),
		'#cache' => array('max-age' => NestleGeneralWebPartsController::NESTLE_CACHE_MAX_AGE)
    );
  }

  private function getContent() {

	$result = array();
	
	// Language ID
	$language_code = \Drupal::languageManager()->getCurrentLanguage()->getId();
	// Language Name
	$language_name =  \Drupal::languageManager()->getCurrentLanguage()->getName();
	
	$query = \Drupal::entityQuery('taxonomy_term');
	$query->condition('vid', "country");	// Load Country from Taxonomy
	$query->sort('name', 'ASC');
    $tids = $query->execute();
	
	$country_terms = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
	$current_path = \Drupal::service('path.current')->getPath();
	$path_args 	  = explode('/', $current_path);
	$CURRENT_COUNTRY = isset($path_args[3]) ? $path_args[3] : 0;
	$count = 0;
	
	// Home page, All the country will be listed.
	if ($is_front = \Drupal::service('path.matcher')->isFrontPage()) {
		if ($country_terms) {
			foreach($country_terms as $key=>$country_term) {
				$arr_country_term = $country_term->toArray();
				$result[$key]['tid'] = $country_term->Id(); // City Term ID
				$result[$key]['content_url'] = $country_term->toUrl();	// City URL
				$result[$key]['image_data'] = $arr_country_term['field_img_country'];	// Image Object
				$result[$key]['image_data'][0]['uri'] = ImageStyle::load('country_325_x_183')->buildUrl(File::load($arr_country_term['field_img_country'][0]['target_id'])->getFileUri());	// Image URL
				$result[$key]['title'] = $country_term->toLink()->getText();	// City Name
				$result[$key]['description'] = $country_term->getDescription();	// City Name
			}
		}
	}

	// This is Only visible on each Country Page
	// Only 4 country will be visible
	// Current Country will not be visible in list of country
	else {
		foreach($country_terms as $key=>$country_term) {
			if ($count < 4 && $CURRENT_COUNTRY !== $country_term->Id()) {
				$arr_country_term = $country_term->toArray();
				$result[$key]['tid'] = $country_term->Id(); // City Term ID
				$result[$key]['content_url'] = $country_term->toUrl();	// City URL
				$result[$key]['image_data'] = $arr_country_term['field_img_country'];	// Image Object
				$result[$key]['image_data'][0]['uri'] = ImageStyle::load('country_325_x_183')->buildUrl(File::load($arr_country_term['field_img_country'][0]['target_id'])->getFileUri());	// Image URL
				$result[$key]['title'] = $country_term->toLink()->getText();	// City Name
				$result[$key]['description'] = $country_term->getDescription();	// City Name
				$count++;
			}
		}
	}

	$result['title'] = $this->getConfiguration()['label'];
	
	return $result;
  }

}
