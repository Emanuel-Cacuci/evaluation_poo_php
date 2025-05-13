<h1>Créez le Model destiné à un site de vente de vêtements. 
Les vêtements seront définis par un id, un nom, une catégorie et un prix.  
Typez toutes les propriétés et méthodes de la classe. </h1>


<?php

// Class parent (Model)

abstract class Model{
 
    protected int $id;
    protected string $nom;
    protected string $categorie;
    protected float $prix;

    public function __construct(int $id,string $nom, string $categorie, float $prix)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->prix = $prix;

    }

}

// Class enfant qui hérite de la classe parent (Model)

class Vetments extends Model{

public function afficherProduits(): void
{
    
        echo "L'id : $this->id <br> Nom : $this->nom <br> Categorie : $this->categorie <br> Prix : $this->prix €";
        
}

}

// Class enfant qui hérite de la classe parent (Model)

class Voiture extends Model{

    
    public function afficherProduits(): void
    {
        
         echo "L'id : $this->id <br> Nom : $this->nom <br> Categorie : $this->categorie <br> Prix : $this->prix €";
        
    }
}

$vetments=new Vetments(0,"Chemise", "Vetment", 20);
$vetments->afficherProduits();
echo "<br><br>";
$voiture=new Voiture(1,"Golf", "Voiture", 5600);
$voiture->afficherProduits();


// pas de getter et setter dans class model
//12/20
?>