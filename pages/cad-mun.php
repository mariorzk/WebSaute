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
.maiusc {
  text-transform: uppercase;
}
</style>

<body>

  <div class="titulo">
    <h1>Cadastrar Município</h1>
  </div>
  <hr>
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-mun" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div>
        <div class="form-group col-md-9">
          <label for="municipio">Município:</label>
          <input type="text" class="form-control" name="input-municipio" id="input-municipio" placeholder="Acaraú">
        </div>
        <div class="form-group col-md-7">
          <label for="cep">CEP:</label>
          <input type="text" class="form-control" name="input-cep" id="input-cep" onkeypress="$(this).mask('00000-000')"placeholder="62580-000">
        </div>
        <div class="form-group col-md-2">
          <label for="uf">UF:</label>
          <input type="text" class="form-control maiusc" name="input-uf" id="input-uf" placeholder="CE" maxlength="2">
        </div>
        </div>
      <button type="submit" class="btn btn-lg btn-success">Salvar</button>
    </form>
  </div>
</body>