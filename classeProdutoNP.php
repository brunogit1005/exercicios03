<?php

	include ("classeProduto.php");

	class NaoPerecivel extends Produto{		
		

		public function __construct($vetor){
			parent::__construct($vetor);
			
		}	

		function exibe(){
			
			$this->exibe_produto();
            
            echo"</fieldset>";
		}
		
		function exibe_tr(){
			$this->exibe_trProduto();
		}
	}
	

?>





