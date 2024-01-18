<form action="{{ $action }}" method="post" class="form">
    @csrf
    
    @isset($update)
    @method('PUT')
    @endisset

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text"
             class="form-control" 
             name="nome" 
             aria-describedby="nome" 
             @isset($nome)value="{{$nome}}"@endisset                
             class="@error('nome') is-invalid @else is-valid @enderror">
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="text" 
        class="form-control" 
        @isset($quantidade)value="{{$quantidade}}"@endisset
        name="quantidade">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>