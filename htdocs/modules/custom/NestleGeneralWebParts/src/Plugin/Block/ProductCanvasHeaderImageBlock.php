<?php

namespace Drupal\NestleGeneralWebParts\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Nestle: General web parts Block.
 *
 * @Block(
 *   id = "example_empty",
 *   admin_label = @Translation("Example: empty block")
 * )
 */
class ExampleEmptyBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // We return an empty array on purpose. The block will thus not be rendered
    // on the site. See BlockExampleTest::testBlockExampleBasic().
    return array(
      '#markup' => $this->t('This is example block')
    );
  }

}
