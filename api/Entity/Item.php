<?php
// Entity/Item.php
use Doctrine\ORM\Annotation as ORM;
/**
 * @ORM\Entity @ORM\Table(name="list_tbl")
 **/
class Item
{
  /** @ORM\Id @ORM\Column(type="integer") @ORM\GeneratedValue **/
    protected $id;
  /** @ORM\Column(type="string") **/
    protected $name;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
