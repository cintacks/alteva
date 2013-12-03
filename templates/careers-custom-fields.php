<?php
$pod = get_current_pod();

$location         = trim($pod->field('location'));
$requirements     = trim($pod->field('requirements'));
$responsibilities = trim($pod->field('responsibilities'));

if(!empty($location)) {
  echo "<p><strong>Location</strong>: {$location}</p>";
}

if(!empty($requirements)) {
  echo "<p><strong>Requirements:</strong><br />{$requirements}</p>";
}

if(!empty($responsibilities)) {
  echo "<p><strong>Responsibilities:</strong><br />{$responsibilities}</p>";
}
