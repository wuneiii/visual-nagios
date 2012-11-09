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
	
		public function render_nav_bar(){
			

			include_once UI_ROOT.'nav_bar.php';

		}
		public function render_body(){
			
			$header = $_GET['header'];
			if($header == ''){
				die('$_GET[header] is blank');
			}
			$left_menu = $this->meta[$header]['sub_menu'];

			include_once UI_ROOT.'body.php';

		}
		public function render_footer(){

			include_once UI_ROOT.'footer.php';

		}
		public function render(){

			$this -> render_header();
			$this -> render_nav_bar();
			$this -> render_body();
			$this -> render_footer();
			
		}		

	}

?>
