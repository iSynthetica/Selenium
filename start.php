<?php
require_once "inc/not_login.php";
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

$webDriver->switchTo()->frame(0);
$webElement = $webDriver->waitForElementUntilIsPresent(By::id("ctl00_plhMain_lnkSchApp"));
$webElement->click();

$selectElement = new SelectElement($webDriver->findElement(By::id("ctl00_plhMain_cboVAC")));
$selectElement->selectByValue("12");

$selectElement = new SelectElement($webDriver->findElement(By::id("ctl00_plhMain_cboPurpose")));
$selectElement->selectByValue("1");

$webElement = $webDriver->findElement(By::id("ctl00_plhMain_btnSubmit"));
$webElement->click();

$selectElement = new SelectElement($webDriver->findElement(By::id("ctl00_plhMain_cboVisaCategory")));
$selectElement->selectByValue("235");
