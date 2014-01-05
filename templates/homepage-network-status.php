<?php

if(network_status_visible()) {
  $problem_only = true;

  $message = get_current_network_status($problem_only);

  if($message != "")
    echo "<div class='network-status-problem'>{$message}</div>";
}