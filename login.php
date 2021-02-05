<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <div style="height:50px;"></div>
    <div class="well" style="margin:auto; padding:auto; width:80%;">
    <span style="font-size:25px; color:blue"><center><strong>Login</strong></center></span>
    <form method="POST" action="valida.php">
        <fieldset id="fie">
           <label>Nome:</label>
           <input type="text" name="login"> <br><br>
           <label>Senha:</label>
           <input type="password" name="senha"> <br><br>
           <input type="submit" value="LOGAR">
        </fieldset>
    </form>
    </div>
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