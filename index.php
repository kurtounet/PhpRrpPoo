<?PHP
// namespace ce met uniquement dans le fichier des class
require_once('vendor/autoload.php');

use Src\Entity\Player;
use Src\Entity\Role;
use Src\Entity\Skill;

$r = new Role(
    "Anthony",
    "Wizard",
    array("boule de feu", "foudre", "soin"),
    array("Bâton", "Dague", "Épée"),
    array(100, 50, 20)
);

$p = new Player($r, "Player Anthony");



$damage = 1.2;
$cost = 7.8;
$title = "Anthony";
$s = new Skill($damage, $cost, $title);
var_dump($s);

?>
<h1>Games </h1>
<h2><?= $p->getRole()->getName(); ?></h2>


<h2><?= $s->getTitle(); ?></h2>
<h2><?= $s->getDamage(); ?></h2>
<h2><?= $s->getCost(); ?></h2>