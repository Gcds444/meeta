@extends('main')
<div class="card-header" id="topo">
    <h1>LISTA DE TODOS OS USUÁRIOS</h1>
    <a href="/">Voltar</a>
</div>
<div class="corpo">
    <div class="card">
        <div>
            <div>  
                <div>
                <table width=100% class="table table-bordered">
                <thead>
                    <tr align="center">
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Senha</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Alterações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios->sortBy('id') as $user)  
                    <tr>
                        <td align="center">{{ $user->id }}</td>
                        <td align="center">{{ $user->username }}</td>
                        <td align="center">{{ $user->password }}</td>
                        <td align="center">{{ $user->name }}</td>
                        <td align="center">
                            @if(empty($user->softDeletes))
                            Ativo
                            @else
                            {{ $user->softDeletes }}
                            <form method="POST" action="/usuario/{{ $user->id }}">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Tem certeza que quer excluir permanente?');" class="btn btn-danger" name="delete" value="delete">Excluir</button>
                            </form>
                            @endif
                        </td>
                        <td align="center">
                            <a href="/usuario/{{ $user->id }}/edit" class="btn btn-info">Atualizar</a>
                            <form method="POST" action="/inativar/{{ $user->id }}">
                                @csrf
                                @method('patch')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja inativar?');" class="btn btn-danger" name="inativar" value="inativar">Inativar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>