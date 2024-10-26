<form action="{{ url('dogs/' . $dog->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar Cachorro</button>
</form>