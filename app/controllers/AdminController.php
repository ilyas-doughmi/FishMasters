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

    public function competitions_edit()
    {
        require_once 'app/core/Database.php';
        require_once 'app/models/CompetitionModel.php';
        require_once 'app/models/ScoringRulesModel.php';

        $db = Database::getInstance();

        $competitionModel = new CompetitionModel($db);
        $ruleModel = new ScoringRulesModel($db);


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editId'])) {
            $result = $competitionModel->getCompetitionById($_POST['editId']);
        }

        $rules = $ruleModel->showRules();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {

            $competitionModel->setName($_POST['name']);
            $competitionModel->setType($_POST['type']);
            $competitionModel->setCategory($_POST['category']);
            $competitionModel->setLocation($_POST['location']);
            $competitionModel->setStartDate($_POST['startDate']);
            $competitionModel->setEndDate($_POST['endDate']);
            $competitionModel->setStatus($_POST['editstatus']);

            if ($competitionModel->updateCompetition($_POST['editIdAfter'])) {
                header('Location: index.php?url=admin/competitions');
                exit;
            }
        }

        require_once 'app/views/admin/competitions/edit.php';
    }

    public function competitions_delete()
    {
        require_once 'app/core/Database.php';
        require_once 'app/models/CompetitionModel.php';
        require_once 'app/models/ScoringRulesModel.php';

        $db = Database::getInstance();

        $competitionModel = new CompetitionModel($db);
        $ruleModel = new ScoringRulesModel($db);
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idClose'])) {
            $result = $competitionModel->close($_POST['idClose']);
            if ($result) {
                header('Location: index.php?url=admin/competitions');
                exit;
            }
        }
        require_once 'app/views/admin/competitions';
    }

    public function rules()
    {
        require_once('app/core/Database.php');
        require_once('app/models/ScoringRulesModel.php');

        $db = Database::getInstance();
        $ScoringRulesModel = new ScoringRulesModel($db);
        $ScoringRules = $ScoringRulesModel->showRules();

        require_once('app/views/admin/rules/index.php');
    }

    public function rules_add()
    {
        require_once 'app/views/admin/rules/add.php';
    }

    public function rules_create()
    {

        require_once('app/core/Database.php');
        require_once('app/models/ScoringRulesModel.php');

        $db = Database::getInstance();

        $rule = new ScoringRulesModel($db);
        $rule->setName($_POST['ruleName']);
        $rule->setDescription($_POST['ruleDescription']);

        if ($rule->addRule()) {
            header('Location: /fishmasters/admin/rules');
            exit;
        }
    }

    public function rules_edit()
    {
        require_once('app/core/Database.php');
        require_once('app/models/ScoringRulesModel.php');

        $db = Database::getInstance();

        $rule = new ScoringRulesModel($db);
        $rule = $rule->getRuleById((int) $_POST['editId']);

        require_once 'app/views/admin/rules/edit.php';
    }

    public function rules_update()
    {
        require_once('app/core/Database.php');
        require_once('app/models/ScoringRulesModel.php');

        $db = Database::getInstance();

        $rule = new ScoringRulesModel($db);
        $rule->setName($_POST['ruleName']);
        $rule->setDescription($_POST['ruleDescription']);

        if ($rule->editRule((int) $_POST['ruleId'])) {
            header('Location: /fishmasters/admin/rules');
            exit;
        }
    }

    public function rules_delete()
    {
        require_once('app/core/Database.php');
        require_once('app/models/ScoringRulesModel.php');

        $db = Database::getInstance();

        $rule = new ScoringRulesModel($db);

        if ($rule->deleteRule((int) $_POST['ruleId'])) {
            header('Location: /fishmasters/admin/rules');
            exit;
        }
    }

    public function species()
    {
        require_once('app/core/Database.php');
        require_once('app/models/SpeciesModel.php');

        $db = Database::getInstance();
        $SpeciesModel = new SpeciesModel($db);
        $SpeciesModel = $SpeciesModel->getAll();

        require_once('app/views/admin/species/index.php');
    }

    public function species_add()
    {
        require_once('app/views/admin/species/add.php');
    }
    public function species_edit()
    {
        require_once('app/core/Database.php');
        require_once('app/models/SpeciesModel.php');

        $db = Database::getInstance();
        $id = (int) $_POST['speciesId'];

        $speciesModel = new SpeciesModel($db);
        $species = $speciesModel->getById($id);


        require_once 'app/views/admin/species/edit.php';
    }

    public function species_update()
    {

        require_once('app/core/Database.php');
        require_once('app/models/SpeciesModel.php');

        $db = Database::getInstance();
        $id = (int) $_POST['speciesId'];

        $speciesModel = new SpeciesModel($db);
        $speciesModel->setName($_POST['speciesName']);
        $speciesModel->setMinSize($_POST['speciesMinSize']);
        $speciesModel->setCoefficient($_POST['coefficient']);

        $speciesModel->update($id);

        header('Location: /fishmasters/index.php?url=Admin/species');
        exit;
    }

    public function species_delete()
    {
        require_once('app/core/Database.php');
        require_once('app/models/SpeciesModel.php');

        $db = Database::getInstance();
        $id = (int) $_POST['speciesId'];

        $speciesModel = new SpeciesModel($db);
        $speciesModel->delete($id);

        header('Location: /fishmasters/index.php?url=Admin/species');
        exit;
    }
    public function species_create()
    {
        require_once('app/core/Database.php');
        require_once('app/models/SpeciesModel.php');

        $db = Database::getInstance();

        $speciesModel = new SpeciesModel($db);
        $speciesModel->setName($_POST['speciesName']);
        $speciesModel->setMinSize($_POST['speciesMinSize']);
        $speciesModel->setCoefficient($_POST['coefficient']);

        $speciesModel->create();

        header('Location: /fishmasters/index.php?url=Admin/species');
        exit;
    }



    public function catches_pending()
    {
        require_once('app/core/Database.php');
        require_once('app/models/CatchModel.php');

        $db = Database::getInstance();
        $CatchModel = new CatchFish($db);
        $catches = $CatchModel->getPending();

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
        require_once('app/core/Database.php');
        require_once('app/models/FisherModel.php');

        $db = Database::getInstance();
        $FisherModel = new Fisher($db);
        $allFishers = $FisherModel->show();
        require_once('app/views/admin/fishers/index.php');
    }

    // Show single fisher details
    public function fishers_show($id)
    {
        require_once('app/core/Database.php');
        require_once('app/models/FisherModel.php');

        $db = Database::getInstance();
        $FisherModel = new Fisher($db);
        $fisher = $FisherModel->getById($id);
        require_once('app/views/admin/fishers/show.php');
    }

    public function moderation_comments()
    {
        require_once('app/views/admin/moderation/comments.php');
    }
}