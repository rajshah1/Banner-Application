<?php


namespace App\Model;


use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Grade
 * @package App\Model
 */
class Grade
{
    /**
     * @var int
     * @Assert\NotBlank(message="Percentage can not be Blank or Null")
     * @Assert\Range(min=0,max=100,notInRangeMessage="Percentage should be between '{{ min }}' and '{{ max }}' but got '{{ value }}'.")
     *
     */
    private int $percentage;
    /**
     * @var String
     * @Assert\NotBlank(message="SubjectName can not be Blank or Null")
     * @Assert\Length(exactMessage="Subject Name Should be 9 length",max=9,min=9)
     */
    private string $subjectName;


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