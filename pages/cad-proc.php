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
    <h1>Cadastrar Processo</h1>
  </div>
  <hr>
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-proc" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
        <div>
            <div class="form-group col-md-4">
                <label for="processo">Nº do Processo:</label>
                <input type="text" class="form-control" name="input-processo" id="input-processo" onkeypress="$(this).mask('000/2023-0')" placeholder="000/0000-0">
            </div>
            <div class="form-group col-md-10">
                <label for="instituicao">Instituição:</label>
                <select name="select-instituicao" id="select-instituicao" class="form-control">
                    <option selected>Selecione...</option>
                    <?php
                    $query = $conn->query("SELECT id_inst, instituicao FROM cad_inst");
                    $registros = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach($registros as $option) {
                    ?> 
                    <option value="<?php echo $option['id_inst']?>"><?php echo $option['instituicao']?></option>
                    <?php
                    }
                    ?>
                </select>
        </div>        </div>
      <button type="submit" class="btn btn-lg btn-success">Salvar</button>
    </form>
  </div>    
</body>
