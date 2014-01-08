<?php

	$slugid_regex = '[0-9a-zA-Z-]+';
	$driver = ['driver' => $slugid_regex];

	$id_regex = '[0-9]+';
	$id = ['id' => $id_regex];

	$apimethods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'];

return array
	(

		'/'
			=> [ 'frontend.public' ],

	); # config
