<div class="card-header" id="topo">
    <h1>INSIRA AS INFORMAÇÕES DO USUÁRIO</h1>
    <a href="/">Voltar</a>
</div>
    <div class="card-body" id="corpo">
        <div class="row">
            <div class="form-group col-sm-3">
                <div class="form-group">
                    <label for="username" class="required"><b>Username: </b></label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $usuario->username }}">
                </div>  
            </div>
            <div class="form-group col-sm-3">
                <div class="form-group">
                    <label for="password" class="required"><b>Senha: </b></label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ $usuario->password }}">
                </div>
            </div> 
            <div class="form-group col-sm-5">
                <div class="form-group">
                    <label for="name" class="required"><b>Nome Completo: </b></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}">
                </div>
            </div>
        </div> 
        <button type="submit" class="btn btn-success">Cadastrar </button>
    </div>
</div>