
<br>
<h1>Álbum</h1>
<a href="?page=newalbum" class="btn btn-success">Adicionar novo Álbum</a>
<hr>

<div class="row">
    <?php
        $albuns = getAlbuns();

        
        foreach ($albuns as $album):

            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = $album . '/' .$nameAlbum . '.jpg';
    ?>
    <div class="col-3 album">
        <a href="?page=musics&album=<?=$nameAlbum?>">
            <div class="card">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class= "img-album">
            <h4><?=$nameAlbum?></h4>
            </div>
        </a>
    </div>
    <?php
    endforeach;
    ?>
</div>