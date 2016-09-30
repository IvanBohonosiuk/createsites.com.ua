<?php

return [
	'title' => 'Відгуки',
	'single' => 'відгук',
	'model' => 'App\Reviews',
	'columns' => [
	    'id',
	    'name',
	    'text'
	],
	'edit_fields' => [
		'active' => [
			'title' => 'Опубліковано',
			'type' => 'bool'
		],
	    'name' => [
	        'title' => 'Ім\'я',
	        'type' => 'text'
	    ],
	    'text' => [
	    	'title' => 'Текст відгуку',
	    	'type' => 'textarea'
	    ],
	    'image' => [
	        'title' => 'Зображення',
	        'type' => 'image',
	        'location' => public_path() . '/img/reviews/originals/',
	        'sizes' => [
		        [460, 320, 'auto', public_path() . '/img/reviews/medium/', 100]
		    ]
	    ],
	],
];