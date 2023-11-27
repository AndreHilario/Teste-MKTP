<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
    <body class="bg-gray-100 p-8 flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold mb-4">Produtos</h1>
        
        <div>
            @if(session()->has('success'))
                <div class="bg-green-200 text-green-800 p-2 mb-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-700">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-700 px-4 py-2 text-lg">Código de Identificação</th>
                        <th class="border border-gray-700 px-4 py-2 text-lg">Nome</th>
                        <th class="border border-gray-700 px-4 py-2 text-lg">Link da Imagem</th>
                        <th class="border border-gray-700 px-4 py-2 text-lg">Preço</th>
                        <th class="border border-gray-700 px-4 py-2 text-lg">CEP do Galpão</th>
                        <th class="border border-gray-700 px-4 py-2 text-lg bg-gray-400">Ações</th>
                        <th class="border border-gray-700 px-4 py-2 text-lg bg-gray-400">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="border border-gray-700 px-4 py-2 text-lg">{{ $product->id_code }}</td>
                            <td class="border border-gray-700 px-4 py-2 text-lg">{{ $product->name }}</td>
                            <td class="border border-gray-700 px-4 py-2 text-lg">{{ $product->url }}</td>
                            <td class="border border-gray-700 px-4 py-2 text-lg">R$ {{ number_format($product->price, 2, ',', '.') }}</td>
                            <td class="border border-gray-700 px-4 py-2 text-lg text-center">{{ $product->cep }}</td>
                            <td class="border border-gray-700 px-4 py-2 text-lg">
                                <a href="{{ route('product.edit', ['product' => $product]) }}" class="text-blue-600 hover:underline">Editar</a>
                            </td>
                            <td class="border border-gray-700 px-4 py-2 text-lg">
                                <form method="post" action="{{ route('product.delete', ['product' => $product]) }}"  onsubmit="return confirm('Tem certeza que deseja deletar este produto?');">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600 hover:underline focus:outline-none">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="mt-4 text-lg">
            <button onclick="window.location='{{ route('product.create') }}'" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cadastrar produto</button>
        </div>
    </body>

</html>