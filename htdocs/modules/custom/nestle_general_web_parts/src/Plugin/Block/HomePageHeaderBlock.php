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
 * Provides a 'Home Page Header Block' Block.
 *
 * @Block(
 *   id = "home_page_header_block",
 *   admin_label = @Translation("Home Page Header Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class HomePageHeaderBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'home_page_header_block',
		'#content' => $this->getContent(),
		'#cache' => array('max-age' => NestleGeneralWebPartsController::NESTLE_CACHE_MAX_AGE)
    );
  }
  
  private function getContent() {

	$result = array('success' => TRUE);
	return $result;
  }

}