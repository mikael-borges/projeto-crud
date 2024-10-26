<a href="{{ url('dogs/create') }}">
    <button type="button">Adicionar Novo Cachorro</button>
</a>

@foreach($dogs as $dog)
    <div>
        <h3>{{ $dog->nome }}</h3>
        <p>Raça: {{ $dog->raca }}</p>
        <p>Idade: {{ $dog->idade }} anos</p>
        
        <form action="{{ url('dogs/'.$dog->id.'/edit') }}" method="GET" style="display:inline;">
            <button type="submit">Editar</button>
        </form>
        
        <form action="{{ url('dogs/'.$dog->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Deletar</button>
        </form>
    </div>
@endforeach
