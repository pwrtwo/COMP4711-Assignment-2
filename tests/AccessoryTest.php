<?php
use PHPUnit\Framework\TestCase;
class AccessoryTest extends TestCase
{
    private $CI;
    private $accessory;
    
    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->CI->load->model('Accessory');
        $this->accessory = new Accessory;
    }
    
    public function testAccessoryName()
    {
        $expected = "Justin Bieber";
        $this->accessory->setName($expected);
        $this->assertEquals($expected, $this->accessory->getName());
    }
    
    public function testInvalidProfessionalityAbsent()
    {
        $expected = "";
        $this->expectException(Exception::class);
        $this->accessory->setProfessionality($expected);
    }
    
    public function testInvalidWeightNegative()
    {
        $expected = -5;
        $this->expectException(Exception::class);
        $this->accessory->setWeight($expected);
    }
    
      public function testValidWeight()
    {
        $expected = 5;
        $this->accessory->setWeight($expected);
        $this->assertEquals($expected, $this->accessory->getWeight());
    }
    
}