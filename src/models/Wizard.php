<?PHP
namespace src\Entity;
//require ('../../vendor/autoload.php');

class Wizard {
   private $name = "Wizard";

   // Compétences du personnage
   private $skill = array("boule de feu", "foudre", "soin"); 
   // Armes disponibles
   private $Weapons = array("Bâton", "Dague", "Épée"); 
   // Statistiques de santé, de mana et de force
   private $stats = array("santé" => 100, "mana" => 50, "force" => 20); 


   
   


   

   /**
    * Get the value of name
    */ 
   public function getName()
   {
      return $this->name;
   }

   /**
    * Set the value of name
    *
    * @return  self
    */ 
   public function setName($name)
   {
      $this->name = $name;

      return $this;
   }
}
