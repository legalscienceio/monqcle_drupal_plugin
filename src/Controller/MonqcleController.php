<?php
/**
 * @file
 * Contains \Drupal\monqcle_plugin\Controller\MonqcleController.
 */

namespace Drupal\monqcle_plugin\Controller;

use Drupal\Core\Controller\ControllerBase;

class MonqcleController extends ControllerBase {
  public function content() { 
    return array(
    		'#theme' => 'monqcle_plugin',
    		'#site_key' => $this->t('57d06e53d6c9e71923e5b8b0'),
    );
  }
}