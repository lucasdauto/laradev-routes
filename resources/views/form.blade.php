<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario:: Teste de Rotas</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

<div class="container my-5">
    <form action="{{ url('/users/1') }}" method="POST" autocomplete="off">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
{{--        <input type="hidden" name="_method" value="PUT">--}}
        @method('DELETE')

        <div class="form-group">
            <label for="fist_name">Primeiro Nome:</label>
            <input type="text" name="fist_name" id="fist_name" class="form-control" value="Lucas">
        </div>
        <div class="form-group">
            <label for="last_name">Segundo Nome:</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="Dauto">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" class="form-control" value="teste@teste.com">
        </div>
        <button class="btn btn-primary">Enviar</button>
    </form>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
