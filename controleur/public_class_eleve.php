<?php
class Personne
{
    Private $Nom, $mdp;
    Private $photo,$classe;




    public function __construct()
    {
        $this->Nom = "";
        $this->mdp = "";
        $this->photo = 0;
        $this->classe="";
    }

    public function renseigner($tab)
    {
        $this->Nom = $tab["Nom"];
        $this->mdp = $tab["mdp"];
        $this->photo = $tab["photo"];
        $this->classe =$tab["classe"];
    }

    public function serialiser()
    {
        $tab = array();
        $tab["Nom"] = $this->Nom;
        $tab["mdp"] = $this->mdp;
        $tab["photo"] = $this->photo;
        $tab["classe"]= $this->classe;
        return $tab;

    }

    /**
     * @return string
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param string $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    public function getmdp()
    {
        return $this->mdp;
    }

    public function setmdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function getphoto()
    {
        return $this->photo;
    }

    public function setphoto($photo)
    {
        $this->photo = $photo;
    }

}
?>