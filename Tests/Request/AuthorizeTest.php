<?php
namespace Payum\Core\Tests\Request;

class AuthorizeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldBeSubClassOfGeneric()
    {
        $rc = new \ReflectionClass('Payum\Core\Request\Authorize');
        
        $this->assertTrue($rc->isSubclassOf('Payum\Core\Request\Generic'));
    }
}