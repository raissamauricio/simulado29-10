
<div class="container mt-4">
    <h2>Editar Ração</h2>

    <form wire:submit="atualizar">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control"
                   wire:model="nome">
            @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Quantidade</label>
            <input type="number" class="form-control"
                   wire:model="quantidade">
            @error('quantidade') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Peso</label>
            <input type="number" step="0.01" class="form-control"
                   wire:model="peso">
            @error('peso') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" class="form-control"
                   wire:model="preco">
            @error('preco') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Lote</label>
            <input type="text" class="form-control"
                   wire:model="lote">
            @error('lote') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Estoque mínimo</label>
            <input type="number" class="form-control"
                   wire:model="estoque_minimo">
            @error('estoque_minimo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Prazo de validade</label>
            <input type="date" class="form-control"
                   wire:model="prazo_validade">
            @error('prazo_validade') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Salvar alterações
        </button>

        <a href="{{ route('racoes.index') }}"
           class="btn btn-secondary">
            Voltar
        </a>
    </form>
</div>
