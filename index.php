<?php
require('bootstrap.php');

use Nearsoft\SeleniumClient\By;
use Nearsoft\SeleniumClient\SelectElement;
use Nearsoft\SeleniumClient\WebDriver;
use Nearsoft\SeleniumClient\WebElement;
use Nearsoft\SeleniumClient\DesiredCapabilities;


$webDriver = new WebDriver();
$webDriver->get("http://www.polandvisa-ukraine.com/");
$webElement = $webDriver->waitForElementUntilIsPresent(By::cssSelector("a[href='scheduleappointment.html']"));
$webDriver->executeScript("$(\"a[href='scheduleappointment.html']\").removeAttr( \"target\" )");
$webElement->click();
$webElement = $webDriver->waitForElementUntilIsPresent(By::cssSelector("a[href='scheduleappointment_2.html']"));
$webDriver->executeScript("$(\"a[href='scheduleappointment_2.html']\").removeAttr( \"target\" )");
$webElement->click();
