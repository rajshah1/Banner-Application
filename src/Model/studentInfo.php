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
    private string $name;

    /**
     * @var String
     */
    private string $emailID;

    /**
     * @var int
     */
    private int $UID;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param String $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getEmailID(): string
    {
        return $this->emailID;
    }

    /**
     * @param String $emailID
     */
    public function setEmailID(string $emailID): void
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
     * @param int $UID
     */
    public function setUID(int $UID): void
    {
        $this->UID = $UID;
    }


}