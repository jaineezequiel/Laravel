<x-layout title="">
    <a href="{{ Route('produtos.create') }}" class="btn btn-primary">Adicionar item</a>

    @isset($mensagemSucesso)    
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    <ul class="list-group list-group-flush">
        @foreach ($produtos as $produto)
        <li class="list-group-item d-flex justify-content-between alight-itens-center">
            {{ $produto->quantidade }}  |   {{ $produto->nome }}
            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">x</button>
            </form>
        </li>
        @endforeach        
    </ul>

</x-layout>