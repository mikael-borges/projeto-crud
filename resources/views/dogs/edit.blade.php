<form action="{{ url('dogs/' . $dog->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="nome" value="{{ $dog->nome }}" placeholder="Nome" required>
    <input type="text" name="raca" value="{{ $dog->raca }}" placeholder="Raça" required>
    <input type="number" name="idade" value="{{ $dog->idade }}" placeholder="Idade" required min="0">
    <button type="submit">Atualizar Cachorro</button>
</form>
