<?php include "cabecalho.php"; ?>
<div class="box">
    <form action="criar.php" method="POST">
        <div class="field">
            <div class="control">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" class="input is-large" placeholder="Digite seu Nome" autofocus="">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <label>Endereço</label>
                <input  type="text" name="ender" id="ender" class="input is-large" placeholder="Digite seu Endereço" autofocus="">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <label>RG</label>
                <input type="text" name="rg"  id="rg" class="input is-large" placeholder="Digite seu RG">
            </div>
        </div>
        <button type="submit" value="Enviar" id="enviarbtn" class="button is-block is-link is-large is-fullwidth">Salvar</button>
        </div>
    </form>
</div>