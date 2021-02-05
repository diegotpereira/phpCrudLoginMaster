<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login</h3>
                    <!--<h3 class="title has-text-grey"><a href="https://github.com/diegotpereira"> <img src='img/logotipo-do-github.png' target="_blank"></a></h3>-->
                 
                    <div class="box">
                        <form action="valida.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="login" name="text" class="input is-large" placeholder="Digite seu Usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Digite sua Senha">
                                </div>
                            </div>
                            <button type="submit" value="LOGAR" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php
                            session_start();

                            if (!isset($_SESSION['msg']) == true) {
                                # code...
                                echo "";
                            }else {
                                # code...
                                echo "<p><b><i>" . $_SESSION['msg'] . "</p></b></i>";
                            }
                        ?>
</body>

</html>