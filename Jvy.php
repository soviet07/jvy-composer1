<?php 

/*
 * (c) Jaime Vivo Yubero <jaimevivoyubero@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

// If you don't to add a custom vendor folder, then use the simple class
// namespace HelloComposer;
namespace jvy\JvyComposer;

class Jvy
{
    public function say($toSay = "Nothing given")
    {
        return $toSay;
    }
}