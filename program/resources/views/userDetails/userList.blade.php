@if(session("success"))
{{(session("success"))}}
@endif
<table border="1">
    <h3>user list</h3>
    <tr>
        <th> Name </th>
        <th> email </th>
        <th> password </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>
    @forelse ($users as $key => $data)
    <tr>
        <td>{{$data->firstname.$data->lastname}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->password}}</td>
        <td><form action ="{{('edit_form')}}"><input name="submit" type="submit" value="Edit" ></form></td>
        <td><form><input name="submit" type="submit" value="Delete" ></form></td>
    </tr>
    @empty
    <p>there is no records</p>
    @endforelse
</table>