<?php

	include ("classePessoa.php");

	class Funcionario extends Pessoa{
        public $salario;
        public $area;		
		public $turno;
        

		public function __construct($vetor){
            parent::__construct($vetor);
            $this->area = $vetor["salario"];
            $this->area = $vetor["area"];
			$this->turno = $vetor["turno"];
            
		}	

		function exibe(){
			
			$this->exibe_pessoa();
			
            echo    "<div>	
                        <label>Salario:</label> ".$this->salario." 
                    </div>
                    <div>	
                        <label>Área:</label> ".$this->area." 
                    </div>
                    <div>	
                        <label>Turno:</label> ".$this->turno." 
                    </div>								
			  </fieldset>";
		}
		
		function exibe_tr(){
			$this->exibe_trPessoa();
            echo "<td>".$this->salario."</td>
                <td>".$this->area."</td>
                <td>".$this->turno."</td>
				</tr>";
		}
	}
	

?>


