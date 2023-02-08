<?php

require_once('../../config.php');

global $DB;
global $USER; 

echo "<pre>";

//a variável possui a média final de todas as atividades entregues pelos alunos
$resultados = $DB->get_records_sql("SELECT id, userid, rawgrade, AVG(rawgrade) AS MediaFinal FROM 'mdl_grade_grades' GROUP BY userid;");
$valores = array_column($resultados, 'mediafinal');

//die();

$nomes = $DB->get_records_sql('select id, firstname, lastname from mdl_user');
$id = array_column($nomes, 'id');
$pn = array_column($nomes, 'firstname');
$sn = array_column($nomes, 'lastname');

$cont = 1;
$contro = 0; 

for ($controlador == 0; $cont != NULL;){

    echo("\n\n");

if ($valores[$contro] <= 4 && $valores[contro] != NULL){
    echo $pn[$controlador] . ' ' . $sn[$controlador] . "O seu desempenho foi " . $valores[$contro] . ". A sua nota foi baixa, portanto estude mais!";
    $contro++;
}

elseif ($valores[$contro] >= 5 && $valores[contro] <= 7 && $valores[$contro] != NULL){
    echo $pn[$controlador] . ' ' . $sn[$controlador] . "O seu desempenho foi " . $valores[$contro] . ". A sua nota foi mediana, você pode melhorar!";
    $contro++;
}

elseif ($valores[$contro] >= 8 && $valores[contro] != NULL){
    echo $pn[$controlador] . ' ' . $sn[$controlador] . "O seu desempenho foi " . $valores[$contro] . ". Parabéns! A sua nota foi mediana, continue assim!";
    $contro++;
}

$cont = $pn[$controlador];
$controlador++;

}


