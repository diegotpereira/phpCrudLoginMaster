<?php include "cabecalho.php"; ?>
<div class="box">
    <form action="ler.php" method="POST">
       <div class="field">
            <div class="control">
                <label>Nome</label>
                <input name="login" type="text" id="nome" class="input is-large" placeholder="Digite seu Nome" autofocus="">
            </div>
        </div>
        <button type="submit" value="Consultar" id="enviarbtn" class="button is-block is-link is-large is-fullwidth">Consultar</button>
    </form>
</div>