<?php
declare(strict_types=1);

namespace App\Helpers;

use Exception;

class NicknameReplacer
{
    private static string $regexNickname = '/((^\@|\s\@)\w[\w\d]*[\s])/';
    private static string $regexNicknameWithoutSpace = '/@[\w\d]+/';
    public function highlight_nicknames(string $text): string
    {
        return preg_replace_callback(self::$regexNickname, function ($nickname){
            if (!isset($nickname[0])){
                throw new Exception('Nickname not found!');
            }
            return $this->gethighlightNickname($nickname[0]);
        }, $text);
    }
    private function gethighlightNickname(string $nickname): string
    {
        preg_match(self::$regexNicknameWithoutSpace, $nickname, $nicknameNoSpace);
        return  str_replace($nicknameNoSpace[0], '<b>'.$nicknameNoSpace[0].'<b>', $nickname);
    }
}