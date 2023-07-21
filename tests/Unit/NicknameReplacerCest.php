<?php


namespace Tests\Unit;

use Tests\Support\UnitTester;
use App\Helpers\NicknameReplacer;

class NicknameReplacerCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function testOnlyNickname(UnitTester $I): void
    {
        $replacer = new NicknameReplacer();
        $replacedText = $replacer->highlight_nicknames('@hello world');
        $I->assertEquals('<b>@hello<b> world', $replacedText);
    }

    public function testZeroNickname(UnitTester $I): void
    {
        $replacer = new NicknameReplacer();
        $replacedText = $replacer->highlight_nicknames('hello world');
        $I->assertEquals('hello world', $replacedText);
    }

    public function testTwoNicknames(UnitTester $I): void
    {
        $replacer = new NicknameReplacer();
        $replacedText = $replacer->highlight_nicknames('@hello @world! @its me @123Leo');
        $I->assertEquals('<b>@hello<b> @world! <b>@its<b> me @123Leo', $replacedText);
    }

    public function testEmptyString(UnitTester $I): void
    {
        $replacer = new NicknameReplacer();
        $replacedText = $replacer->highlight_nicknames('');
        $I->assertEquals('param $text is empty!', $replacedText);
    }
}
