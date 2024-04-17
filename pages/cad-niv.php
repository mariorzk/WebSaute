<div class="titulo">
  <h1>Cadastrar Nível Escolar</h1>
</div>
<hr>
<div class="row justify-content-center">
  <div class="container-mini shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-niv" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div class="form-group col-md-12">
        <label for="nivel">Nível Escolar:</label>
        <input type="text" class="form-control mb-3" name="input-nivel" id="input-nivel" placeholder="Médio Integral">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>    
    </form>
  </div>
</div>
