@if(session("success"))
{{(session("success"))}}
@endif
<table border="1">
    <h3>employee list</h3>
    <tr>
        <th> Name </th>
        <th> Gender </th>
        <th> City </th>
        <th> Age </th>
        <th> State </th>
        <th> Country </th>
        <th> PhoneNumber </th>
        <th> Pincode </th>
        <th> Date of Birth </th>
        <th> email </th>
        <th> Password </th>
    </tr>
    @forelse ($users as $key => $data)
    <tr>
        <td>{{$data->firstname.$data->lastname}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->city}}</td>
        <td>{{$data->age}}</td>
        <td>{{$data->state}}</td>
        <td>{{$data->country}}</td>
        <td>{{$data->phoneNumber}}</td>
        <td>{{$data->pincode}}</td>
        <td>{{$data->dateofbirth}}</td>
        <td>{{$data->email}}</td>
        <td><a href ="{{route('edit',['id'=>$data->id])}}"><input name="submit" type="submit" value="Edit" ></a></td>
        <td>
        <form action= "{{route('delete',['id'=>$data->id])}}" method ="post" >
        @csrf
        @method('DELETE')
        <input name="submit" type="submit" value="Delete" >
        </form>
        </td>
    </tr>
    @empty
    <p>there is no records</p>
    @endforelse
    {{$users->links()}}
</table>
