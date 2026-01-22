<?php


class AdminController
{

    public function index()
    {
        require_once('app/views/admin/dashboard.php');
    }

    public function competitions()
    {
        require_once('app/core/Database.php');
        require_once('app/models/CompetitionModel.php');

        $db = Database::getInstance();
        $competitionModel = new CompetitionModel($db);
        $competitions = $competitionModel->listCompetition();

        require_once('app/views/admin/competitions/index.php');
    }

    public function competitions_add()
    {
        require_once('app/core/Database.php');
        require_once('app/models/ScoringRulesModel.php');
        $db = Database::getInstance();
        $ruleModel = new ScoringRulesModel($db);
        $rules = $ruleModel->showRules();
        require_once('app/views/admin/competitions/add.php');
    }

    public function competitions_show()
    {
        require_once('app/core/Database.php');
        require_once('app/models/CompetitionModel.php');

        $db = Database::getInstance();
        $competitionModel = new CompetitionModel($db);
        $competitions = $competitionModel->listCompetition();

        require_once('app/views/admin/competitions/show.php');
    }
    public function competitions_create()
    {
        require_once 'app/core/Database.php';
        require_once 'app/models/CompetitionModel.php';
        require_once 'app/models/ScoringRulesModel.php';

        $db = Database::getInstance();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $competition = new CompetitionModel($db);

            $competition->setName($_POST['name']);
            $competition->setType($_POST['type']);
            $competition->setCategory($_POST['category']);
            $competition->setLocation($_POST['location']);
            $competition->setStartDate($_POST['startDate']);
            $competition->setEndDate($_POST['endDate']);
            $competition->setStatus('notStarted');

            if ($competition->createCompetition()) {
                header('Location: index.php?url=admin/competitions');
                exit;
            }
        }

        $ruleModel = new ScoringRulesModel($db);
        $rules = $ruleModel->showRules();

        require_once 'app/views/admin/competitions/add.php';
    }



    public function rules()
    {
        require_once('app/views/admin/rules/index.php');
    }

    public function rules_add()
    {
        require_once('app/views/admin/rules/add.php');
    }

    public function species()
    {
        require_once('app/views/admin/species/index.php');
    }

    public function species_add()
    {
        require_once('app/views/admin/species/add.php');
    }

    public function catches_pending()
    {
        require_once('app/views/admin/catches/pending.php');
    }

    public function catches_review()
    {
        require_once('app/views/admin/catches/review.php');
    }

    public function rankings_competition()
    {
        require_once('app/views/admin/rankings/competition.php');
    }

    public function fishers()
    {
        require_once('app/views/admin/fishers/index.php');
    }

    public function fishers_show()
    {
        require_once('app/views/admin/fishers/show.php');
    }

    public function moderation_comments()
    {
        require_once('app/views/admin/moderation/comments.php');
    }
}
