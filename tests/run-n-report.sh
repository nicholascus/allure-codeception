export XDEBUG_CONFIG="idekey=netbeans-xdebug"
rm -R tests/_output/*
vendor/bin/codecept run -v --config=tests/codeception.yml acceptance $1
allure generate -o tests/_output/allure-report -- tests/_output/allure-results/
allure report open --report-dir tests/_output/allure-report

