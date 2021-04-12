@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">

            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список новостей (Всего {{$count}})
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Заголовок</th>
                                <th>Источник</th>
                                <th>Дата добавления</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($newsList as $news)
                                <tr>
                                    <td>{{$news->id}}</td>
                                    <td>{{$news->title}}</td>
                                    <td>{{$news->source_title}}</td>
                                    <td>{{$news->created_at}}</td>
                                    <td><a href="{{route('admin.news.edit', ['news'=>$news->id])}}">Ред.</a><a href="">Уд.</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Новостей нет</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <a href="{{route('admin.news.create')}}" class="btn btn-primary"><i
                                class="fa fa-plus fa-sm text-white-50"></i>Добавить новость</a>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection
