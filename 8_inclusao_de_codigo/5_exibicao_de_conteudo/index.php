<?php

  $nome = "Elvis";
  $sobrenome = "Claudino";

?>

<form action="">
  <div>
    <label for="nome">Nome:</label>
    <!-- <input type="text" name="nome" id="nome" value=" <?php echo $nome ?>"> -->
    <input type="text" name="nome" id="nome" value=" <?= $nome; ?>">
    <input type="text" name="nome" id="nome" value=" <?= $sobrenome; ?>">

    <input type="submit" value="Enviar">
  </div>
</form>