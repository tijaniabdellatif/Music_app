<?php


class Album {


    public $id_album;
    public $title;
    public $artist_id;
    public $genre_id;
    public $artwok;
    public $artistname;
    public $gendername;

    public function __construct($id_album)
    {
       global $db;
        $reqAlbum= $db->prepare('
        
           SELECT a.* , ar.name,g.name AS genre
           FROM albums a 
           INNER JOIN artists ar ON ar.id_artist = a.artist_id
           INNER JOIN genres g ON g.id_genre = a.genre_id
           WHERE a.id_album = ?
        ');

        $reqAlbum->execute([$id_album]);
        $data = $reqAlbum->fetch();

        $this->id_album = $id_album;
        $this->title = $data['title'];
        $this->artist_id = $data['artist_id'];
        $this->genre_id = $data['genre_id'];
        $this->artwok = $data['artwokpath'];
        $this->artistname = $data['name'];
        $this->gendername = $data['genre'];

    }

    static function getAllAlbums()
    {

        global $db;
        $reqAlbums = $db->prepare('
        
          SELECT a.* , ar.name,g.name AS genre
           FROM albums a 
           INNER JOIN artists ar ON ar.id_artist = a.artist_id
           INNER JOIN genres g ON g.id_genre = a.genre_id
        ');
        $reqAlbums->execute([]);
        return $reqAlbums->fetchAll(PDO::FETCH_ASSOC);
    }

    static function getRandAlbums()
    {

        global $db;
        $reqAlbums = $db->prepare('
        
          SELECT a.* , ar.name,g.name AS genre
           FROM albums a 
           INNER JOIN artists ar ON ar.id_artist = a.artist_id
           INNER JOIN genres g ON g.id_genre = a.genre_id
           ORDER BY RAND() LIMIT 10
        ');
        $reqAlbums->execute([]);
        return $reqAlbums->fetchAll(PDO::FETCH_ASSOC);
    }
}