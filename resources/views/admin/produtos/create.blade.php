<x-layout title="Novo produto">

    <form action="/produtos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" aria-describedby="nome">
        </div>
        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="text" class="form-control" id="quantidade">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</x-layout>