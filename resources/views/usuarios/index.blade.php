@extends('main')

<div class="card-header" id="topo">
    <b>
        <h1> BEM VINDO!!</h1>
        <p id="sub"> Esse é o teste de Cadastro de Usuário </p>
    </b>
</div>
<div id="corpo">
<br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h3 class="card-title"><b>Cadastro de Usuários</b></h3>
                        <p class="card-text">Cadastre um novo usuário da empresa</p>
                        <a href="/usuario/create" class="btn btn-info"> Vamos Lá!! </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h3 class="card-title"><b>Lista de Usuários</b></h3>
                        <p class="card-text">Cheque a lista de todos Usuários</p>
                        <a href="/lista" class="btn btn-info"> Lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>