<?php
namespace Application;
class Module {
const VERSION = '3.0.0';
public function getConfig() {
return include __DIR__ . '/../config/module.config.php';
}
}