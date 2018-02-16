<?php 
	namespace OC\PlateformeBundle\AntiSpam;

	class OCAntispam{

		private $mailer;
		private $locale;
		private $minLength;

		public __construct(\SwiftMailer $mailer, $locale, int $minLength){

			$this->mailer = $mailer;
			$this->locale = $locale;
			$this->minLength = $minLength;

		}


		/**
		 *
		 * check wether $text is spam
		 * 
		 * @param  string  $text
		 * @return boolean
		 */	
		function isSpam(string $text) : bool {
			return strlen($text) < $this->minLength;
		}
	}
 ?>