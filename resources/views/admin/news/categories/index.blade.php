@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список категорий
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                    <td><a href="{{route('admin.categories.edit', ['category'=>$category->id])}}">Ред.</a><a href="">Уд.</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Категорий нет</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <a href="{{route('admin.categories.create')}}" class="btn btn-primary"><i
                                class="fa fa-plus fa-sm text-white-50"></i>Добавить новую категорию</a>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection

