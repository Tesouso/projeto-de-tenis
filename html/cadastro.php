
<?php require_once 'cabecalho.php'; ?>

        <form action="#" aria-autocomplete="on" method="get">
        <br>
            <fieldset>
                <div class="clearfix">
                    <legend id="legend">Criar conta</legend>
                    <input type="text" id="E-MAIL" name="E-MAIL" value="" placeholder="E-MAIL" required autofocus>
                    <br>
                    <br>
                    <input type="text" id="Senha" name="Senha" value="" placeholder="Senha" required autofocus>
                    <br>
                    <br>
                    <input type="text" id="Repetir senha" name="Repetir senha" value="" placeholder="Repetir senha"
                        required autofocus>
                    <br>
                    <br>
                    <input type="submit" value="Criar conta">
                    <br>
                    <br>
                    <br>

                    <div style="display: flex; justify-content: space-between; width:100%;">

                        <div>
                            <input class="acessar1" type="submit" value="ACESSAR COM GOOGLE">
                        </div>

                        <div>
                            <input class="acessar2" type="submit" value="ACESSAR COM FACEBOOK">
                        </div>
                        <div>
                            <input class="acessar3" type="submit" value="ACESSAR COM TWITTER">
                        </div>
                    </div>
                    <br>
                </div>
            </fieldset>
            <br>
            <hr>
            <?php require_once 'rodape.php'; ?>          