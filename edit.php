<?php 
  include_once("./templates/header.php"); 
?>

  <div class="container">
    <?php include_once("./templates/backBtn.php"); ?>
    <h1 id="main-title">Editar contato</h1>
    <form id="edit-form" action="<?php echo $BASE_URL; ?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
      <input type="hidden" name="id" value="<?php echo $contact["id"]; ?>">
      <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $contact["name"]; ?>" required>
      </div>
      <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $contact["phone"]; ?>" required>
      </div>
      <div class="form-group">
        <label for="observation">Observações</label>
        <textarea class="form-control" id="observation" name="observation" rows="3"><?php echo $contact["observation"]; ?></textarea>
      </div>
      <button id="btn-cadastrar" type="submit" class="btn btn-primary">Atualizar</button>
    </form>
  </div>

<?php 
  include_once("./templates/footer.php") 
?>