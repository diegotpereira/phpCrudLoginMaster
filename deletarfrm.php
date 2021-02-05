<?php include "cabecalho.php"; ?>
<div class="box">
    <form action="deletar.php" method="POST">
       <div class="field">
            <div class="control">
                <label>RG</label>
                <input name="rg" type="text" id="rg" class="input is-large" placeholder="Digite seu RG" autofocus="">
            </div>
        </div>
        <button type="submit" value="Excluir" id="enviarbtn" class="button is-block is-link is-large is-fullwidth">Excluir</button>
    </form>
</div>