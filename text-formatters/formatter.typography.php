<?php

	include_once(EXTENSIONS . '/typography-text-formatters/lib/html_helpers.php');

	Class formatterTypography extends TextFormatter {

		private static $_typo;

		function about(){
			return array(
				'name' => 'Typography Text Formatter',
				'version' => '1.0.2',
				'release-date' => '2012-05-14',
				'author' => array(
					'name' => 'Tony Arnold',
					'website' => 'http://www.tonyarnold.com',
					'email' => 'tony@tonyarnold.com'
				),
				'description' => 'Format entries using the PHP Typography HTML formatter.'
			);
		}

		public function run($string){
			if (!self::$_typo) {
				include_once(EXTENSIONS . '/typography-text-formatters/lib/php-typography/php-typography.php');
				self::$_typo = new phpTypography();
				self::$_typo->set_hyphenation(false);
			}

			$result = self::$_typo->process($string, TRUE);
			$result = utf8tohtml($result, FALSE);
			$result = html_convert_entities($result);

			return $result;
		}

	}
