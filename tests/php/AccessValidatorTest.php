<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../bootstrap.php';

final class AccessValidatorTest extends TestCase
{
    public function testAcceptsCorrectCredentials(): void
    {
        $validator = new AccessValidator();

        $this->assertTrue($validator->isValid([
            'pws' => 'Th15_15_5TR0n6',
            'srt' => '1352',
            'fName' => 'Anna',
        ]));
    }

    public function testRejectsMissingName(): void
    {
        $validator = new AccessValidator();

        $this->assertFalse($validator->isValid([
            'pws' => 'Th15_15_5TR0n6',
            'srt' => '1352',
            'fName' => ' ',
        ]));
    }

    public function testRejectsWrongPassword(): void
    {
        $validator = new AccessValidator();

        $this->assertFalse($validator->isValid([
            'pws' => 'wrong-password',
            'srt' => '1352',
            'fName' => 'Anna',
        ]));
    }
}
