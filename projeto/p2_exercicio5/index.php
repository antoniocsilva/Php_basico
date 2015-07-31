<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/07/15
 * Time: 22:00
 */
function gerarNotas(){
    return ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
}

function verificarStatus($i){
    return $i >= 7 ? "Aprovado" : "Reprovado";
}


$alunos[0]["Nome"] = "Pedro";
$nota = gerarNotas();
$alunos[0]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[0]["Situação"] = $status;

$alunos[1]["Nome"] = "Antonio";
$nota = gerarNotas();
$alunos[1]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[1]["Situação"] = $status;


$alunos[2]["Nome"] = "Ana";
$nota = gerarNotas();
$alunos[2]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[2]["Situação"] = $status;


$alunos[3]["Nome"] = "Luiza";
$nota = gerarNotas();
$alunos[3]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[3]["Situação"] = $status;


$alunos[4]["Nome"] = "Carlos";
$nota = gerarNotas();
$alunos[4]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[4]["Situação"] = $status;


$alunos[5]["Nome"] = "José";
$nota = gerarNotas();
$alunos[5]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[5]["Situação"] = $status;

$alunos[6]["Nome"] = "Silva";
$nota = gerarNotas();
$alunos[6]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[6]["Situação"] = $status;

$alunos[7]["Nome"] = "Maria";
$nota = gerarNotas();
$alunos[7]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[7]["Situação"] = $status;

$alunos[8]["Nome"] = "Luiza";
$nota = gerarNotas();
$alunos[8]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[8]["Situação"] = $status;

$alunos[9]["Nome"] = "Carlos";
$nota = gerarNotas();
$alunos[9]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[9]["Situação"] = $status;

$alunos[10]["Nome"] = "João";
$nota = gerarNotas();
$alunos[10]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[10]["Situação"] = $status;

$alunos[11]["Nome"] = "Joel";
$nota = gerarNotas();
$alunos[11]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[11]["Situação"] = $status;

$alunos[12]["Nome"] = "Tereza";
$nota = gerarNotas();
$alunos[12]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[12]["Situação"] = $status;

$alunos[13]["Nome"] = "Gabriela";
$nota = gerarNotas();
$alunos[13]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[13]["Situação"] = $status;

$alunos[14]["Nome"] = "Daniele";
$nota = gerarNotas();
$alunos[14]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[14]["Situação"] = $status;

$alunos[15]["Nome"] = "Amelia";
$nota = gerarNotas();
$alunos[15]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[15]["Situação"] = $status;

$alunos[16]["Nome"] = "Geraldo";
$nota = gerarNotas();
$alunos[16]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[16]["Situação"] = $status;

$alunos[17]["Nome"] = "Mario";
$nota = gerarNotas();
$alunos[17]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[17]["Situação"] = $status;

$alunos[18]["Nome"] = "Normando";
$nota = gerarNotas();
$alunos[18]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[18]["Situação"] = $status;

$alunos[19]["Nome"] = "Jaqueline";
$nota = gerarNotas();
$alunos[19]["Nota"] = $nota;
$status = verificarStatus($nota);
$alunos[19]["Situação"] = $status;

?>

<ul>
    <?php $j = 0; for($i=0; $i < count($alunos); $i++):?>
        <li><?=++$j." - "."Nome: ".$alunos[$i]["Nome"]." - "."Nota: ".$alunos[$i]["Nota"]." - "."Situação: ".$alunos[$i]["Situação"];?></li>
        <hr />
    <?php endfor; ?>
</ul>
