@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список Пользователей
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary"><i
                            class="fa fa-plus fa-sm text-white-50"></i> Добавить пользователя</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Имя</th>
                                <th>Email адрес</th>
                                <th>Является ли администратором</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->is_admin}}</td>
                                    <td>
                                        <a href="{{route('admin.users.edit', ['user'=>$user])}}">Ред. </a>
                                        <a href="javascript:void(0);" onclick="$(this).find('form').submit();">Уд.
                                            <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                            </form>
                                        </a>
                                        {{--<a href="javascript:;" class="delete" rel="{{$news->id}}"> Уд.</a>--}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Пользователей нет</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
{{--                        <div>{{$users->links()}}</div>--}}
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection
