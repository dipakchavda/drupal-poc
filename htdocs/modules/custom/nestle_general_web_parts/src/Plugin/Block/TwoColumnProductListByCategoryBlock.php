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
 * Provides a 'Two Column Product List By Category Block' Block.
 *
 * @Block(
 *   id = "two_col_prods_block",
 *   admin_label = @Translation("Two Column Product List By Category Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class TwoColumnProductListByCategoryBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'two_col_prods_block',
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
	$query = \Drupal::entityQuery('node')->condition('type', 'products_page')->condition('status', 1)->range(0,3)->execute();
	
	if ($query) {
		foreach($query as $key=>$nid) {
			$node = Node::load($nid);
			#$node = Node::load($nid)->toArray();
			$file = $node->get('field_product_image')->getValue();
			$path_alias = \Drupal::service('path.alias_manager')->getAliasByPath('/node/' . $node->Id(), $language_code);			
			
			$result[$key]['nid'] = $node->Id();
			$result[$key]['title'] = $node->getTitle();
			$result[$key]['image_data'] = $node->get('field_product_image')->getValue();
			$result[$key]['image_data'][0]['uri'] = ImageStyle::load('countrybox_220')->buildUrl(File::load($file[0]['target_id'])->getFileUri());
			$result[$key]['content_url'] = $path_alias;
			
		}
	}
	
	#print "<pre>";print_r($result); die;
	return $result;
  }

}