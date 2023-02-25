<?php
// Prompt user for number of parameters
$num_parameters = readline("Enter the number of parameters: ");

// Create an array to store parameters
$parameters = array();

// Prompt user for area ID and area description for each parameter
for ($i = 1; $i <= $num_parameters; $i++) {
  $area_id = readline("Enter the area ID for parameter " . $i . ": ");
  $area_desc = readline("Enter the area description for parameter " . $i . ": ");
  
  // Store area ID and area description in array
  $parameters[] = array(
    'area_id' => $area_id,
    'area_desc' => $area_desc
  );
}

// Prompt user for number of indicators
$num_indicators = readline("Enter the number of indicators: ");

// Create an array to store indicators
$indicators = array();

// Prompt user for indicator ID, name, and rating for each indicator
for ($i = 1; $i <= $num_indicators; $i++) {
  $indicator_id = readline("Enter the indicator ID for indicator " . $i . ": ");
  $indicator_name = readline("Enter the indicator name for indicator " . $i . ": ");
  $answerable = readline("Is the indicator answerable by yes or no? (y/n): ");
  
  // Check if indicator is answerable
  if ($answerable == 'y') {
    $rating_scale = readline("Enter the 5-point Likert scale for the indicator (1-5): ");
  } else {
    $rating_scale = 'N/A';
  }
  
  // Store indicator ID, name, answerable, and rating scale in array
  $indicators[] = array(
    'indicator_id' => $indicator_id,
    'indicator_name' => $indicator_name,
    'answerable' => $answerable,
    'rating_scale' => $rating_scale
  );
}

// Print out the parameters and indicators
echo "Parameters:\n";
foreach ($parameters as $parameter) {
  echo "Area ID: " . $parameter['area_id'] . ", Area Description: " . $parameter['area_desc'] . "\n";
}

echo "Indicators:\n";
foreach ($indicators as $indicator) {
  echo "Indicator ID: " . $indicator['indicator_id'] . ", Indicator Name: " . $indicator['indicator_name'] . ", Answerable: " . $indicator['answerable'] . ", Rating Scale: " . $indicator['rating_scale'] . "\n";
}
?>