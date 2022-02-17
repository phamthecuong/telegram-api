<?php

namespace  Pcplus\TeleApi\Tests;


use Pcplus\TeleApi\TelegramService;
use PHPUnit\Framework\TestCase;


class TelegramServiceTest extends TestCase {


    /**
     * PHPUnit test: vendor/bin/phpunit --filter=testPushNoti tests/TelegramServiceTest.php
     */
    public function testPushNoti()
    {
        $service = new TelegramService('5270413994:AAHU0SnZ0z0VsgteehI0cgDKqx4Z_TTWMQU', '');

        $this->assertTrue(true);
    }

}


