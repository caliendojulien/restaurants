<?php

class Restaurant
{
    private int $idRestaurant;
    private string $nom;
    private string $adresse;
    private string $cp;
    private string $ville;
    private string $telephone;
    private string $description;

    public function __construct(int $idRestaurant, string $nom, string $adresse, string $cp, string $ville, string $telephone, string $description)
    {
        $this->idRestaurant = $idRestaurant;
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->telephone = $telephone;
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getIdRestaurant(): int
    {
        return $this->idRestaurant;
    }

    /**
     * @param int $idRestaurant
     */
    public function setIdRestaurant(int $idRestaurant): void
    {
        $this->idRestaurant = $idRestaurant;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getCp(): string
    {
        return $this->cp;
    }

    /**
     * @param string $cp
     */
    public function setCp(string $cp): void
    {
        $this->cp = $cp;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return string
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}