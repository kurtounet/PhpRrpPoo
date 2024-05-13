<?PHP

use src\Entity\Player; 

//require ('../../vendor/autoload.php');
class Role  extends Player  {
   
   private string $name;     
   private array $skill;
   private array $weapons;
   private array $stats;
   
   public function __construct() {
   
   }

}