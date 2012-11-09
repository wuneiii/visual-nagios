<?php

	
	class ui{
		
		private $meta;
	
		public function __construct(){

			ob_start();
	
		}
		
		public function set_meta(&$meta_array){

			if(!is_array($meta_array)){
				die('meta_array is not array!');
			}

			$this->meta = $meta_array;

		}
		public function render_header(){

			$header = array_keys($this->meta);
			foreach($header as $tag){
	
				$data[$tag] = url($tag);
				
			}
			
			include_once UI_ROOT.'header.php';
			
		}
		public function render(){

			$this -> render_header();
			
		}		

	}

?>
