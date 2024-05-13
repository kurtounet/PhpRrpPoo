<?PHP
namespace src\Entity;

require_once '../../vendor/autoload.php';


use src\Entity\Role;

class Player  {
   private string $name;
   private Role $role;
   private int $experiencePoints; 
      public function __construct() {
    //parent::__construct("");
   }

   
   public function getExperiencePoints()
   {
      return $this->experiencePoints;
   }

   /**
    * Set the value of experiencePoints
    *
    * @return  self
    */ 
   public function setExperiencePoints($experiencePoints)
   {
      $this->experiencePoints = $experiencePoints;

      return $this;
   }

   /**
    * Get the value of role
    */ 
   public function getRole()
   {
      return $this->role;
   }

   /**
    * Set the value of role
    *
    * @return  self
    */ 
   public function setRole($role)
   {
      $this->role = $role;

      return $this;
   }
}

  
  