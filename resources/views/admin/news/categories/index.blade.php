@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список категорий
                    <a href="{{route('admin.categories.create')}}" class="btn btn-primary">
                        <i class="fa fa-plus fa-sm text-white-50"></i>
                        Добавить новую категорию
                    </a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Название категории</th>
                                <th>Дата добавления</th>
                                <th>Посмотреть новости в категории</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($newsCategories as $key =>$category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->title}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td><a href="{{route('category', $category->id)}}">{{$category->title}}</a></td>
                                    <td>
                                        <a href="{{route('admin.categories.edit', ['category'=>$category])}}">Ред.</a>
                                        <a href="javascript:void(0);" onclick="$(this).find('form').submit();" >Уд.
                                            <form action="{{route('admin.categories.destroy', $category->id)}}" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Категорий нет</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div>{{$newsCategories->links()}}</div>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection

