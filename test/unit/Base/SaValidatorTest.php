<?php

class SaValidatorTest extends \PHPUnit_Framework_TestCase
{
    private $validator;

    public function setUp()
    {
        $this->validator = new \SiteApps\Base\SaValidator();
    }

    public function testValidateDataReturned()
    {
        $data = array(
            'user_id' => 1233,
            'site_url' => 'jajsjasjio',
            'plan_id' => 12331
        );
        
        $keys = array_keys($data);
        $this->validator->validateDataReturned($keys, $data);
    }
    
    /**
     * @expectedException DomainException
     */
    public function testValidateDataReturnedException()
    {
        $data = array(
            'user_id' => 1233,
            'site_url' => 'jajsjasjio',
            'plan_id' => 12331
        );
        
        $keys = array_keys($data);
        array_shift($data);
        
        $this->validator->validateDataReturned($keys, $data);
    }
}