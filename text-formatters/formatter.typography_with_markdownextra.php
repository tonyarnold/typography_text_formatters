<?php

  include_once(EXTENSIONS . '/formatter_typography/lib/html_helpers.php');
  
  Class formatterTypography_With_MarkdownExtra extends TextFormatter {
  
  	const NAME = 'Typography + Markdown Extra Text Formatter';
  
  	private static $_parser;
  	private static $_typo;
  
  	public function run($string){
  		if(!self::$_parser){
  			include_once(EXTENSIONS . '/formatter_typography/lib/markdown_extra.php');
  			self::$_parser = new MarkdownExtra_Parser();
  		}
  
  		if(!self::$_typo){
  			include_once(EXTENSIONS . '/formatter_typography/lib/php-typography/php-typography.php');
  			self::$_typo = new phpTypography(true);
  			self::$_typo->set_hyphenation(false);
  		}
  
  		$result = self::$_parser->transform($string);
      $result = self::$_typo->process($result);
      $result = utf8tohtml($result, FALSE);
      $result = html_convert_entities($result);
  
  		return $result;
  	}
  	
  }
  
  return "formatterTypography_With_MarkdownExtra";