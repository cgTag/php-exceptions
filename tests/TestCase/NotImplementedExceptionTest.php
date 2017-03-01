<?php
namespace cgTag\Exceptions\Test\TestCase;

use cgTag\Exceptions\Test\BaseTestCase;

class NotImplementedExceptionTest extends BaseTestCase
{
    /**
     * @test
     */
    public function shouldReportMethodName()
    {
        $this->markTestSkipped();
    }
}