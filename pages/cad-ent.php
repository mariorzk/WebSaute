<style>
  body {
    max-width: 100%;
    overflow-x: hidden;
    background-image: url(img/bg-body.png);
    background-size: 100%;
  }
  .container {
    width: 550px;
  }

  .titulo {
    color: #4b606a;
    text-align: center;
  }

input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>

<body>

  <div class="titulo">
    <h1>Cadastrar Entidade</h1>
  </div>
  <hr>
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-ent" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
        <div>
            <div class="form-group col-md-9">
            <label for="entidade">Entidade:</label>
            <input type="text" class="form-control" name="input-entidade" id="input-entidade" placeholder="Secretaria de Educação">
            </div>
            <div>
            <button type="submit" class="btn btn-lg btn-success">Salvar</button>
        </div>
        </div>
      
    </form>
  </div>
</body>