<?php

class FisherController {
    
    public function index() {
        require_once('app/views/fisher/dashboard.php');
    }

    public function catches_add($fisherId, SpeciesModel $specie) {
        require_once('app/models/CatchModel.php');
        require_once('app/models/SpeciesModel.php');
        $catch= new Catch();
        $catch->addCatch($fisherId, SpeciesModel $specie);
        require_once('app/views/fisher/catches/add.php');
    }

    public function vcompetitions() {
        require_once('app/models/CompetitionModel.php');
        $competition= new Competition();
        $competition->listCompetition();
        require_once('app/views/fisher/competitions/index.php');
    }

    public function profile($idandvalue) {
        require_once('app/models/FisherModel.php');
        $fisher= new Fisher();
        $fisher->show($idandvalue);
        require_once('app/views/fisher/profile.php');
    }

    public function classement($competitionId) {
        require_once('app/models/CompetitionModel.php');
        $competition=new Competition();
        $competition->generateRanking($competitionId);
        require_once('app/views/fisher/classement/classement.php');
    }
}
