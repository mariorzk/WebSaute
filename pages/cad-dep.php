<div class="titulo">
  <h1>Cadastrar Dependência</h1>
</div>
<hr>
<div class="row justify-content-center">
  <div class="container-mini shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-dep" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div class="form-group col-md-12">
        <label for="dependencia">Dependência:</label>
        <input type="text" class="form-control mb-3" name="input-dependencia" id="input-dependencia" placeholder="Ex. Municipal">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>
</div>
