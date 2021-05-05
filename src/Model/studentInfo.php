<?php


namespace App\Model;


/**
 * Class studentInfo
 * @package App\Model
 */
class studentInfo
{

    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $emailID;
    /**
     * @var
     */
    private $UID;

    /**
     * studentInfo constructor.
     * @param $name
     * @param $emailID
     * @param $UID
     */
    public function __construct($name, $emailID, $UID)
    {
        $this->name = $name;
        $this->emailID = $emailID;
        $this->UID = $UID;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        // TODO: Implement __toString() method.

        return "Name :" . $this->name . " EmailID : " . $this->emailID . " UID : " . $this->UID;
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
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmailID()
    {
        return $this->emailID;
    }

    /**
     * @param mixed $emailID
     */
    public function setEmailID($emailID): void
    {
        $this->emailID = $emailID;
    }

    /**
     * @return mixed
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * @param mixed $UID
     */
    public function setUID($UID): void
    {
        $this->UID = $UID;
    }





}