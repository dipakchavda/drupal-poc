<?php
/**
 * @file
 * Contains \Drupal\example\Controller\ExampleController.
 */
namespace Drupal\header_slideshow\Controller;
use Drupal\Core\Controller\ControllerBase;

class Header_slideshowStartController extends ControllerBase {
    /**
    * Display the markup.
    *
    * @return array
    */
    public function content() {
      return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, World!'),
      );
    }    
    /*public function startAction() {
            return [
                    '#markup' => '<h2>Welcome to the start page</h2>',
            ];
    }*/
}
