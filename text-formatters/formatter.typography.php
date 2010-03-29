<?php

  include_once(EXTENSIONS . '/typography/lib/html_helpers.php');

	Class formatterTypography extends TextFormatter {
		
		private static $_typo;
		
		function about(){
			return array(
			  'name' => 'Typography Text Formatter',
        'version' => '1.0.1',
        'release-date' => '2010-03-30',
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
  			self::$_typo = new phpTypography();
  		}
		  
      $result = self::$_typo->process($result);
      $result = utf8tohtml($result, FALSE);
      $result = html_convert_entities($result);

			return $result;
		}
		
	}

?>