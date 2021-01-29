@if(session("success"))
{{(session("success"))}}
@endif
<a href="{{ url('/') }}">add</a>
<table border="1">
    <h3>Student list</h3>
    <tr>
        <th> Name </th>
        <th> Address </th>
        <th> pincode </th>
    </tr>
    @forelse ($users as $key => $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->pincode}}</td>
    </tr>
    @empty
    <p>there is no records</p>
    @endforelse
    {{$users->links()}}
</table>