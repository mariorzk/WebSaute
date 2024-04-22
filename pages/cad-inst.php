<div class="titulo">
  <h1>Cadastro de Instituição</h1>
</div>
<hr>
<div class="container shadow p-3 mb-5 bg-white rounded">
  <form action="?page=salvar-inst" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
      <label for="instituicao">Instituição:</label>
      <input type="text" class="form-control" name="input-instituicao" id="input-instituicao" placeholder="EEM Escola de Ensino Médio">
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="nivel">Nível:</label>
        <select name="select-nivel" id="select-nivel" class="form-control">
          <option selected>Selecione...</option>
          <?php
          $query = $conn->query("SELECT id_niv, nivel FROM cad_niv");
          $registros = $query->fetchAll(PDO::FETCH_ASSOC);
          foreach($registros as $option) {
          ?> 
          <option value="<?php echo $option['id_niv']?>"><?php echo $option['nivel']?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-8">
        <label for="endereco">Endereço:</label>
        <input type="text" class="form-control" name="input-endereco" id="input-endereco" placeholder="Rua dos bobos">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="bairro-distrito">Bairro/Distrito:</label>
        <input type="text" class="form-control" name="input-bairro" id="input-bairro" placeholder="Copacabana">
      </div>
      <div class="form-group col-md-4">
        <label for="municipio">Município:</label>
        <select name="select-municipio" id="select-municipio" class="form-control">
          <option selected>Selecione...</option>
          <?php
          $query = $conn->query("SELECT id_mun, municipio FROM cad_mun");
          $registros = $query->fetchAll(PDO::FETCH_ASSOC);
          foreach($registros as $option) {
          ?> 
          <option value="<?php echo $option['id_mun']?>"><?php echo $option['municipio']?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-5">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" name="input-email" id="input-email" placeholder="nomezinho@dominio.com.br">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="dependencia">Dependência:</label>
        <select name ="select-dependencia" id="select-dependencia" class="form-control">
          <option selected>Selecione...</option>
          <?php
          $query = $conn->query("SELECT id_dep, dependencia FROM cad_dep");
          $registros = $query->fetchAll(PDO::FETCH_ASSOC);
          foreach($registros as $option) {
          ?> 
          <option value="<?php echo $option['id_dep']?>"><?php echo $option['dependencia']?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="entidade">Entidade:</label>
        <select name="select-entidade" id="select-entidade" class="form-control">
          <option selected>Selecione...</option>
          <?php
          $query = $conn->query("SELECT id_ent, entidade FROM cad_ent");
          $registros = $query->fetchAll(PDO::FETCH_ASSOC);
          foreach($registros as $option) {
          ?> 
          <option value="<?php echo $option['id_ent']?>"><?php echo $option['entidade']?></option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="credenciamento">Credênciamento:</label>
        <input type="number" class="form-control" name="input-credenciamento" id="input-credenciamento" placeholder="Somente números">
      </div>
      <div class="form-group col-md-2">
        <label for="validade-credenciamento">Val. Credênciamento:</label>
        <input type="date" class="form-control" name="input-val-credenciamento" id="input-val-credenciamento">
      </div>
      <div class="form-group col-md-4">
        <label for="recredenciamento">Recredênciamento:</label>
        <input type="number" class="form-control" name="input-recredenciamento" id="input-recredenciamento" placeholder="Somente números">
      </div>
      <div class="form-group col-md-2">
        <label for="validade-recredenciamento">Val. Recredênciamento:</label>
        <input type="date" class="form-control" name="input-val-recredenciamento" id="input-val-recredenciamento">
      </div>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
  </form>
</div>
