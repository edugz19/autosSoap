<?php

      include 'client.php';
    
      $marca = $_POST['marca'];

      $modelos = $client->ObtenerModelosPorMarca($marca);

?>

<div class="modal-element">
      <div class="header">
            <h5><?= $marca ?> models</h5>
            <button type='button' class='btn-close' onclick="closeModal()"></button>
      </div>
      <div>

      <?php
            foreach ($modelos as $modelo) {
      ?>
      
            <a class='btn btn-secondary m-2 p-4'><?= $modelo ?></a>

      <?php
            }
      ?>

      </div>
</div>