<div>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Peso</th>
      <th scope="col">Preço</th>
      <th scope="col">Lote</th>
      <th scope="col">Estoque minimo</th>
      <th scope="col">Prazo de validade</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($racoes as $racao)
    <tr>
        <td> {{ $racao->nome}} </td>
        <td> {{ $racao->quantidade}} </td>
        <td> {{ $racao->peso}} </td>
        <td> {{ $racao->preço}} </td>
        <td> {{ $racao->lote}} </td>
        <td> {{ $racao->estoque_minimo}} </td>
        <td> {{ $racao->prazo_validade}} </td>
    </tr>
    @endforeach
  </tbody>
    </table>

      <a href="{{ route('racoes.edit', $racao->id) }}"
                           class="btn btn-warning btn-sm">
                            Editar
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8">
                        Nenhuma ração cadastrada.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</div>