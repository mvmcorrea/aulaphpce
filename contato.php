<h1>CONTATO</h1>

<form class="form-horizontal">
    <fieldset>

        <legend>Formulário de Contato</legend>

        <div class="control-group">
            <label class="control-label" for="Nome">Nome</label>
            <div class="controls">
                <input id="Nome" name="Nome" type="text" placeholder="Digite seu nome" class="input-xlarge" required="">
                <p class="help-block">Digite aqui o seu nome</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="email">E-Mail</label>
            <div class="controls">
                <input id="email" name="email" type="text" placeholder="Digite seu e-mail" class="input-xlarge" required="">
                <p class="help-block">Digite um email verdadeiro</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="assunto">Assunto</label>
            <div class="controls">
                <input id="assunto" name="assunto" type="text" placeholder="Digite o assunto" class="input-xlarge" required="">
                <p class="help-block">Digite o assunto da mensagem</p>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="mensagem">Mensagem</label>
            <div class="controls">
                <textarea id="mensagem" name="mensagem"></textarea>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="enviar">Enviar</label>
            <div class="controls">
                <button id="enviar" name="enviar" class="btn btn-primary">Enviar Mensagem</button>
            </div>
        </div>

    </fieldset>
</form>