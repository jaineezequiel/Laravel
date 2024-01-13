<x-layout title="">
    <a href="/produtos/criar" class="btn btn-primary">Adicionar item</a>

    <ul class="list-group list-group-flush">
        @foreach ($produtos as $produto)
        <li class="list-group-item">{{ $produto->quantidade }}  |   {{ $produto->nome }}</li>
        @endforeach        
    </ul>

</x-layout>