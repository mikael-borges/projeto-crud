<form action="{{ url('dogs') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="raca" placeholder="Raça" required>
    <input type="number" name="idade" placeholder="Idade" required min="0">
    <button type="submit">Cadastrar Cachorro</button>
</form>
