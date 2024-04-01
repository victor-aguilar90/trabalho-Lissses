<?php

    include 'dados.php';

    $curso = new Curso();

    $curso -> setNome($_POST["curso"]);
    $curso -> setCodigo($_POST["codigo_curso"]);

    $aluno = new Aluno();

    $aluno -> setNome($_POST["nome"]);
    $aluno -> setMatricula($_POST["matricula"]);
    $aluno -> setCadastrar($curso);

    echo "<h1>Dados dos alunos do curso: </h1>";

    $aluno -> consultar();





?>