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
 * Provides a 'Page Footer Block' Block.
 *
 * @Block(
 *   id = "page_footer_block",
 *   admin_label = @Translation("Page Footer Block"),
 *   category = @Translation("Nestle"),
 * )
 */
class PageFooterBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return array(
		'#type' => 'markup',
		'#theme' => 'page_footer_block',
		'#content' => $this->getContent(),
		'#cache' => array('max-age' => NestleGeneralWebPartsController::NESTLE_CACHE_MAX_AGE)
    );
  }
  
  private function getContent() {
	$result = array();
	return $result;
  }

}