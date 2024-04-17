<div class="titulo">
  <h1>Cadastrar Processo</h1>
</div>
<hr>
<div class="row justify-content-center">
  <div class="container-mini shadow p-3 mb-5 bg-white rounded">
    <form action="?page=salvar-proc" method="POST">
      <input type="hidden" name="acao" value="cadastrar">
      <div class="form-group col-md-4">
        <label for="processo">Nº do Processo:</label>
        <input type="text" class="form-control" name="input-processo" id="input-processo" onkeypress="$(this).mask('000/0000-0')" placeholder="Ex.001/2024-3">
      </div>
      <div class="form-group col-md-12">
        <label for="instituicao">Instituição:</label>
        <select name="select-instituicao" id="select-instituicao" class="form-control mb-3">
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
        <button type="submit" class="btn btn-success">Salvar</button>
      </div> 
    </form>
  </div>    
</div>
