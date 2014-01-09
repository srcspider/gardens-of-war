<?php return array
	(
		'description'
			=> 'Install for Post, Paragraph, Gallery, Image.',

		'configure' => array
			(
				'tables' => array
					(
						\app\PostLib::table(),
						\app\GalleryLib::table(),
						\app\ParagraphLib::table(),
						\app\ImageLib::table(),
						\app\TableLib::table(),
						\app\ListLib::table(),
					),
			),

		'tables' => array
			(
				\app\PostLib::table() =>
					'
						`id`    :key_primary,

						PRIMARY KEY (id)
					',
			
				\app\GalleryLib::table() =>
					'
						`id`    :key_primary,
						`post`  :key_foreign,

						PRIMARY KEY (id)
					',
			
				\app\ParagraphLib::table() =>
					'
						`id`    :key_primary,
						`post`  :key_foreign,

						PRIMARY KEY (id)
					',
			
				\app\ImageLib::table() =>
					'
						`id`    :key_primary,
						`post`  :key_foreign,

						PRIMARY KEY (id)
					',
			
				\app\TableLib::table() =>
					'
						`id`    :key_primary,
						`post`  :key_foreign,

						PRIMARY KEY (id)
					',
			
				\app\ListLib::table() =>
					'
						`id`    :key_primary,
						`post`  :key_foreign,

						PRIMARY KEY (id)
					',
			),
	
		'bindings' => array
			(
				// field => [ table, on_delete, on_update ]

				\app\GalleryLib::table() => array
					(
						'post' => [\app\PostLib::table(), 'CASCADE', 'CASCADE'],
					),
				\app\ParagraphLib::table() => array
					(
						'post' => [\app\PostLib::table(), 'CASCADE', 'CASCADE'],
					),
				\app\ImageLib::table() => array
					(
						'post' => [\app\PostLib::table(), 'CASCADE', 'CASCADE'],
					),
				\app\TableLib::table() => array
					(
						'post' => [\app\PostLib::table(), 'CASCADE', 'CASCADE'],
					),
				\app\ListLib::table() => array
					(
						'post' => [\app\PostLib::table(), 'CASCADE', 'CASCADE'],
					),
			),

	); # config