<?php

  include_once(EXTENSIONS . '/formatter_typography/lib/html_helpers.php');

	Class formatterTypography extends TextFormatter {
	
  	const NAME = 'Typography Text Formatter';
  	
		private static $_typo;
		
		public function run($string){
  		if(!self::$_typo){
  			include_once(EXTENSIONS . '/formatter_typography/lib/php-typography/php-typography.php');
  			self::$_typo = new phpTypography();
  			self::$_typo->set_hyphenation(false);
  		}
		  
      $result = self::$_typo->process($string, TRUE);
      $result = utf8tohtml($result, FALSE);
      $result = html_convert_entities($result);

			return $result;
		}
		
	}
	
	return "formatterTypography";
