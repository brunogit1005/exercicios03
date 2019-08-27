<?php

	include ("classeProduto.php");

	class Perecivel extends Produto{		
		public $data_validade;

		public function __construct($vetor){
			parent::__construct($vetor);
			$this->data_validade = $vetor["data_validade"];
		}	

		function exibe(){
			
			$this->exibe_produto();
			
			echo    "<div>	
						<label>Data de Validade:</label> ".$this->data_validade."
					</div>												
			  </fieldset>";
		}
		
		function exibe_tr(){
			$this->exibe_trProduto();
			echo "<td>".$this->data_validade."</td>
				</tr>";
		}
	}
	

?>

