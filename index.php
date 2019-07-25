<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
require("./vendor/autoload.php");

$paths = new \TYPO3Fluid\Fluid\View\TemplatePaths();
$paths->setTemplateRootPaths(['./app/view/templates/']);
$paths->setLayoutRootPaths(['./app/view/layouts/']);
$paths->setPartialRootPaths(['./app/view/partials/']);

$view = new \TYPO3Fluid\Fluid\View\TemplateView($paths);