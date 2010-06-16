<?php

	Class extension_Typography implements iExtension {

		public function about(){
			return (object)array(
			  'name' => 'Typography Text Formatters',
        'version' => '1.1',
        'release-date' => '2010-06-16',
        'author' => (object)array(
          'name' => 'Tony Arnold',
          'website' => 'http://www.tonyarnold.com',
          'email' => 'tony@tonyarnold.com'),
        'description' => 'Format entries using the PHP Typography HTML formatter.',
        'type'			=> array(
        	'Text Formatter'
        ),
        
      );
		}

	}

	return 'extension_Typography';