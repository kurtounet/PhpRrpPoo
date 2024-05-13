<?PHP

namespace Src\Entity;

class Role
{

   private string $name;
   private $type = array("Wizard", "Warrior", "Archer");
   private ?array $skill;
   private ?array $weapons;
   private ?array $stats;

   //public function __construct(string $name ,array $skill=, array $weapons, array $stats)
   public function __construct(string $name, string $type, array $skill, array $weapons, array $stats)
   {
      $this->setName($name);
      $this->setType($type);
      $this->setSkill($skill);
      $this->setWeapons($weapons);
      $this->setStats($stats);
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

   /**
    * Get the value of skill
    */
   public function getSkill()
   {
      return $this->skill;
   }

   /**
    * Set the value of skill
    *
    * @return  self
    */
   public function setSkill($skill)
   {
      $this->skill = $skill;

      return $this;
   }

   /**
    * Get the value of weapons
    */
   public function getWeapons()
   {
      return $this->weapons;
   }

   /**
    * Set the value of weapons
    *
    * @return  self
    */
   public function setWeapons($weapons)
   {
      $this->weapons = $weapons;

      return $this;
   }

   /**
    * Get the value of stats
    */
   public function getStats()
   {
      return $this->stats;
   }

   /**
    * Set the value of stats
    *
    * @return  self
    */
   public function setStats($stats)
   {
      $this->stats = $stats;

      return $this;
   }

   /**
    * Get the value of type
    */
   public function getType()
   {
      return $this->type;
   }

   /**
    * Set the value of type
    *
    * @return  self
    */
   public function setType($type)
   {
      $this->type = $type;

      return $this;
   }
}
