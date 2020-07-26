<?php 


class Artist{

    public $id_artist;
    public $name;

    function __construct($id_artist)
    {

        global $db;

        $reqArtist = $db->prepare('SELECT * FROM artists WHERE id_artist = ?');
        $reqArtist->execute([$id_artist]);
        $data = $reqArtist->fetch();

        $this->id_artist = $id_artist;
        $this->name = $data['name'];
    }

    static function getArtists()
    {

        global $db;

        $reqartists = $db->prepare('SELECT * FROM artists');
        $reqartists->execute([]);
        return $reqartists->fetchAll(PDO::FETCH_ASSOC);
    }

}