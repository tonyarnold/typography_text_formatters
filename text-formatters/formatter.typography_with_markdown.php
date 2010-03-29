<?php

	Class formatterTypography_With_Markdown extends TextFormatter {

		private static $_parser;
		private static $_typo;

		function about(){
			return array(
				'name' => 'Typography + Markdown Text Formatter',
				'version' => '1.0',
				'release-date' => '2010-03-29',
				'author' => array(
					'name' => 'Tony Arnold',
					'website' => 'http://www.tonyarnold.com',
					'email' => 'tony@tonyarnold.com'),
				'description' => 'Format entries using Markdown, then using the php-typography HTML formatter.'
			);
		}

		public function run($string){
			if(!self::$_parser){
				include_once(EXTENSIONS . '/typography/lib/markdown_extra.php');
				self::$_parser = new Markdown_Parser();
			}

			if(!self::$_typo){
				include_once(EXTENSIONS . '/typography/lib/wp-typography/php-typography/php-typography.php');
				self::$_typo = new phpTypography(TRUE);
			}

			$result = self::$_parser->transform($string);

			return self::$_typo->process($result);
		}

	}

?>