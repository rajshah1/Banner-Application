<?php
declare(strict_types=1);

namespace App\Model;


/**
 * Class studentInfo
 * @package App\Model
 */
class studentInfo
{

    /**
     * @var String
     */
    private $name;

    /**
     * @var String
     */
    private $emailID;

    /**
     * @var int
     */
    private $UID;

    /**
     * studentInfo constructor.
     * @param String $name
     * @param String $emailID
     * @param int $UID
     */
    public function __construct(String $name,String $emailID,int $UID)
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
     * @return String
     */
    public function getName():String
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
     * @return String
     */
    public function getEmailID(): String
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
     * @return int
     */
    public function getUID(): int
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