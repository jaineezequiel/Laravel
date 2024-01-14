<x-layout title="Novo item">

    <form action="{{ route('produtos.store') }}" method="POST" class="form">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" aria-describedby="nome" required>
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="text" class="form-control" name="quantidade">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-layout>