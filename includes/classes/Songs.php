<?php 



class Songs {

    public $id_song;
    public $title;
    public $artist_id;
    public $album_id;
    public $genre_id;
    public $duration;
    public $path;
    public $albumorder;
    public $plays;
    public $artistname;
    public $gendername;
    public $album_title;

    public function __construct($id_song)
    {
        global $db;
        $reqSong = $db->prepare('
        
           SELECT s.* , a.name,g.name AS genre,al.title AS album_title
           FROM songs s 
           INNER JOIN artists a ON a.id_artist = s.artist_id
           INNER JOIN genres g ON g.id_genre = s.genre_id
           INNER JOIN albums al ON al.id_album = s.album_id
           WHERE s.id_song = ?
        ');

        $reqSong->execute([$id_song]);
        $data = $reqSong->fetch();

        $this->id_song = $id_song;
        $this->title = $data['title'];
        $this->artist_id = $data['artist_id'];
        $this->album_id = $data['album_id'];
        $this->genre_id = $data['genre_id'];
        $this->duration = $data['duration'];
        $this->path = $data['path'];
        $this->albumorder = $data['albumOrder'];
        $this->plays = $data['plays'];
        $this->artistname = $data['name'];
        $this->gendername = $data['genre'];
        $this->album_title = $data['album_title'];
    }

    static function getSongs()
    {

        global $db;
        $reqAllsongs = $db->prepare('
        
          SELECT s.* , a.name,g.name AS genre,al.title AS album_title
           FROM songs s 
           INNER JOIN artists a ON a.id_artist = s.artist_id
           INNER JOIN genres g ON g.id_genre = s.genre_id
           INNER JOIN albums al ON al.id_album = s.album_id
        ');
        $reqAllsongs->execute([]);
        return $reqAllsongs->fetchAll(PDO::FETCH_ASSOC);
    }


   static function getNumberSongAlbum($id){

        global $db;

        $reqAllsongs = $db->prepare("
        
          SELECT id_song FROM songs s 
           WHERE artist_id = ?
        ");
        $reqAllsongs->execute([$id]);
        $reqAllsongs->fetchAll(PDO::FETCH_ASSOC);
        return $reqAllsongs->rowCount();
        
    }

    static function getSongId($id){

          global $db;

        $reqAllsongs = $db->prepare("
        
          SELECT id_song FROM songs  
           WHERE album_id = ?
           ORDER BY albumOrder ASC
        ");
        $reqAllsongs->execute([$id]);
        return $reqAllsongs->fetchAll(PDO::FETCH_ASSOC);

    }



}