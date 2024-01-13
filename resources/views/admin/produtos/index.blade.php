<x-layout title="Produtos">
    <a href="/produtos/criar">Novo produto</a>

    <ul>
        @foreach ($produtos as $produto)
        <li>{{ $produto->id }} </li>
        <li>{{ $produto->nome }} </li>
        <li>{{ $produto->preço }} </li>
        <li>{{ $produto->created_at }} </li>
        @endforeach        
    </ul>
</x-layout>