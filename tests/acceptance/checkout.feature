Feature: checkout
  In order to buy products
  As a customer
  I want to be able to buy several products

Scenario Outline: order products explicitely/ пошопимся немного
 In order to buy product
 As a customer
 I need to be able to checkout the selected products онлайн
 Given i have product <name1> with <item1> price in my cart
 And i have product <name2> with <item2> price in my cart
 When i go to checkout process
 Then i should see that total number of products is 2
 And my order amount is <total>
Examples:
|name1  |item1|name2  |item2|total|
|"трусы"|$600 |"майки"|$200 |$700 |
|"трусы"|$700 |"майки"|$800 |$1500|
|"трусы"|$100 |"майки"|$200 |$300 |

Scenario: over product explicitely пошопимся немного
 In order to buy product
 As a customer
 I need to be able to checkout the selected products онлайн
 Given i have product "носки" with $600 price in my cart
 And i have product "шапка" with $1000 price in my cart
 When i go to checkout process
 Then i should see that total number of products is 2
 And my order amount is $1600
