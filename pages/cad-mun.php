<div class="titulo">
  <h1>Cadastrar Município</h1>
</div>
<hr>
<div class="row justify-content-center">
  <div class="container-mini shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-mun" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="municipio">Município:</label>
          <input type="text" class="form-control" name="input-municipio" id="input-municipio" placeholder="Acaraú">
        </div>
        <div class="form-group col-md-6">
          <label for="cep">CEP:</label>
          <input type="text" class="form-control" name="input-cep" id="input-cep" onkeypress="$(this).mask('00000-000')" placeholder="62580-000">
        </div>
        <div class="form-group col-md-2">
          <label for="uf">UF:</label>
          <input type="text" class="form-control maiusc mb-3" name="input-uf" id="input-uf" placeholder="CE" maxlength="2">
        </div>
      </div>
      <button type="submit" class="btn btn-success">Salvar</button>
    </form>
  </div>
</div>

