<?php
require_once "config/connection.php";
require_once "model/immobilier.php";
class CrudImmobilier
{
    public $pdo;
    public $db;
    public function __construct()
    {
        $this->db = new connection();
        $this->pdo = $this->db->getConnection();
    }
    public function addImmobilier($immobilier)
    {
        $req = "INSERT INTO immobilier(reference,proprietaire,localite,nbpiece,domaineUsage,nature,nbEtage,surface) VALUES({$immobilier->getReference()},
        {$immobilier->getProprietaire()},
        {$immobilier->getLocalite()},
        {$immobilier->getNbpiece()},
        {$immobilier->getDomaineUsage()},
        {$immobilier->getNature()},
        {$immobilier->getNbEtage()},
        {$immobilier->getSurface()})";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
    public function getAllImmobilier()
    {
        $req = "SELECT * FROM immobilier";
        $stmt = $this->pdo->prepare($req);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_NUM);
    }
    public function getImmobilier($reference)
    {
        $req = "SELECT * FROM immobilier WHERE reference={$reference}";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
    public function updateImmobilier($immobilier)
    {
        $req = "UPDATE immobilier SET proprietaire={$immobilier->getProprietaire()},
        localite={$immobilier->getLocalite()},
        nbpiece={$immobilier->getNbpiece()},
        domaineUsage={$immobilier->getDomaineUsage()},
        nature={$immobilier->getNature()},
        nbEtage={$immobilier->getNbEtage()},
        surface={$immobilier->getSurface()} WHERE reference={$immobilier->getReference()}";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
    public function deleteImmobilier($reference)
    {
        $req = "DELETE FROM immobilier WHERE reference={$reference}";
        $stmt = $this->pdo->exec($req);
        return $stmt;
    }
}
