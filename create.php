<?php 
  include_once("./templates/header.php"); 
?>

  <div class="container">
    <?php include_once("./templates/backBtn.php"); ?>
    <h1 id="main-title">Criar contato</h1>
    <form id="create-form" action="<?php echo $BASE_URL; ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
      </div>
      <div class="form-group">
        <label for="observation">Observações</label>
        <textarea class="form-control" id="observation" name="observation" rows="3" placeholder="Insira as observações"></textarea>
      </div>
      <button id="btn-cadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

<?php 
  include_once("./templates/footer.php") 
?>