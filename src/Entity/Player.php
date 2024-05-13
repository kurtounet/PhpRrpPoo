<?PHP

namespace Src\Entity;

use Src\Entity\Role;

//require_once 'vendor/autoload.php';



class Player
{

   private Role $role;

   private string $name;

   public function __construct(Role $role, string $name)
   {

      $this->setRole($role);
      $this->setName($name);
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
