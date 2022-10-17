<?php
	echo $_s->build_css(
		'.wp-site-blocks main ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid):not(.wp-block-post-template),
		.wp-site-blocks main ol,
		.editor-styles-wrapper main ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid):not(.wp-block-post-template),
		.editor-styles-wrapper main ol',
		array_merge(
			$module->get_setting('font')->get_css_data('font-family'),
			$module->get_setting('font_size')->get_css_data('font-size','','px'),
			$module->get_setting('line_height')->get_css_data('line-height'),
			$module->get_setting('padding')->get_css_data('padding', '', ' !important'), // hotfix important to override .wp-container CSS
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.wp-site-blocks main ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid):not(.has-text-color):not(.wp-block-post-template),
		.wp-site-blocks main ol:not(.has-text-color),
		.editor-styles-wrapper main ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid):not(.has-text-color):not(.wp-block-post-template),
		.editor-styles-wrapper main ol:not(.has-text-color)',
		array_merge(
			$module->get_setting('text_color')->get_css_data(),
		)
	);