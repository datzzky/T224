@extends('layout.template')
<!-- header -->
@section('header')
        <li class="libtn">
            <form action="{{route('add')}}" method="GET">
                <button class= "redirect" name="add">+</button><br>
            </form>
        </li>
    </ul>
</div>
@endsection
    <!-- end header -->
    <!-- start main content -->
@section('container')
<div class="content">
    <table class="listData">
    <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Age</th>
                <th>Birth Date</th>
                <th>Gender</th>
                <th>College</th>
                <th>Department</th>
                <th>Yr Level</th>
                <th>Region</th>
                <th>City</th>
                <th>created at</th>
                <th>updated at</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $entity)
            <tr>
                <td>{{$entity->id}}</td>
                    <td class="col-name">{{$entity->lastName}}, {{$entity->firstName}}</td>
                    <td>{{$entity->age}} </td>
                    <td>{{$entity->birthDate}} </td>
                    <td>{{$entity->gender}}</td>
                    <td>{{$entity->college}}</td>
                    <td>{{$entity->department}}</td>
                    <td>{{$entity->yearLevel}}</td>
                    <td>{{$entity->Region}}</td>
                    <td>{{$entity->city}}</td>
                    <td>{{$entity->created_at}}</td>
                    <td>{{$entity->updated_at}}</td>
                    <td>
                        <form action="{{route('delete',['id'=>$entity->id])}}" method ="GET">
                            <button class="delete" value="{{$entity->id}}"><img src="images/delete.jpg" class="del"></button>
                        </form> 
                    </td>
                    <td>
                        <form action="{{route('edit',['id'=>$entity->id])}}"method ="GET">
                            <button class="update" value="{{$entity->id}}"><img src="images/edit.jpg" class="updt"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody> 
    </table>
</div>
@endsection
<!--footer-->
@section('footer')
@endsection