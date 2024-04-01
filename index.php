<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho - Ulisses</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>Cadastro de Aluno</h1>

    <form action="processar.php" method="post" class="formulario">
        <label for="nome">Nome do aluno:</label>
        <input type="text" id="nome" name="nome">
        <label for="matricula">Matricula do aluno: </label>
        <input type="text" id="matricula" name="matricula">
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso">
        <label for="codigo_curso">Código do curso: </label>
        <input type="text" id="codigo_curso" name="codigo_curso">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>