<?php
require_once 'vendor/autoload.php';

use TNkemdilim\MoneyToWords\Converter;

use TNkemdilim\MoneyToWords\Languages as Language;

$converter = new Converter("D", "M", Language::FRENCH);

echo ($converter->convert(23.45));
echo ($converter->convert("1250000"));