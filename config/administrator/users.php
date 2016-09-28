<?php

return [
	'title' => 'Users',
	'single' => 'user',
	'model' => 'App\User',
	'columns' => [
	    'id',
	    'email'
	],
	'edit_fields' => [
	    'email' => [
	        'title' => 'E-mail',
	        'type' => 'text'
	    ],
	],
];