<?php
echo "<h2>Before Require Function</h2>";

include_once 'functions.php';

include_once 'functions.php';

echo "<h2>Before Function Call</h2>";

my_function();

echo "<h2>After Function Call</h2>";


for ($i = 0; $i < 10; $i++) {

  require 'component.php';
  }