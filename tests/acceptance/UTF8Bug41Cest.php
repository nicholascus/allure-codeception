<?php

use PHPUnit\Framework\Assert;
use Yandex\Allure\Adapter\Annotation\Description;

/**
 * @Description("Bug#41")
 * https://www.startutorial.com/articles/view/phpunit-beginner-part-2-data-provider
 */
class UTF8Bug41Cest
{
    public function loginSuccessfully(AcceptanceTester $I)
    {
//        $I->fillField('[name="text"]', "Codeception");
        $I->comment('Найти');
        $I->comment('Перешли на сайт яндекса');
        $I->comment('We are going on yandex');
    }
}
