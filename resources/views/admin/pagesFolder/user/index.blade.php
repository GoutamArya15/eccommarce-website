@extends('admin.pagesFolder.admin-master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="mt-2">
                    <h4 >Users</h4>
                    <small style="font-size: 10px">Admin can change Only Role on the User !</small>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as  $item)
                                <tr>
                                    <td>{{  $item['id']}}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>{{ $item['country'] }}</td>
                                    <form action="{{route('admin.users.add')}}" method="POST">
                                        @csrf
                                        <td>
                                            <input type="hidden" name="user_id" value="{{  $item['id']}}">
                                            <select  id="" name="role">
                                                @if ($item['role'] == 'user')
                                                    <option value="user" disabled>user</option>
                                                    <option value="admin">admin</option>
                                                @else
                                                <option value="admin" disabled>admin</option>
                                                <option value="user" >user</option>
                                                @endif
                                            </select>
                                         </td>
                                         <td>
                                             <button type="submit" class="btn btn-success btn-sm text-white">Save</button>
                                         </td>
                                    </form>  
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
