<?php
namespace Foo;

class OutcomeType
{
    private $id;
    private $name;
    private $category;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return OutcomeTypeCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param OutcomeTypeCategory $category
     *
     * @return $this
     */
    public function setCategory(OutcomeTypeCategory $category)
    {
        $this->category = $category;

        return $this;
    }
}
