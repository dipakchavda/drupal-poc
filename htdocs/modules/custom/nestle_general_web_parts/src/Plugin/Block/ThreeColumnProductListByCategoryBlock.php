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
 * Provides a 'Three Column Product List By Category Block' Block.
 *
 * @Block(
 *   id = "three_col_prods_block",
 *   admin_label = @Translation("Three Column Product List By Category Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class ThreeColumnProductListByCategoryBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'three_col_prods_block',
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
	// Current Page Path
	$current_path = \Drupal::service('path.current')->getPath();
	$current_path_alias = \Drupal::service('path.alias_manager')->getAliasByPath($current_path);
	$path_args 	  		= explode('/', $current_path);
	$path_alias_args 	= explode('/', $current_path_alias);
	$path_args_count = count($path_alias_args);
	
	$CONDITION_STATE = 'IN';
	
	#print_r($path_args_count); die;
	if ($path_args_count === 3) {
		// Country Page
	}
	else {
		// City Page
	}
	
	$CURRENT_PAGE_NODE_ID = isset($path_args[3]) ? $path_args[3] : 0;
	
	$query = \Drupal::entityQuery('node')
			->condition('type', 'products_page')
			->condition('status', 1)
			->sort('created')
			->range(0,3);
	if ($path_args_count === 3) { // Country Page (Display All Products of current Country)
		$query->condition('field_country', array($CURRENT_PAGE_NODE_ID), 'IN');
	}
	if ($path_args_count === 4) { // City Page (Display All Products of current Country and current City)
		$query->condition('field_city', array($CURRENT_PAGE_NODE_ID), 'IN');
	}
	$query = $query->execute();	// Get Node IDs Array
	
	if ($query) {
		foreach($query as $key=>$nid) {
			$node = Node::load($nid);
			if (is_object($node)) {
				#$node_data = $node->toArray();
				$file = $node->get('field_product_image')->getValue();
				$path_alias = \Drupal::service('path.alias_manager')->getAliasByPath('/node/' . $node->Id(), $language_code);			
				
				$result[$key]['nid'] = $node->Id();
				$result[$key]['title'] = $node->getTitle();
				$result[$key]['image_data'] = $node->get('field_product_image')->getValue();
				$result[$key]['image_data'][0]['uri'] = ImageStyle::load('triphub_image_372x210')->buildUrl(File::load($file[0]['target_id'])->getFileUri());
				$result[$key]['content_url'] = $path_alias;
			}
		}
	}
	
	#print "<pre>";print_r($result); die;
	return $result;
  }

}