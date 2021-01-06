<?php
class AssociationEntity
{
    /**
     * @var int
     * @ORM\Id @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="SingleIntIdEntity")
     *
     * @var \Symfony\Bridge\Doctrine\Tests\Fixtures\SingleIntIdEntity
     */
    public $single;

    /**
     * @ORM\ManyToOne(targetEntity="CompositeIntIdEntity")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="composite_id1", referencedColumnName="id1"),
     *  @ORM\JoinColumn(name="composite_id2", referencedColumnName="id2")
     * })
     *
     * @var \Symfony\Bridge\Doctrine\Tests\Fixtures\CompositeIntIdEntity
     */
    public $composite;
}
?>
