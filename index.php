<?php
require("./vendor/autoload.php");

$FLUID_CACHE_DIRECTORY = !isset($FLUID_CACHE_DIRECTORY) ? __DIR__ . '/../cache/' : $FLUID_CACHE_DIRECTORY;

$paths = new \TYPO3Fluid\Fluid\View\TemplatePaths();
$paths->setTemplateRootPaths(['./app/view/templates/']);
$paths->setLayoutRootPaths(['./app/view/layouts/']);
$paths->setPartialRootPaths(['./app/view/partials/']);

$view = new \TYPO3Fluid\Fluid\View\TemplateView($paths);