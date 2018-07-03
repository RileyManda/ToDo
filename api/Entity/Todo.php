<?php
// Entity/Todo.php
/**
 * @Entity @Table(name="item_tbl")
 **/
class Todo
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
