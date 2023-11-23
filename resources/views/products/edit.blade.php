<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <h1>Editar produto</h1>

    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        
        @endif

    </div>

    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label>Código:</label>
            <input type="text" name="id_code" value="{{$product->id_code}}"/>
        </div>
        <div>
            <label>Nome:</label>
            <input type="text" name="name" value="{{$product->name}}" />
        </div>
        <div>
            <label>Link:</label>
            <input type="url" name="url" value="{{$product->url}}" />
        </div>
        <div>
            <label>Preço:</label>
            <input type="number" name="price" value="{{$product->price}}" />
        </div>
        <div>
            <label>CEP:</label>
            <input type="text" name="cep" value="{{$product->cep}}" />
        </div>
        <div>
            <input type="submit" value="Editar produto" />
        </div>
    </form>
</body>
</html>