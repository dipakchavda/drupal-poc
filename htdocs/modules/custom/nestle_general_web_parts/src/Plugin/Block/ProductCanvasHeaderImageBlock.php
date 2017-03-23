<?php

/**
 * @file
 */
namespace Drupal\nestle_general_web_parts\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\node\Entity\Node;
use \Drupal\Core\Routing;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Nestle"),
 * )
 */
class ProductCanvasHeaderImageBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'hello_block',
		
		'#content' => $this->getProducts(),
		
		'#cache' => array('max-age' => 0)
    );
  }
  
  private function getProducts() {
		$result = array();
		$city_data = \Drupal::request()->attributes->all()['taxonomy_term']->toArray();
		$city_id = \Drupal::request()->attributes->all()['taxonomy_term']->id();
		$country_id = !empty($city_data['field_img_city']) ? $city_data['field_img_city'][0]['target_id'] : 0;
		
		$query = \Drupal::entityQuery('node')->condition('type', 'products_page')->range(0,3)->execute();
		
		
		if ($query) {
			foreach($query as $nid) {
				$node = Node::load($nid);
				#$node = Node::load($nid)->toArray();
				
				#$result[]['nid'] = $node->Id();
				$result[]['title'] = $node->getTitle();
				$result[]['image_data'] = $node->get('field_product_image')->getValue();
					
					#$file = $node->get('field_product_image')->getValue();
					#$file = \Drupal\file\Entity\File::load($file);

				#print "<pre>";print_r($file); die;
			}
		}
		
		#print "<pre>";print_r($result[0]); die;
		return $result;
  }

}