<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/07/15
 * Time: 18:31
 *
 * Crie uma pasta “p2_exercicio3” e um arquivo index.php. Dentro dele crie um array associativo com 20 alunos contendo:
 * matricula, nome e altura. O programa deverá mostrar os 5 alunos mais altos da turma, mostrando somente a matricula do aluno e a altura.
 *
 */
$id = "201502Y6-RC00";
$x = 0;

function gerarAltura(){
    return  rand(175, 195) / 100;
}

$alunos[0]["Matricula"] =$id.++$x;
$alunos[0]["Nome"] = "Pedro";
$alunos[0]["Altura"] = gerarAltura();

$alunos[1]["Matricula"] =$id.++$x;
$alunos[1]["Nome"] = "Antonio";
$alunos[1]["Altura"] = gerarAltura();

$alunos[2]["Matricula"] =$id.++$x;
$alunos[2]["Nome"] = "Ana";
$alunos[2]["Altura"] = gerarAltura();

$alunos[3]["Matricula"] =$id.++$x;
$alunos[3]["Nome"] = "Luiza";
$alunos[3]["Altura"] = gerarAltura();

$alunos[4]["Matricula"] =$id.++$x;
$alunos[4]["Nome"] = "Carlos";
$alunos[4]["Altura"] = gerarAltura();

$alunos[5]["Matricula"] =$id.++$x;
$alunos[5]["Nome"] = "José";
$alunos[5]["Altura"] = gerarAltura();

$alunos[6]["Matricula"] =$id.++$x;
$alunos[6]["Nome"] = "Silva";
$alunos[6]["Altura"] = gerarAltura();

$alunos[7]["Matricula"] =$id.++$x;
$alunos[7]["Nome"] = "Maria";
$alunos[7]["Altura"] = gerarAltura();

$alunos[8]["Matricula"] =$id.++$x;
$alunos[8]["Nome"] = "Luiza";
$alunos[8]["Altura"] = gerarAltura();

$alunos[9]["Matricula"] =$id.++$x;
$alunos[9]["Nome"] = "Carlos";
$alunos[9]["Altura"] = gerarAltura();

$alunos[10]["Matricula"] =$id.++$x;
$alunos[10]["Nome"] = "João";
$alunos[10]["Altura"] = gerarAltura();

$alunos[11]["Matricula"] =$id.++$x;
$alunos[11]["Nome"] = "Joel";
$alunos[11]["Altura"] = gerarAltura();

$alunos[12]["Matricula"] =$id.++$x;
$alunos[12]["Nome"] = "Tereza";
$alunos[12]["Altura"] = gerarAltura();

$alunos[13]["Matricula"] =$id.++$x;
$alunos[13]["Nome"] = "Gabriela";
$alunos[13]["Altura"] = gerarAltura();

$alunos[14]["Matricula"] =$id.++$x;
$alunos[14]["Nome"] = "Daniele";
$alunos[14]["Altura"] = gerarAltura();

$alunos[15]["Matricula"] =$id.++$x;
$alunos[15]["Nome"] = "Amelia";
$alunos[15]["Altura"] = gerarAltura();

$alunos[16]["Matricula"] =$id.++$x;
$alunos[16]["Nome"] = "Geraldo";
$alunos[16]["Altura"] = gerarAltura();

$alunos[17]["Matricula"] =$id.++$x;
$alunos[17]["Nome"] = "Mario";
$alunos[17]["Altura"] = gerarAltura();

$alunos[18]["Matricula"] =$id.++$x;
$alunos[18]["Nome"] = "Normando";
$alunos[18]["Altura"] = gerarAltura();

$alunos[19]["Matricula"] =$id.++$x;
$alunos[19]["Nome"] = "Jaqueline";
$alunos[19]["Altura"] = gerarAltura();


// Obter uma lista de colunas
foreach ($alunos as $key => $row) {
    $mat[$key]  = $row['Matricula'];
    $nome[$key]  = $row['Nome'];
    $altura[$key]  = $row['Altura'];

}

// Ordena os dados com altura descendente, nome e matricula ascendente
// adiciona $alunos como o último parãmetro, para ordenar pela chave comum
array_multisort($altura, SORT_DESC, $nome, $mat, SORT_ASC, $alunos);

?>

<ul>

    <?php  for($i=0; $i < 5; $i++):?>
        <li><?="Matricula: ".$alunos[$i]["Matricula"]." - ". "Nome: ".$alunos[$i]["Nome"]." - "."Altura: ".$alunos[$i]["Altura"];?></li>
        <hr />
    <?php endfor; ?>
</ul>