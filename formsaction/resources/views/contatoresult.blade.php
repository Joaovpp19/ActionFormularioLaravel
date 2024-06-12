<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Contato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .result-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        .result-container h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>Dados Enviados</h2>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{ $data['nome'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Telefone</th>
                    <td>{{ $data['telefone'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Endereço</th>
                    <td>{{ $data['endereco'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Sexo</th>
                    <td>{{ $data['sexo'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
