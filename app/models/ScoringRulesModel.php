<?php

class ScoringRulesModel
{
    private int $id;
    private string $name;
    private string $description;

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getId(): int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function showRules(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM rules");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addRule(): bool
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO rules (ruleName, ruleDescription)
             VALUES (:name, :description)"
        );

        return $stmt->execute([
            ':name' => $this->name,
            ':description' => $this->description
        ]);
    }

    public function editRule(int $id): bool
    {
        $stmt = $this->pdo->prepare(
            "UPDATE rules
             SET rulename = :name,
                 ruledescription = :description
             WHERE ruleid = :id"
        );

        return $stmt->execute([
            ':name' => $this->name,
            ':description' => $this->description,
            ':id' => $id
        ]);
    }

    public function deleteRule(int $id): bool
    {
        $stmt = $this->pdo->prepare(
            "DELETE FROM rules WHERE ruleId = :id"
        );

        return $stmt->execute([
            ':id' => $id
        ]);
    }


    public function getRuleById(int $id)
    {
        $stmt = $this->pdo->prepare(
            "SELECT * FROM rules WHERE ruleId = :id"
        );
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function getAllRules()
    {
        $stmt = $this->pdo->query("SELECT * FROM rules ORDER BY ruleId DESC");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}