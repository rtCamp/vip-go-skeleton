<?php

namespace WPCOMVIP\GutenbergContentApi;

defined('ABSPATH') or die();

use Error;
use WP_Block_Type_Registry;
use Symfony\Component\DomCrawler\Crawler;

class ContentParser {
	public static function postContentToBlocks($content) {
		$blocks = parse_blocks($content);

		$block_registry = WP_Block_Type_Registry::get_instance();
		$registered_blocks = $block_registry->get_all_registered();

		$sourced_blocks = array_map(function($block) use ($registered_blocks) {
			return self::source_block($block, $registered_blocks);
		}, $blocks);

		return [
			'blocks' => $sourced_blocks,
			'registry' => $registered_blocks
		];
	}

	public static function source_block($block, $registered_blocks) {
		var_dump($block);
		$block_name = $block['blockName'];

		if(!isset($registered_blocks[$block_name])) {
			throw new Error(sprintf('Block type "%s" is not server-side registered.', $block_name));
		}

		return $block;
	}
}
