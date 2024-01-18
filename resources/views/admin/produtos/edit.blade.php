<x-layout title="Editar">
    <x-produtos.form :action="route('produtos.update', $produto->id)"  :nome="$produto->nome"></x-produtos.form>
</x-layout>