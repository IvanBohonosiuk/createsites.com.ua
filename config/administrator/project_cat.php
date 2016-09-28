<?php

return [
	'title' => 'Категорії проектів',
	'single' => 'категорію',
	'model' => 'App\ProjectCat',
	'columns' => [
	    'id',
	    'active',
	    'title'
	],
	'edit_fields' => [
	    'active' => [
	        'title' => 'Опубліковано',
	        'type' => 'bool'
	    ],
	    'weight' => [
	        'title' => 'Порядок',
	        'type' => 'number'
	    ],
	    'title' => [
	        'title' => 'Назва',
	        'type' => 'text'
	    ],
	    'slug' => [
	        'title' => 'Слаг',
	        'type' => 'text'
	    ],
	],
];