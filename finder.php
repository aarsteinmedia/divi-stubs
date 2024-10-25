<?php
use StubsGenerator\Finder;

return Finder::create()
    ->in('Divi')
    ->path('includes')
    ->sortByName();