<?php
namespace App;

class customer{
    /**
     * @var
     */
    private $lastname;
    /**
     * @var
     */
    private $firstname;
    /**
     * @var
     */
    private $age;

    /**
     * customer constructor.
     * @param string $lastname
     * @param string $firstname
     * @param string $age
     */
    public function __construct($lastname = "Deneudt", $firstname = "Lucas", $age = "20")
    {
        $this->setLastName($lastname);
        $this->setFirstName($firstname);
        $this->setAge($age);
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     */
    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     */
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->getLastName() . ' ' . $this->getFirstName();
    }
}
?>