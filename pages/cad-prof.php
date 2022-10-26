<style>
  body {
    max-width: 100%;
    overflow-x: hidden;
    background-image: url(img/bg-body.png);
    background-size: 100%;
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
    <h1>Cadastrar Professor(a)</h1>
  </div>
  <hr>
  <div class="container shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-prof" method="POST" enctype="multipart/form-data">
      <input type="hidden"  name="acao" value="cadastrar">
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" name="input-nome" id="input-nome" placeholder="Fulano de Tal">
        </div>
        <div class="form-group col-md-3">
          <label for="nascimento">Data de Nascimento:</label>
          <input type="date" class="form-control" name="input-nascimento" id="input-nascimento">
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-3">
          <label for="naturalidade">Naturalidade:</label>
          <select name="select-naturalidade" id="select-naturalidade" class="form-control">
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
        <div class="form-group col-md-3">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" name="input-cpf" id="input-cpf" onkeypress="$(this).mask('000.000.000-00')" placeholder="123.456.789-12">
        </div>
        <div class="form-group col-md-3">
          <label for="rg">RG:</label>
          <input type="text" class="form-control" name="input-rg" id="input-rg" maxlength="15" placeholder="1234567890">
        </div>
        <div class="form-group col-md-3">
          <label for="orgao">Órgão Expedidor:</label>
          <select name="select-orgao" id="select-orgao" class="form-control">
            <option selected>Selecione...</option>
            <?php
            $query = $conn->query("SELECT id_orgao, orgao FROM cad_orgao");
            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($registros as $option) {
            ?> 
            <option value="<?php echo $option['id_orgao']?>"><?php echo $option['orgao']?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="endereco">Endereço:</label>
          <input type="text" class="form-control" name="input-endereco" id="input-endereco" placeholder="Rua dos Bobos">
        </div>
        <div class="form-group col-md-1">
          <label for="numero">Nº:</label>
          <input type="text" class="form-control" name="input-numero" id="input-numero" placeholder="0">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="celular">Celular:</label>
          <input type="text" class="form-control" name="input-celular" id="input-celular" onkeypress="$(this).mask('(00) 00000-0000')" placeholder="(00) 00000-0000">
        </div>
        <div class="form-group col-md-3">
          <label for="fixo">Telefone Fixo:</label>
          <input type="text" class="form-control" name="input-fixo" id="input-fixo" onkeypress="$(this).mask('(00) 0000-0000')" placeholder="(00) 0000-0000">
        </div>
        <div class="form-group col-md-6">
          <label for="email">E-mail:</label>
          <input type="email" class="form-control" name="input-email" id="input-email" placeholder="fulanodetal@email.com.br">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="mae">Mãe:</label>
          <input type="text" class="form-control" name="input-mae" id="input-mae" placeholder="Nome completo da mãe">
        </div>
        <div class="form-group col-md-6">
          <label for="pai">Pai:</label>
          <input type="text" class="form-control" name="input-pai" id="input-pai" placeholder="Nome completo do pai">
        </div>
      </div>
      <div class="form-row mb-3">
      <div class="form-group col-md-6">
          <label for="habilitacao">Habilitação:</label>
          <select name="select-habilitacao" id="select-habilitacao" class="form-control">
            <option selected>Selecione...</option>
            <?php
            $query = $conn->query("SELECT id_hab, habilitacao FROM cad_hab");
            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($registros as $option) {
            ?> 
            <option value="<?php echo $option['id_hab']?>"><?php echo $option['habilitacao']?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="niv-hab">Nivel da Habilitação:</label>
          <select name="select-niv-hab" id="select-niv-hab" class="form-control">
            <option selected>Selecione...</option>
            <?php
            $query = $conn->query("SELECT id_niv_hab, niv_hab FROM cad_niv_hab");
            $registros = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($registros as $option) {
            ?> 
            <option value="<?php echo $option['id_niv_hab']?>"><?php echo $option['niv_hab']?></option>
            <?php
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-2">
          <img src="img/profile.png" width="200px" class="img-thumbnail" alt="foto-prof">
        </div>
        <div class="custom-file col">
          <input type="file" class="custom-file-input" name=input-foto id="input-foto">
          <label class="custom-file-label" for="foto">Foto</label>
        </div>
      </div>
      <button type="submit" class="btn btn-lg btn-success">Salvar</button>
    </form>
  </div>
</body>