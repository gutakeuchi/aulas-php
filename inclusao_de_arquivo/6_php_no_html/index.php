<?php

    include_once "backend.php";

?>

<h1>Seja bem-vindo ao nosso site!</h1>
<p><?= $nome; ?> veja as nossas ofertas</p>

<h2>Confira os nossos principais produtos: </h2>
<ul>
    <?php foreach($produtos as $p) :?>
     <li><?= $p; ?></li>   
    <?php endforeach; ?>    
</ul>