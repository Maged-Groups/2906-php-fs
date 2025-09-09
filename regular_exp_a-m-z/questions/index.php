<?php

$directory = __DIR__; // Change this to your folder path

// Get all PHP files in the directory
$files = glob("$directory/*.php");

var_dump($files);

// foreach ($files as $file) {
//   $content = file_get_contents($file); // Read file content

//   // Replace any value inside $pattern = "..."
//   $newContent = preg_replace('/(\$pattern\s*=\s*)"([^"]*)";/', '$1"//";', $content);

//   // Save the modified content back to the file
//   file_put_contents($file, $newContent);

//   echo "Updated: $file\n";
// }
