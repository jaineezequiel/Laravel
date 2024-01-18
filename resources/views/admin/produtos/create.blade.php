<x-layout title="Novo item">
    <x-produtos.form :action="route('produtos.store')" :nome="old('nome')"></x-produtos.form>
</x-layout>