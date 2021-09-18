<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <form action="dados.php" method="POST">
        <div><Input name="nome" placeholder="Nome" required></div>

        <div><input type="text" name="peso" placeholder="Peso"></div>
        
        <div><input type="text" name="altura" placeholder="Altura"</div>
        
        <div><button type="submit">Calcular</button> 
            <button type="reset">Limpar</button>
        </div>       
    </form>
</body>
</html>