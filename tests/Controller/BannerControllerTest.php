<?php
declare(strict_types=1);

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;

class BannerControllerTest extends TestCase
{
    /**
     * @Tests
     */
    public function testArrayMapFunction(): void
    {
        $arrayVal = [['id' => 123, 'HeroPage' => 'This is HeroPage'], ['id' => 1234, 'HeroPage' => 'false']];
        $ids = array_map(static function ($arrayElement) {
            return $arrayElement['id'];
        }, $arrayVal);
        //dump($ids);

        $this->assertEquals([123,1234],$ids);
    }

    /**
     * @Tests
     */
    public function testGrades(): void
    {
        $this->markTestSkipped('Test is Currently Skipped Please test again');
    }

    /**
     * @Tests
     */
    public function testAnnotationRoute(): void
    {
        $this->markTestSkipped('Test is Currently Skipped Please test again');
    }
}
