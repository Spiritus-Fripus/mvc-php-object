<?php

require '../models/TrackManager.php';

class TrackController
{
    private TrackManager $trackManager;

    public function __construct()
    {
        $this->trackManager = new TrackManager();
    }


    public function index()
    {
        $tracks = $this->trackManager->getAllTracks();

        $template = '../views/track/index.html.php';
        require '../views/layout.html.php';
    }
}
