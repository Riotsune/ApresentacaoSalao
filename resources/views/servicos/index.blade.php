<x-layout title="Serviços">
    <a href="/servicos/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($servicos as $servico)
            <li class="list-group-item">{{ $servico->id}}</li>
            <li class="list-group-item">{{ $servico->tipo }}</li>
            <li class="list-group-item">{{ $servico->nome }}</li>
            <li class="list-group-item">{{ $servico->descricao }}</li>
            <li class="list-group-item">{{ $servico->imagem }}</li>
            <li class="list-group-item">{{ $servico->preco }}</li>
        @endforeach
    </ul>
</x-layout>