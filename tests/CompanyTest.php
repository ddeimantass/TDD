<?php

namespace Testing\Tests;

use PHPUnit\Framework\TestCase;
use Testing\Model\Company;

class CompanyTest extends TestCase
{
    /**
     * @dataProvider titleProvider
     */
    public function testTitle($title)
    {
        $company = new Company($title);
        $this->assertEquals($title, $company->getTitle());
    }
    
    /**
     * @dataProvider parkingsProvider
     */
    public function testParkings($pakings)
    {
        $company = new Company('', $pakings);
        $this->assertEquals($pakings, $company->getParkings());
    }
    
    public function titleProvider()
    {
        return [
            ['com1'],
            ['com2'],
            ['company3']
        ];
    }
    
    public function parkingsProvider()
    {
        return [
            [
                ['1park1'],
                ['1park2'],
                ['1park3']
            ],
            [
                ['2park1'],
                ['2park2'],
                ['2park3']
            ]
        ];
    }
}