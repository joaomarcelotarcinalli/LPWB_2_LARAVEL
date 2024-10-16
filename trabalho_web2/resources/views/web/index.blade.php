@extends('admin_layout.index')

@section('admin_template')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Usuários</h1>
        <ol class="breadcrumb mb-4">
            
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista de catgorias
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Novo
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <th>ID</th>
                        <th>Usuário</th>
                        <th>Senha</th>
                    </thead>
                    <tbody>
                        @foreach ($login as $linha)
                            <tr>
                                <td>{{ $linha->id }}</td>
                                <td>{{ $linha->usuario }}</td>
                                <td>{{ $linha->senha }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST" action="/categoria">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nova categoria</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cat_nome" name="cat_nome"
                                        placeholder="Digite o nome da categoria">
                                    <label for="floatingInput">Categoria</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cat_descricao" name="cat_descricao"
                                        placeholder="Digite ">
                                    <label for="floatingInput">Descrição</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
