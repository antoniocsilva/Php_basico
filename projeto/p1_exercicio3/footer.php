<hr/>
<div id="footer">
    <?php
//    echo $_SERVER['REQUEST_URI'].'<br>';
//    echo $_SERVER['PHP_SELF'].'<br>';
//    O resultado das duas variáveis são iguais, porém não atingia o proposito solicitado,
//    então após pesquisa combinei a função end() com função explode().
//    A primeira retorna o último elemento de uma array, e a outra retorna uma matriz de string.

    $pagina = end(explode("/", $_SERVER['PHP_SELF']));

    switch ($pagina) {
        case "index.php":
            echo '<span>'."Usuário acessou a página Home.".'</span>';
            break;
        case "empresa.php":
            echo '<span>'."Usuário acessou a página Empresa.".'</span>';
            break;
        case "localizacao.php":
            echo '<span>'."Usuário acessou a página Localização.".'</span>';
            break;
        case "produtos.php":
            echo '<span>'."Usuário acessou a página Produtos.".'</span>';
            break;
        case "fale_conosco.php":
            echo '<span>'."Usuário acessou a página Fale Conosco.".'</span>';
            break;
    }
    ?>
    <p>School of Net - Todos direitos reservados</p>
</div>

</div>

</body>
</thml>