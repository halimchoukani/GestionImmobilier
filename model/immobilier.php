<?php
class immobilier
{
    private $reference;
    private $proprietaire;
    private $localite;
    private $nbpiece;
    private $domaineUsage;
    private $nature;
    private $nbEtage;
    private $surface;

    public function __construct($reference, $proprietaire, $localite, $nbpiece, $domaineUsage, $nature, $nbEtage, $surface)
    {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->nbpiece = $nbpiece;
        $this->domaineUsage = $domaineUsage;
        $this->nature = $nature;
        $this->nbEtage = $nbEtage;
        $this->surface = $surface;
    }
    public function getReference()
    {
        return $this->reference;
    }
    public function getProprietaire()
    {
        return $this->proprietaire;
    }
    public function getLocalite()
    {
        return $this->localite;
    }
    public function getNbpiece()
    {
        return $this->nbpiece;
    }
    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }
    public function getNature()
    {
        return $this->nature;
    }
    public function getNbEtage()
    {
        return $this->nbEtage;
    }
    public function getSurface()
    {
        return $this->surface;
    }
    public function setReference($reference)
    {
        $this->reference = $reference;
    }
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;
    }
    public function setLocalite($localite)
    {
        $this->localite = $localite;
    }
    public function setNbpiece($nbpiece)
    {
        $this->nbpiece = $nbpiece;
    }
    public function setDomaineUsage($domaineUsage)
    {
        $this->domaineUsage = $domaineUsage;
    }
    public function setNature($nature)
    {
        $this->nature = $nature;
    }
    public function setNbEtage($nbEtage)
    {
        $this->nbEtage = $nbEtage;
    }
    public function setSurface($surface)
    {
        $this->surface = $surface;
    }
}
