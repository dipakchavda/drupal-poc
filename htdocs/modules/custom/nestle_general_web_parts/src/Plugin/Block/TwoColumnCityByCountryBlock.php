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
 * Provides a 'Two Column City List By Country Block' Block.
 *
 * @Block(
 *   id = "two_col_city_block",
 *   admin_label = @Translation("Two Column City List By Country Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class TwoColumnCityByCountryBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'two_col_city_block',
		'#content' => $this->getContent(),
		'#cache' => array('max-age' => NestleGeneralWebPartsController::NESTLE_CACHE_MAX_AGE)
    );
  }
  
  private function getContent() {

	$result = array();
	
	$query = \Drupal::entityQuery('taxonomy_term');
	$query->condition('vid', "city");	// Load Cities from Taxonomy
	$query->sort('name', 'ASC');
    $tids = $query->execute();
	
	$city_terms = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
	
	$current_path = \Drupal::service('path.current')->getPath();
	$path_args 	  = explode('/', $current_path);
	$count = 0;
	
	if ($city_terms) {
		foreach($city_terms as $key=>$city_term) {
			if ($count < 2) {
				$arr_city_term = $city_term->toArray();	
				
				if ($arr_city_term['field_country'][0]['target_id'] === $path_args[3]) {
					$result[$key]['tid'] = $city_term->Id(); // City Term ID
					$result[$key]['content_url'] = $city_term->toUrl();	// City URL
					$result[$key]['image_data'] = $arr_city_term['field_img_city'];	// Image Object
					#$result[$key]['image_data'][0]['uri'] = ImageStyle::load('sub_country_469')->buildUrl(File::load($arr_city_term['field_img_city'][0]['target_id'])->getFileUri());	// Image URL
                                        $result[$key]['image_data'][0]['uri'] = ImageStyle::load('country_741_392')->buildUrl(File::load($arr_city_term['field_img_city'][0]['target_id'])->getFileUri());      // Image URL
					$result[$key]['title'] = $city_term->toLink()->getText();	// City Name
					$result[$key]['description'] = $city_term->getDescription();	// City Name
					$count++;
				}
			}			
		}
	}
	return $result;
  }

}
