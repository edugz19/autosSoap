<?php 
    
      $url = $_POST['link'];
      $link = 'https://www.youtube.com/embed/' . $url;

?>

<div class="video">
      <div class="header">
            <h5>Demo Video</h5>
            <button type='button' class='btn-close' onclick="closeVideo()"></button> 
      </div>
      <iframe 
            id="iframe"
            src='<?= $link ?>' 
            width='600px' 
            height='500px'  
            title='YouTube video player' 
            frameborder='0' 
            allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' 
            allowfullscreen>
      </iframe>
</div>

      