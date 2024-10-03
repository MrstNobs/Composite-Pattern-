<?php
    /* Classe Delete 
    *  Essa classe provê meios para manipulação de uma instruão de DELETE no Bando de Dados
    */

    final class TSqlDelete extends TSqlInstruction {
        /* Método getInstruction() 
        *  Retorna a instrução de delete em forma de String
        */

        public function getInstruction(){
            // monta a string do DELETE
            $this->sql = "DELETE FROM {$this->entity}";

            // Retorna a clausula WHERE do objeto $this->criteria
            if($this->criteria){
                $expression = $this->criteria->dump();
                if($expression){
                    $this->sql = 'WHERE' . $expression;
                }
                return $this->sql;
            }
        }
    }
?>