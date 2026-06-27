<?php

final class AccessValidator
{
    private const EXPECTED_PASSWORD = 'Th15_15_5TR0n6';
    private const EXPECTED_CODE = '1352';

    public function isValid(array $data): bool
    {
        $password = isset($data['pws']) ? trim((string) $data['pws']) : '';
        $code = isset($data['srt']) ? trim((string) $data['srt']) : '';
        $name = isset($data['fName']) ? trim((string) $data['fName']) : '';

        return $password === self::EXPECTED_PASSWORD
            && $code === self::EXPECTED_CODE
            && $name !== '';
    }
}
