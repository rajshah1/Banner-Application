<?php


namespace App\Model;


class Grade
{
    /**
     * @var int
     */
    private $percentage;
    private $subjectName;


    /**
     * Grade constructor.
     * @param int $percentage
     * @param String $subjectName
     */
    public function __construct(int $percentage, String $subjectName)
    {
        $this->percentage = $percentage;
        $this->subjectName = $subjectName;
    }

    /**
     * @return int
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }

    /**
     * @return String
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }

/*    public function __toString()
    {
        // TODO: Implement __toString() method.

        return "Subject Name : ".$this->getSubjectName()." Got Percentage : ".$this->getPercentage();
    }*/


}