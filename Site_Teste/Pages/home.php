<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!-- Metadados da pagina OBS: Não sei o que faz -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Titulo da pagina -->
        <title>Home</title>
    </head>
    <body>
        <nav>
            <a href="/">Home</a>
        </nav>

        <br>
        
        <section>
            <h1>Home</h1>
            <?php if(!hasUser()){?>
                <p>Seja bem vindo, <a href="/Register">Cadastre-se</a>!!</p>
                <p>Ou faça <a href="/Login">login</a>.</p>
            <?php }else{?>
                <p>Seja bem vindo, <?php echo $_SESSION['user']?></p>
                <a href="/User/Logout">Logout</a>
            <?php }?>
        </section>
    </body>
</html>