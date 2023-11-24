<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100 p-8">
        <h1 class="text-3xl font-bold mb-4">Cadastrar Produto</h1>
    
        <form method="post" action="{{ route('product.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('post')
            
            @if ($errors->any())
                <div class="bg-red-100 text-red-700 border border-red-400 rounded p-4 mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <li>{{ $error }}</li>
                            </div>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2 text-lg" for="id_code">Código:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg" 
                       id="id_code" type="text" name="id_code" placeholder="Código de identificação" value="{{ old('id_code') }}" 
                       pattern="[A-Za-z0-9]+" title="Apenas letras e números são permitidos" required />
            </div>            
            <div class="mb-4">
                <label class="block text-gray-700 text-lg font-bold mb-2" for="name">Nome:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg" 
                       id="name" type="text" name="name" placeholder="Nome" value="{{ old('name') }}" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-lg font-bold mb-2" for="url">Link:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg" 
                       id="url" type="url" name="url" placeholder="Url" value="{{ old('url') }}" required />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-lg font-bold mb-2" for="price">Preço:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg" 
                       id="price" type="text" name="price" placeholder="Preço (ex: 100.00)" value="{{ old('price') }}" 
                       pattern="^\d+(\.\d{1,2})?$" title="Por favor, insira um valor válido (ex: 100.00)"
                       oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required />
            </div>            
            <div class="mb-4">
                <label class="block text-gray-700 text-lg font-bold mb-2" for="cep">CEP:</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg" 
                       id="cep" type="text" name="cep" placeholder="CEP (ex: xxxxx-xxx)" 
                       value="{{ old('cep') }}" onchange="searchNeighborhood(this.value)" 
                       pattern="\d{5}-\d{3}" title="O CEP deve seguir o formato correto (ex: xxxxx-xxx)" required />
                <p id="neighborhood" class="text-gray-600 text-sm mt-2"></p> 
            </div>
            <div class="mb-6 text-lg">
                <input class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" 
                       type="submit" value="Criar Produto" />
            </div>
        </form>
        
        <script src="{{ asset('js/searchNeighborhood.js') }}"></script>

    </body>
    
</html>