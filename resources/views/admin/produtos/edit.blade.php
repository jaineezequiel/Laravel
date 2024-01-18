<x-layout title="Editar">
    <x-produtos.form :action="route('produtos.update', $produto->id)"  :nome="$produto->nome" :update="true"></x-produtos.form>
</x-layout>