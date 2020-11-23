<?php

echo Str\Camel::convert("snake_name","_");
echo Str\Camel::convert("snake-name","-");
echo Str\Camel::convert("snake name"," ");