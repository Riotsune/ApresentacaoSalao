<x-layout title="Novo Serviço">
    <form action="/api/servicos/novo" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo:</label>
            <input type="text" id="tipo" name="tipo" class="form-control">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" id="descricao" name="descricao" class="form-control">
            <label for="imagem" class="form-label">Imagem:</label>
            <input type="file" id="imagem" name="imagem" class="form-control">
            <label for="preco" class="form-label">Preço:</label>
            <input type="value" id="preco" name="preco" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>