<?php

  $pessoas = [
    'Elvis' => '19',
    'João' => 20,
    'Roberto' => 33,
    'Carlos' => 40
  ];

?>

<table border='1'>
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <tr>
    <?php foreach($pessoas as $nome => $idade): ?>
      <tr>
        <td> <?= $nome; ?> </td>
        <td> <?= $idade; ?> </td>
      </tr>
    <?php endforeach; ?>
  </tr>
</table>