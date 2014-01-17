<?php
$pod = get_current_pod();

$fields = array(
  'location',
  'requirements',
  'responsibilities',
  'qualifications',
  'apply_url'
);

$title = get_the_title();

foreach($fields as $field_name) {
  $$field_name = trim($pod->field($field_name));
}

if(!empty($location)) {
  echo "<p id='location'><strong>Location</strong>: {$location}</p>";
}

if(!empty($responsibilities)) {
  echo "<p><strong>Responsibilities:</strong><br />{$responsibilities}</p>";
}

if(!empty($qualifications)) {
  echo "<p><strong>Qualifications:</strong><br />{$qualifications}</p>";
}

if(!empty($requirements)) {
  echo "<p><strong>Educations Requirements:</strong><br />{$requirements}</p>";
}

if(!empty($apply_url)) {
  $target = strpos($apply_url, "mailto") === 0 ? "" : " target='_blank'";
  echo "<p><a href='mailto:hr@alteva.com?subject=Position: {$title} - {$location}'{$target}>Apply Now</a></p>";
}