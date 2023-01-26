<?php

require_once('../../config.php');

global $DB;
global $USER; 


$resultados = $DB->get_records_sql('select grade from mdl_assign_grades');

echo "<pre>";

$valores = array_column($resultados, 'grade');
              
function desempenho($valores){
    foreach($valores as $n) {
            echo "\n\n" . "Atenção o seu desempenho teve uma ";
        if ($n <= 40.00000) {
            echo 'nota baixa, você precisa estudar mais!';
        }
        elseif ($n >= 50.00000 && $n <=70.00000) {
            echo 'nota média, você pode melhorar mais!';
        }
        elseif ($n >= 80.00000) {
            echo 'nota alta, continue assim!';
        }
    }
}

echo desempenho($valores);




