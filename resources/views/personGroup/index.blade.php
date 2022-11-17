<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Person CRUD</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Person CRUD</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('personGroup.create') }}"> Adicionar Pessoa</a>
                    </div>
                </div>
            </div>
            @if ($message = Session::get('sucesso'))
                <div class="alert alert-success alert-dismissible fade show">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
                    <th>Email</th>
                    <th width="280px">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($personGroup as $person)
                        <tr>
                            <td>{{ $person->id }}</td>
                            <td>{{ $person->name }}</td>
                            <td>{{ $person->surname }}</td>
                            <td>{{ $person->age }}</td>
                            <td>{{ $person->email }}</td>
                            <td>
                                <form action="{{ route('personGroup.destroy',$person->id) }}" method="Post">
                                    <div class="col-12 d-flex justify-content-around">
                                        <a class="btn btn-primary" href="{{ route('personGroup.edit',$person->id) }}">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Deletar</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $personGroup->links() }}
        </div>
    </body>
</html>
