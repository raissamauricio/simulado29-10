<div>
    <div>
        <label for="sizesTextareaDefault" class="form-label">Cadastro de rações</label>
        <br>
        <label for="exampleColorInput" class="form-label">Nome do produto</label>
        <textarea class="form-control" id="nome" aria-label="Default textarea example"></textarea>
    </div>
    <br>
    <div>
      <label for="exampleColorInput" class="form-label">Quantidade</label>
        <textarea class="form-control" id="quantidade" aria-label="Default textarea example"></textarea>
    </div>
    <br>
    <div>
      <label for="exampleColorInput" class="form-label">Peso</label>
        <textarea class="form-control" id="peso"aria-label="Default textarea example"></textarea>
    </div>
    <br>
    <div>
      <label for="exampleColorInput" class="form-label">Preço</label>
        <textarea class="form-control" id="preço" aria-label="Default textarea example"></textarea>
    </div>
    <br>
    <div>
      <label for="exampleColorInput" class="form-label">Lote</label>
        <textarea class="form-control" id="lote" aria-label="Default textarea example"></textarea>
    </div>
    <br>
    <div>
      <label for="exampleColorInput" class="form-label">Estoque minímo</label>
        <textarea class="form-control" id="estoque_minimo" 
            aria-label="Default textarea example"></textarea>
    </div>
    <br>
    <div>
      <label for="exampleColorInput" class="form-label">Prazo de validade</label>
        <input type="date" class="form-control" aria-label="Date picker" value="2026-02-24">
    </div>
     <br> 
     <button type="button" class="theme-secondary btn-solid btn-styled">
   Cadastrar
</button>
  @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif
</div>
