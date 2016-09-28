<?php

return [
	'title' => 'Проекти',
	'single' => 'проект',
	'model' => 'App\Projects',
	'columns' => [
	    'id',
	    'active' => [
	    	'title' => 'Опубліковано'
	    ],
	    'name',
	    'image' => [
	    	'output' => '<img src="/public/img/projects/small/(:value)" />'
	    ]
	],
	'edit_fields' => [
		'active' => [
			'title' => 'Опубліковано',
			'type' => 'bool'
		],
	    'name' => [
	        'title' => 'Назва проекту',
	        'type' => 'text'
	    ],
	    'description' => [
	        'title' => 'Опис проекту',
	        'type' => 'wysiwyg'
	    ],
	    'link' => [
	        'title' => 'Посилання на проект',
	        'type' => 'text'
	    ],
	    'meta_k' => [
	        'title' => 'Мета ключові слова',
	        'type' => 'text'
	    ],
	    'meta_d' => [
	        'title' => 'Мета опис',
	        'type' => 'textarea'
	    ],
	    'categories' => [
			'title' => 'Категорія',
			'type' => 'relationship',
			'name_field' => 'title'
		],
	    'finished_at' => [
	        'title' => 'Закінчення проекту',
	        'type' => 'date',
	        'date_format' => 'yy-mm',
	    ],
	    'image' => [
	        'title' => 'Зображення',
	        'type' => 'image',
	        'location' => public_path() . '/img/projects/originals/',
	        'sizes' => [
		        [100, 100, 'auto', public_path() . '/img/projects/small/', 100],
		        [460, 320, 'auto', public_path() . '/img/projects/medium/', 100],
		        [1000, 600, 'auto', public_path() . '/img/projects/full/', 100]
		    ]
	    ],
	],
	'form_width' => 600,
];