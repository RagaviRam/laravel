<p><b>While:</b></p>
<?php $addition = 1; ?>
@while ($addition < 5)
  {{ "The val is ".$addition }} <br>
  <?php $addition++ ?>
@endwhile
