<?php

  include_once(EXTENSIONS . '/formatter_typography/lib/html_helpers.php');

	Class formatterTypography_With_Textile extends TextFormatter {

  	const NAME = 'Typography + Textile Text Formatter';

		private static $_parser;
		private static $_typo;

		public function run($string){
		  if(!self::$_parser){
				include_once(EXTENSIONS . '/formatter_typography/lib/textile.php');
				self::$_parser = new Textile();
			}

			if(!self::$_typo){
				include_once(EXTENSIONS . '/formatter_typography/lib/php-typography/php-typography.php');
				self::$_typo = new phpTypography();
  			self::$_typo->set_hyphenation(false);
			}

			$result = self::$_parser->TextileThis($string);
      $result = self::$_typo->process($result);
      $result = utf8tohtml($result, FALSE);
      $result = html_convert_entities($result);

			return $result;
		}

	}

  return "formatterTypography_With_Textile";