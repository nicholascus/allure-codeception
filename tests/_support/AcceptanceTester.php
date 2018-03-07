<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;
    private $purchases = array();

   /**
    * Define custom actions here
    */

    /**
     * @Given i have product :name with $:num1 price in my cart
     */
     public function iHaveProductWithPriceInMyCart($name, $num1)
    {
         array_push($this->purchases, $num1);
    }

    /**
     * @When i go to checkout process
     */
     public function iGoToCheckoutProcess()
    {

    }

    /**
     * @Then i should see that total number of products is :num1
     */
     public function iShouldSeeThatTotalNumberOfProductsIs($num1)
    {
         $this->assertEquals($num1,count($this->purchases));
    }

    /**
     * @Then my order amount is $:num1
     */
    public function myOrderAmountIs($num1)
    {
        $total = 0;
        while($this->purchases) {
            $total += array_pop($this->purchases);
        }
        $this->assertEquals($num1, $total);
    }

}
