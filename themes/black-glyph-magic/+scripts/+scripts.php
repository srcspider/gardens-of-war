<?php namespace app;

return array
	(
		'version' => '1.0.0',
		'sources' => 'src/',
		'root' => 'root/',
		'mode' => 'targeted',

		'closure.flags' => array
			(
				'--process_jquery_primitives',
				'--warning_level QUIET',
				'--third_party',
				'--compilation_level WHITESPACE_ONLY',
			),

	# Complete mode

		'complete-mapping' => array
			(
				// empty
			),

	# Targeted mode

		'targeted-common' => array
			(
				// empty
			),

		'targeted-mapping' => array
			(
				// empty
			
			# ---- Errors -----------------------------------------------------

				'+error' => array
					(
						// empty, just inherit common
					),

				'exception-Unknown'        => '+error',
				'exception-NotImplemented' => '+error',
				'exception-NotFound'       => '+error',
				'exception-NotAllowed'     => '+error',
				'exception-NotApplicable'  => '+error',

			),

	); # config
