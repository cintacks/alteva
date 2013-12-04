<?php
$pod = get_current_pod();

$fields = array(
  'location',
  'requirements',
  'responsibilities',
  'apply_url'
);

foreach($fields as $field_name) {
  $$field_name = trim($pod->field($field_name));
}

if(!empty($location)) {
  echo "<p><strong>Location</strong>: {$location}</p>";
}

if(!empty($requirements)) {
  echo "<p><strong>Requirements:</strong><br />{$requirements}</p>";
}

if(!empty($responsibilities)) {
  echo "<p><strong>Responsibilities:</strong><br />{$responsibilities}</p>";
}

if(!empty($apply_url)) {
  $target = strpos($apply_url, "mailto") === 0 ? "" : " target='_blank'";
  echo "<p><a href='{$apply_url}'{$target}>Apply Now</a></p>";
}