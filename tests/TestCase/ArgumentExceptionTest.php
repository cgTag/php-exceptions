<?php
namespace cgTag\Exceptions\Test\TestCase;

use cgTag\Exceptions\ArgumentException;
use cgTag\Exceptions\Test\BaseTestCase;

class ArgumentExceptionTest extends BaseTestCase
{
    /**
     * @param string $user
     * @throws ArgumentException
     */
    public function sample(string $user = null)
    {
        if ($user === null) {
            throw new ArgumentException('user');
        }
    }

    /**
     * @test
     */
    public function shouldBeAutomaticForOneParameter()
    {
        $this->sample(null);
    }
}