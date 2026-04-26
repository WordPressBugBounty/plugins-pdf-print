<?php
// This file is generated. Do not modify it manually.
return array(
	'pdf-print' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'pdf-print/pdf-print',
		'version' => '0.1.0',
		'title' => 'PDF & Print by BestWebSoft',
		'category' => 'widgets',
		'description' => 'Generate PDF files and print WordPress posts/pages. Customize document header/footer styles and appearance',
		'example' => array(
			
		),
		'attributes' => array(
			'showPdf' => array(
				'type' => 'boolean',
				'default' => '1'
			),
			'showPrint' => array(
				'type' => 'boolean',
				'default' => '1'
			),
			'display' => array(
				'type' => 'string',
				'default' => 'pdf,print'
			)
		),
		'keywords' => array(
			'pdf-print'
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'pdf-print',
		'editorScript' => 'file:./index.js',
		'render' => 'file:./render.php'
	)
);
