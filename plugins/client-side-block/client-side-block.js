( function ( blocks, i18n, element, blockEditor ) {
	var el = element.createElement;
	var __ = i18n.__;
	var useBlockProps = blockEditor.useBlockProps;

	var blockStyle = {
		backgroundColor: '#900',
		color: '#fff',
		padding: '20px',
	};

	blocks.registerBlockType( 'wpvip/client-side-block', {
		edit: function () {
			return el(
				'p',
				useBlockProps( { style: blockStyle } ),
				__(
					'Hello World, this is a client-side block'
				)
			);
		},
		save: function () {
			return el(
				'p',
				useBlockProps.save( { style: blockStyle } ),
				__(
					'Hello World, this is a client-side block',
				)
			);
		},
	} );
} )(
	window.wp.blocks,
	window.wp.i18n,
	window.wp.element,
	window.wp.blockEditor
);
