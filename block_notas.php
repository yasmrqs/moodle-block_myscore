<?php 

class block_notas extends block_base {

    public function init(){
        $this->title = 'Desempenho dos estudantes de Sociologia Clássica';
    }

    public function get_content() {
        global $DB;

        $query = 'select grade from mdl_assign_grades';
        $notas = $DB->get_record_sql($query);
                
    }

    public function desempenho(){
        if ($notas <= 4){
            echo 'Nota baixa, você está de recuperação';
        } elseif ($notas >= 5, $notas <= 7) {
            echo 'Nota regular, você está aprovado(a)'; 
        } elseif ($notas => 8) {
            echo 'Nota ótima! Você foi aprovado(a)';
        }
    }
}

