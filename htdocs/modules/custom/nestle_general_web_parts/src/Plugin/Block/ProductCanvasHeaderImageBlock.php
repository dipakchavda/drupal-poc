<?php

/**
 * @file
 */
namespace Drupal\nestle_general_web_parts\Plugin\Block;

use Drupal\Core\Block\BlockBase;

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
		'#markup' => $this->t('Hello, World!'),
    );
  }

}