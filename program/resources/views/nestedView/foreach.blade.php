<p><b>Foreach:</b></p>
<?php $students = [["name" => "Ragavi","age" => 21,"address" => "Rjpm"],
                   ["name" => "voldy","age" => 21,"address" => "Chennai"],
                   ["name" => "rohini","age" => 21,"address" => "TVL"]
]; ?>

The student list:
@foreach($students as $student)
<li>{{ $student["name"] }}</li>
@endforeach