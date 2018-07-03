<?php
// src/entity//Item.php
/**
 * @Entity @Table(name="list_items")
 **/
class Item
{
    /**
     * @var int
     */
      /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /**
     * @var string
     */
     /** @Column(type="string") **/
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
