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
 * Provides a 'Products Detail Page Block' Block.
 *
 * @Block(
 *   id = "products_detail_page_block",
 *   admin_label = @Translation("Products Detail Page Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class ProductsDetailPageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'products_detail_page_block',
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
	// Term ID From URL
	$current_path = \Drupal::service('path.current')->getPath();
	$path_args 	  = explode('/', $current_path);
	$product_node_id = isset($path_args[2]) ? $path_args[2] : 0;
	
	if ($product_node_id) {
		$product_node = \Drupal::entityManager()->getStorage('node')->load($product_node_id);
		// Test if this node has our field
		/*if ($node->hasField('field_google_map')) {
		  $entity_ref = $node->get('field_google_map');
		  // if our field has data
		  if ($entity_ref->count() > 0) {
			#$vb = \Drupal::entityManager()->getViewBuilder('node'); // Drupal\node\NodeViewBuilder
			#$nodeview = $vb->view($node, $viewmode);
			#$fieldrenderarray = $nodeview[youfield-here];
		  }
		}*/
		
		#print "<pre>";print_r($product_node); die;
		#$result['node']['mymap'] = $product_node->get('field_google_map')->view();
		
		$result['node'] = $product_node->toArray();
		foreach($result['node'] as $key=>$value) {
			switch($key) {
				case 'field_product_image':
					$result['node']['field_product_image'] = $product_node->get('field_product_image')->getValue();
					$result['node']['field_product_image']['url'] = ImageStyle::load('prod_detail_img_1019x572')->buildUrl(File::load($product_node->get('field_product_image')->getValue()[0]['target_id'])->getFileUri());
					break;
				case 'field_tabs_paragraph':
					$result['node']['field_tabs_paragraph'] = array();
					foreach($product_node->get('field_tabs_paragraph')->getValue() as $key => $value) {
						$fc = \Drupal\field_collection\Entity\FieldCollectionItem::load($value['value']);
						$result['node']['field_tabs_paragraph'][$key] = array(
							'field_tab_title' => $fc->get('field_tab_title')->getValue()[0]['value'],
							'field_paragraph_text' => $fc->get('field_paragraph_text')->getValue()[0]['value'],
							'field_paragraph_image' => $fc->get('field_paragraph_image')->getValue(),
							'field_paragraph_image_url' => ImageStyle::load('product_detail_793x')->buildUrl(File::load($fc->get('field_paragraph_image')->getValue()[0]['target_id'])->getFileUri())
						);
					}
					break;
				case 'field_google_map':
					//'#theme' => 'google_map_field'
					break;
				default:
					#$result[$key] = $value[0];
					break;
			}
		}	
	}

	#print "<pre>";print_r($result); die;
	return $result;
  }

}