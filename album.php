<?php include 'includes/partials/header.php'; ?>

<?php

if (isset($_GET['id'])) {

    $albumid = $_GET['id'];
} else {

    header("Location: index.php");
}

?>

<?php
$Singlealbum = new Album($albumid);
$Songs = Songs::getSongs();
$total = Songs::getNumberSongAlbum($Singlealbum->artist_id);
$getSongid = Songs::getSongId($albumid);
?>

<div class="entity-info">

    <div class="left-section">

        <img src="<?= $Singlealbum->artwok; ?>" class="img">

    </div>
    <div class="right-section">
        <h2>
            <?= $Singlealbum->title; ?>
        </h2>
        <p>by <?= $Singlealbum->artistname ?></p>
        <p><?= $total; ?><span> Songs </span></p>

    </div>

</div>

<div class="track-list-container">
    <ul class="tracklist">

        <?php $i = 1 ?>
        <?php foreach ($getSongid as $index => $ids) : ?>
            <?php $list = new Songs($ids['id_song']); ?>

            <li class="tracklist-row">
                <div class="track-count">
                    <img class="play" src="assets/images/icons/play-white.png">
                    <span class="tracknumber"><?= $i; ?></span>
                </div>

                <div class="track-info">
                    <span class="track-name"> <?= $list->title ?></span>
                    <span class="artist-name"><?= $list->artistname; ?></span>
                </div>

                <div class="track-options">
                    <img class="options-btn" src="assets/images/icons/more.png">
                </div>

                <div class="track-duration">
                    <span class="duration"><?= $list->duration; ?></span>

                </div>
            </li>
            <?php $i++; ?>
        <?php endforeach; ?>


    </ul>
</div>

<?php include 'includes/partials/footer.php';  ?>