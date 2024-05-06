<?php

require '../models/ArtistManager.php';

class ArtistController
{

    private ArtistManager $artistManager;

    public function __construct()
    {
        $this->artistManager = new ArtistManager();
    }

    public function index()
    {
        $artists = $this->artistManager->getAllArtists();

        $template = '../views/artist/index.html.php';
        require '../views/layout.html.php';
    }

    // GET & POST
    public function create()
    {
        // on verifie que le formulaire est bien envoyé grace au name du bouton
        if (isset($_POST['create_artist_submit'])) {

            if (!empty($_POST['artist']['name'])) {

                // on appel la fonction du manager pour insérer les donées en bdd
                if ($this->artistManager->addArtist($_POST['artist'])) {


                    header('Location: /?controller=artist&action=index');
                    exit;
                }
            }
        }
        $template = '../views/artist/create.html.php';
        require '../views/layout.html.php';
    }
}
