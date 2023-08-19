<?php

  $arr = [
    'Elvis' => 130,
    'Gabriel' => 104,
    'Murilo' => 80,
    'Felipe' => 110,
    'Bruno' => 99
  ];

  arsort($arr);
?>

<h1>Ranking:</h1>
<ol>
  <?php foreach($arr as $pessoa => $pontos): ?>
    <li><?= $pessoa . ": " . $pontos . " pontos"; ?></li>
  <?php endforeach?>
</ol>