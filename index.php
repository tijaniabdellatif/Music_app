<?php include 'includes/partials/header.php';  ?>


<h1 class="Heading">You Might Also Like</h1>

<div class="grid_view">

    <?php
    $allAlbums = Album::getRandAlbums();
    ?>

    <?php foreach ($allAlbums as $index => $album) : ?>
        <?php  $id = $album['id_album'] ?>

        <div class="grid-items">

          <?php echo "<a href='album.php?id=".$album['id_album']."'>" ?>  
                <img src="<?php echo $album['artwokpath'] ?>">

                <div class="grid-info">

                    <?= $album['title'];  ?>

                </div>

            </a>

        </div>

    <?php endforeach; ?>

</div>

<?php include 'includes/partials/footer.php';  ?>