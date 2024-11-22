<?php
require_once "./utils.php";
use PHPUnit\Framework\TestCase;
use General\Utils;

class UtilsTest extends TestCase
{

    public function testGeneratedNumberIsWithinRange()
    {
        $min = 1;
        $max = 100;
        $result = Utils::getSecureRandom($min, $max);

        $this->assertGreaterThanOrEqual($min, $result, "generated number is less than the minimum");

        $this->assertLessThanOrEqual($max, $result, "generated number is greater than the maximum");
    }

    public function testGeneratedNumberIsInteger()
    {
        $min = 1;
        $max = 1000;

        $result = Utils::getSecureRandom($min, $max);

        $this->assertIsInt($result, "The generated number is not an integer");
    }


    public function testGeneratedNumberIsRandom()
    {
        $min = 10;
        $max = 50;

        $results = [];
        for ($i = 0; $i < 100; $i++) {
            $results[] = Utils::getSecureRandom($min, $max);
        }

        // Assert that there are at least 2 unique numbers in the results, 
        $uniqueResults = array_unique($results);
        $this->assertGreaterThan(1, count($uniqueResults), "generated numbers are not random");
    }


}
?>