<?php
/**
 * @file
 * Contains \Drupal\monqcle_plugin\Plugin\Block\MonqclePluginBlock.
 */

namespace Drupal\monqcle_plugin\Plugin\Block;
use Drupal\Core\Block\BlockBase;
/**
 * Provides the MonQcle Plugin Block
 * @Block(
 * id = "monqcle_plugin",
 * admin_label = @Translation("MonQcle Plugin Block"),
 * )
 */
class MonqclePluginBlock extends BlockBase {
	/**
	 * {@inheritdoc}
	 */
	public function build() {
		$items = array();
		return array(
				'#items' => $items,
				'#theme' => 'monqcle_plugin',
				'#attached' => array(
						'library' => array('monqcle_plugin/monqcle-plugin'),
				),
				
		);
	}	
}