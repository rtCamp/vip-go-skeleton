<?php

namespace WPCOMVIP\GutenbergContentApi;

defined('ABSPATH') or die();

class RestApi {
	public static function init() {
		add_action('rest_api_init', [__CLASS__, 'register_rest_routes']);
	}

	public static function register_rest_routes() {
		register_rest_route( WPCOMVIP__CONTENT_API__REST_ROUTE, '(?P<id>[0-9]+)/blocks', [
			'methods' => 'GET',
			'callback' => [ __CLASS__, 'get_block_content' ],
			'args' => [
				'id' => [
					'validate_callback' => function($param) {
						return 'publish' === get_post_status(intval($param));
					},
					'sanitize_callback' => function($param) {
						return intval($param);
					},
				],
			],
		] );
	}

	public static function get_block_content($params) {
		$post_id = $params['id'];
		$post = get_post($post_id);

		$blocks = ContentParser::postContentToBlocks($post->post_content);

		return [
			'blocks' => $blocks,
		];
	}
}

RestApi::init();
