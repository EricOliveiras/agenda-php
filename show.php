<?php 
  include_once("./templates/header.php");
?>

  <div class="container" id="view-contact-container">
    <?php include_once("./templates/backBtn.php"); ?>
    <h1 id="main-title"><?php echo $contact["name"]; ?></h1>
    <p class="bold">Telefone</p>
    <p><?php echo $contact["phone"]; ?></p>
    <p class="bold">Observações</p>
    <p><?php echo $contact["observation"]; ?></p>
  </div>

<?php 
  include_once("./templates/footer.php"); 
?>
