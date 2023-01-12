<?php
class block_myscore.php extends block_base {

    public function init(){
        $this->title = 'bloco que apresenta o desempenho dos alunos';
    }

    public function get_content() {
        global $DB;

        $notas = 'select grade from mdl_assign_grades';
        $resultados = $DB->get_record_sql($notas);

        function desempenho($resultados){
        foreach($resultados as $n){
            echo "$v\n";
            if ($n <= 40) {
                echo 'Nota baixa, você precisa estudar mais!';
            }
            elseif ($n >= 50 && $notas <=70) {
                echo 'Nota média, você pode melhorar mais!';
            }
            elseif ($n >= 80) {
                echo 'Nota alta, continue assim!';
            }
            
        }
     }   

     $informacoes =  desempenho();
        $this->content =  new stdClass;
        $this->content->text = 'Desempenho dos estudantes:' . $informacoes;
        return $this->content;
    }
}
