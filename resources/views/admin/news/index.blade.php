@extends('layouts.admin')
@section('content')
    <div class="row">
        @if(session()->has('success'))
            <div class="alert alert-success">{{session()->get('success')}}</div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">{{session()->get('error')}}</div>
        @endif
        <div class="col-md-12">

            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Список новостей
                    <a href="{{route('admin.news.create')}}" class="btn btn-primary"><i
                            class="fa fa-plus fa-sm text-white-50"></i> Добавить новость</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
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
                                    <td>{{$news->source->title}}</td>
                                    <td>{{$news->created_at}}</td>
                                    <td>
                                        <a href="{{route('admin.news.edit', ['news'=>$news])}}">Ред. </a>
                                        <a href="javascript:void(0);" onclick="$(this).find('form').submit();">Уд.
                                            <form action="{{route('admin.news.destroy', $news->id)}}" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">Новостей нет</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div>{{$newsList->links()}}</div>
                    </div>

                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
@endsection
