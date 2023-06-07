<?php
$data = new DateTime('22-01-1990');
  $data->modify('+1 month');
  echo $data->format('d-m-Y H:i:s');
  ?>