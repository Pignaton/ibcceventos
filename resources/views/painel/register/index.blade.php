@extends('painel.layout.index')
@section('name')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pessoas Cadastradas</h1>
        <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>-->

        <!-- DataTales Example -->
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
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->age}}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
