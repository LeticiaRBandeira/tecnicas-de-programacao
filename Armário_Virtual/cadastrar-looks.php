<h1>✨ Cadastrar Looks</h1>

<form action="?page=salvar-looks" method="POST">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label for="nomeLook" class="form-label">Nome do Look</label>
        <input type="text" name="nome_looks" id="nomeLook" class="form-control" required 
               placeholder="Ex: Look Casual de Sábado">
    </div>

    <div class="mb-3">
        <label for="ocasiaoLook" class="form-label">Ocasião</label>
        <input type="text" name="ocasiao_looks" id="ocasiaoLook" class="form-control" required
               placeholder="Ex: Trabalho, Festa, Casual">
    </div>

    <div class="mb-3">
        <label for="climaLook" class="form-label">Clima</label>
        <select name="clima_looks" id="climaLook" class="form-control" required>
            <option value="" disabled selected>Selecione o Clima/Estação</option>
            <option value="quente">Quente (Verão)</option>
            <option value="ameno">Ameno (Primavera/Outono)</option>
            <option value="frio">Frio (Inverno)</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="descricaoLook" class="form-label">Observações/Descrição</label>
        <textarea name="descricao_looks" id="descricaoLook" class="form-control" rows="3"></textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="favoritos_looks" id="favoritosLook" class="form-check-input" value="1">
        <label class="form-check-label" for="favoritosLook">Marcar como Favorito</label>
        </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save me-1"></i> Cadastrar Look
        </button>
        <a href="?page=index" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Voltar
        </a>
    </div>
</form>