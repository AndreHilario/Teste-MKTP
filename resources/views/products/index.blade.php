<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <div>
        <table border="2">
            <thead>
                <tr>
                    <th>Código de Identificação</th>
                    <th>Nome</th>
                    <th>Link da Imagem</th>
                    <th>Preço</th>
                    <th>CEP do Galpão</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id_code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->url }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->cep }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>