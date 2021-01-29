<p><b>Switch case:</b></p>
<?php $num = 5 ?>
@switch($num)
    @case (3)
        The number is 3 <br>
        @break
    @case (4)
        The number is 4 <br>
        @break
    @case (5)
        The number is 5 <br>
        @break
    @default
        Unexpexted number <br>
@endswitch