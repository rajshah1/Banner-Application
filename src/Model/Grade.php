<?php


namespace App\Model;


class Grade
{
    /**
     * @var
     */
    private $percentage;
    private $subjectName;


    /**
     * Grade constructor.
     * @param $pecentage
     * @param $subjectName
     */
    public function __construct($percentage, $subjectName)
    {
        $this->percentage = $percentage;
        $this->subjectName = $subjectName;
    }

    /**
     * @return mixed
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * @return mixed
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

/*    public function __toString()
    {
        // TODO: Implement __toString() method.

        return "Subject Name : ".$this->getSubjectName()." Got Percentage : ".$this->getPercentage();
    }*/


}