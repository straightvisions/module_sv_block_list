<?php
	echo $_s->build_css(
		'.wp-site-blocks ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid),
		.wp-site-blocks ol,
		.editor-styles-wrapper ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid),
		.editor-styles-wrapper ol',
		array_merge(
			$module->get_setting('font')->get_css_data('font-family'),
			$module->get_setting('font_size')->get_css_data('font-size','','px'),
			$module->get_setting('line_height')->get_css_data('line-height'),
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);

	echo $_s->build_css(
		'.wp-site-blocks ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid):not(.has-text-color),
		.wp-site-blocks ol:not(.has-text-color),
		.editor-styles-wrapper ul:not(.wp-block-navigation__container):not(.blocks-gallery-grid):not(.has-text-color),
		.editor-styles-wrapper ol:not(.has-text-color)',
		array_merge(
			$module->get_setting('text_color')->get_css_data(),
		)
	);