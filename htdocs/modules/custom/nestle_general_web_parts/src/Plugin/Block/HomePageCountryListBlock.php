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
		
		// This is load multiple terms from 'Country' Vocabulary.
		#$terms = \Drupal\taxonomy\Entity\Term::loadMultiple($tids);
		
		foreach($query as $key=>$tid) {
			
			// Load single Term from 'Country' Taxonomy vocabulary
			$country_term = \Drupal\taxonomy\Entity\Term::load($tid);
			
			#$country_name = $country_term->getText();
			#$country_link = $country_term->getUri();
			
			#$node = Node::load($nid);
			#$node = Node::load($nid)->toArray();
			#$file = $node->get('field_product_image')->getValue();
			#$path_alias = \Drupal::service('path.alias_manager')->getAliasByPath('/node/' . $node->Id(), $language_code);			
			
			#$result[$key]['nid'] = $node->Id();
			#$result[$key]['title'] = $node->getTitle();
			#$result[$key]['image_data'] = $node->get('field_product_image')->getValue();
			#$result[$key]['image_data'][0]['uri'] = ImageStyle::load('countrybox_220')->buildUrl(File::load($file[0]['target_id'])->getFileUri());
			#$result[$key]['content_url'] = $path_alias;
			
		}
	}
	
	#print "<pre>";print_r($result); die;
	return $result;
  }

}