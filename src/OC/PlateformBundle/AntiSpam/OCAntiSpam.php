<?php 
	namespace OC\PlateformeBundle\AntiSpam;

	class OCAntispam{
		
		/**
		 *
		 * check wether $text is spam
		 * 
		 * @param  string  $text
		 * @return boolean
		 */	
		function isSpam(string $text) : bool {
			return strlen($text) < 50;
		}
	}
 ?>