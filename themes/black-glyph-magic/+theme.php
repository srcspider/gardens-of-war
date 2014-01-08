<?php return array
	(
		'version' => '1.0.0',

		// configure theme drivers
		'loaders' => array
			(
				'bootstrap' => null,
				'style' => ['default.style' => 'spiritus'],
				'javascript' => null,
			),

		// target-to-file mapping
		'mapping' => array
			(
				

			# ---- Errors -----------------------------------------------------

				'exception-Unknown' => array
					(
						'errors/unknown',
					),

				'exception-NotImplemented' => array
					(
						'errors/not-implemented',
					),

				'exception-NotFound' => array
					(
						'errors/not-found',
					),

				'exception-NotAllowed' => array
					(
						'errors/not-allowed',
					),

				'exception-NotApplicable' => array
					(
						'errors/not-applicable',
					),

			),

	); # config
