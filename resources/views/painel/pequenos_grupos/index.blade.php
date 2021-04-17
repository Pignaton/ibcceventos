@extends('painel.layout.index')
@section('name')

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informações</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Idade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Idade</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a class="btn btn-info btn-circle btn-sm" title="Ver" href="/painel/view">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a class="btn btn-warning btn-circle btn-sm" title="editar" href="/painel/edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-danger btn-circle btn-sm" title="deletar" href="/painel/delete">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
