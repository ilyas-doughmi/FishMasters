<?php

class SpeciesModel
{
    private int $id;
    private string $name;
    private float $minSize;
    private float $coefficient;

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
    public function getMinSize(): float
    {
        return $this->minSize;
    }
    public function getCoefficient(): float
    {
        return $this->coefficient;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setMinSize(float $minSize): void
    {
        $this->minSize = $minSize;
    }
    public function setCoefficient(float $coefficient): void
    {
        $this->coefficient = $coefficient;
    }


    public function getAll()
    {
        $sql = "SELECT * FROM species ORDER BY speciesid";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }


    public function getById(int $id)
    {
        $sql = "SELECT * FROM species WHERE speciesid = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }


    public function update(int $id): bool
    {
        $sql = "UPDATE species
                SET speciesname = :name,
                    speciesminsize = :minsize,
                    coefficient = :coef
                WHERE speciesid = :id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':name'    => $this->name,
            ':minsize' => $this->minSize,
            ':coef'    => $this->coefficient,
            ':id'      => $id
        ]);
    }


    public function delete(int $id): bool
    {
        $sql = "DELETE FROM species WHERE speciesid = :id";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([':id' => $id]);
    }

    public function create(): bool
    {
        $sql = "INSERT INTO species (speciesName, speciesMinSize, coefficient)
            VALUES (:name, :minsize, :coef)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':name'    => $this->name,
            ':minsize' => $this->minSize,
            ':coef'    => $this->coefficient
        ]);
    }

    // new

    //show speicies edit add delete // OUSASMAA
}
