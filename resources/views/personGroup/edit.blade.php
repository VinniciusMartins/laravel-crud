<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Editar Pessoa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Editar Pessoa</h2>
                    </div>
                </div>
            </div>
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('personGroup.update', $personGroup->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Nome</strong>
                            <input type="text" name="name" value="{{ $personGroup->name }}" class="form-control"
                                   placeholder="Nome">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Sobrenome</strong>
                            <input type="text" name="surname" value="{{ $personGroup->surname }}" class="form-control"
                                   placeholder="Sobrenome">
                            @error('surname')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Idade</strong>
                            <input type="text" name="age" value="{{ $personGroup->age }}" class="form-control"
                                   placeholder="idade">
                            @error('age')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Email</strong>
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                   value="{{ $personGroup->email }}">
                            @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-around">
                        <button type="submit" class="btn btn-primary btn-lg col-4">Editar</button>
                        <a class="btn btn-primary btn-lg col-4" href="{{ route('personGroup.index') }}"> Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
