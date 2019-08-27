<?php

	include ("classePessoa.php");

	class Cliente extends Pessoa{


		public function __construct($vetor){
            parent::__construct($vetor);
            
		}	

		function exibe(){
			
			$this->exibe_pessoa();
            
            echo"</fieldset>";
		}
		
		function exibe_tr(){
			$this->exibe_trPessoa();
			
			echo "</tr>";			


		}
	}
	

?>


