<?php

class SpeciesModel
{
    private int $id;
    private string $name;
    private float $minSize;
    private float $coefficient;

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

        $result = $stmt->fetch();
        return $result;
    }


    public function update(Species $species): bool
    {
        $sql = "UPDATE species
                SET speciesname = :name,
                    speciesminsize = :minsize,
                    coefficient = :coef
                WHERE speciesid = :id";

        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':name'    => $species->speciesname,
            ':minsize' => $species->speciesminsize,
            ':coef'    => $species->coefficient,
            ':id'      => $species->speciesid
        ]);
    }

    
    public function delete(int $id): bool
    {
        $sql = "DELETE FROM species WHERE speciesid = :id";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([':id' => $id]);
    }


    // new

    //show speicies edit add delete // OUSASMAA
}
