<?php
// This file is generated. Do not modify it manually.
return array(
	'company-address' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'mindset-blocks/company-address',
		'version' => '1.0.0',
		'title' => 'Company Address',
		'category' => 'text',
		'icon' => 'location',
		'description' => 'Output the company address with an optional icon.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'svgIcon' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'textdomain' => 'company-address',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'company-email' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'mindset-blocks/company-email',
		'version' => '0.1.0',
		'title' => 'Company Email',
		'category' => 'text',
		'icon' => 'email',
		'description' => 'Display the company email.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'svgIcon' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'textdomain' => 'company-email',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'company-services' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'mindset-blocks/company-services',
		'version' => '0.1.0',
		'title' => 'Company Services',
		'category' => 'text',
		'icon' => 'hammer',
		'description' => 'display the company Services. ',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'company-services',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css'
	),
	'copyright-dates' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'mindset-blocks/copyright-dates',
		'version' => '0.1.0',
		'title' => 'Copyright Dates',
		'category' => 'text',
		'icon' => 'calendar',
		'description' => 'Display a copryright date.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'startingYear' => array(
				'type' => 'number',
				'default' => 2020
			)
		),
		'textdomain' => 'copyright-dates',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'testimonial-slider' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'mindset-blocks/testimonial-slider',
		'version' => '1.0.0',
		'title' => 'Testimonial Slider',
		'category' => 'widgets',
		'icon' => 'editor-quote',
		'description' => 'A slider of testimonials.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false,
			'multiple' => false
		),
		'attributes' => array(
			'navigation' => array(
				'type' => 'boolean',
				'default' => true
			),
			'pagination' => array(
				'type' => 'boolean',
				'default' => true
			),
			'arrowColor' => array(
				'type' => 'string',
				'default' => 'var(--wp--preset--color--primary)'
			)
		),
		'textdomain' => 'testimonial-slider',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
