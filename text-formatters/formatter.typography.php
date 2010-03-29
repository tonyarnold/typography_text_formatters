<?php

	Class formatterTypography extends TextFormatter {
		
		private static $_typo;
		
		function about(){
			return array(
			  'name' => 'Typography Text Formatter',
        'version' => '1.0',
        'release-date' => '2010-03-29',
        'author' => array(
          'name' => 'Tony Arnold',
          'website' => 'http://www.tonyarnold.com',
          'email' => 'tony@tonyarnold.com'),
        'description' => 'Format entries using the PHP Typography HTML formatter.'
			);
		}	
		
		public function run($string){
  		if(!self::$_typo){
  			include_once(EXTENSIONS . '/typography/lib/php-typography/php-typography.php');
  			self::$_typo = new phpTypography(TRUE);
  		}
		  
		  return self::$_typo->process($string);
		}
		
	}

?>