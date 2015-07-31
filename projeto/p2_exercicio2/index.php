<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 30/07/15
 * Time: 18:31
 *
 * Crie uma pasta “p2_exercicio2” e um arquivo index.php. Dentro dele crie um array associativo
 * para armazenar as notas e os nomes de 20 alunos, o programa deverá mostrar quais alunos foram aprovados e reprovados.
 * Use uma lista HTML para mostrar os alunos.
 *
 */

$alunos[0]["Nome"] = "Pedro";
$alunos[0]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[0]["Situação"] = $alunos[0]["Nota"] >= 7 ? $alunos[0]["Situação"] = "Aprovado" : "Reprovado";

$alunos[1]["Nome"] = "Antonio";
$alunos[1]["Nota"] =((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[1]["Situação"] = $alunos[1]["Nota"] >= 7 ? $alunos[1]["Situação"] = "Aprovado" : "Reprovado";

$alunos[2]["Nome"] = "Ana";
$alunos[2]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[2]["Situação"] = $alunos[2]["Nota"] >= 7 ? $alunos[2]["Situação"] = "Aprovado" : "Reprovado";

$alunos[3]["Nome"] = "Luiza";
$alunos[3]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[3]["Situação"] = $alunos[3]["Nota"] >= 7 ? $alunos[3]["Situação"] = "Aprovado" : "Reprovado";

$alunos[4]["Nome"] = "Carlos";
$alunos[4]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[4]["Situação"] = $alunos[4]["Nota"] >= 7 ? $alunos[4]["Situação"] = "Aprovado" : "Reprovado";

$alunos[5]["Nome"] = "José";
$alunos[5]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[5]["Situação"] = $alunos[5]["Nota"] >= 7 ? $alunos[5]["Situação"] = "Aprovado" : "Reprovado";

$alunos[6]["Nome"] = "Silva";
$alunos[6]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[6]["Situação"] = $alunos[6]["Nota"] >= 7 ? $alunos[6]["Situação"] = "Aprovado" : "Reprovado";

$alunos[7]["Nome"] = "Maria";
$alunos[7]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[7]["Situação"] = $alunos[7]["Nota"] >= 7 ? $alunos[7]["Situação"] = "Aprovado" : "Reprovado";

$alunos[8]["Nome"] = "Luiza";
$alunos[8]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[8]["Situação"] = $alunos[8]["Nota"] >= 7 ? $alunos[8]["Situação"] = "Aprovado" : "Reprovado";

$alunos[9]["Nome"] = "Carlos";
$alunos[9]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[9]["Situação"] = $alunos[9]["Nota"] >= 7 ? $alunos[9]["Situação"] = "Aprovado" : "Reprovado";

$alunos[10]["Nome"] = "João";
$alunos[10]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[10]["Situação"] = $alunos[10]["Nota"] >= 7 ? $alunos[10]["Situação"] = "Aprovado" : "Reprovado";

$alunos[11]["Nome"] = "Joel";
$alunos[11]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[11]["Situação"] = $alunos[11]["Nota"] >= 7 ? $alunos[11]["Situação"] = "Aprovado" : "Reprovado";

$alunos[12]["Nome"] = "Tereza";
$alunos[12]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[12]["Situação"] = $alunos[12]["Nota"] >= 7 ? $alunos[12]["Situação"] = "Aprovado" : "Reprovado";

$alunos[13]["Nome"] = "Gabriela";
$alunos[13]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[13]["Situação"] = $alunos[13]["Nota"] >= 7 ? $alunos[13]["Situação"] = "Aprovado" : "Reprovado";

$alunos[14]["Nome"] = "Daniele";
$alunos[14]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[14]["Situação"] = $alunos[14]["Nota"] >= 7 ? $alunos[14]["Situação"] = "Aprovado" : "Reprovado";

$alunos[15]["Nome"] = "Amelia";
$alunos[15]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[15]["Situação"] = $alunos[15]["Nota"] >= 7 ? $alunos[15]["Situação"] = "Aprovado" : "Reprovado";

$alunos[16]["Nome"] = "Geraldo";
$alunos[16]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[16]["Situação"] = $alunos[16]["Nota"] >= 7 ? $alunos[16]["Situação"] = "Aprovado" : "Reprovado";

$alunos[17]["Nome"] = "Mario";
$alunos[17]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[17]["Situação"] = $alunos[17]["Nota"] >= 7 ? $alunos[17]["Situação"] = "Aprovado" : "Reprovado";

$alunos[18]["Nome"] = "Normando";
$alunos[18]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[18]["Situação"] = $alunos[18]["Nota"] >= 7 ? $alunos[18]["Situação"] = "Aprovado" : "Reprovado";

$alunos[19]["Nome"] = "Jaqueline";
$alunos[19]["Nota"] = ((rand(0, 10) + rand(0, 10) + rand(0, 10) + rand(0, 10)) /4);
$alunos[19]["Situação"] = $alunos[19]["Nota"] >= 7 ? $alunos[19]["Situação"] = "Aprovado" : "Reprovado";


?>

<ul>
<?php $j = 0; for($i=0; $i < count($alunos); $i++):?>
    <li><?=++$j." - "."Nome: ".$alunos[$i]["Nome"]." - "."Nota: ".$alunos[$i]["Nota"]." - "."Situação: ".$alunos[$i]["Situação"];?></li>
    <hr />
<?php endfor; ?>
</ul>

