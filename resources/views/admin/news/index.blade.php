@extends('layouts.admin')
@section('content')
    <div class="row">
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
                                        {{--<a href="javascript:;" class="delete" rel="{{$news->id}}"> Уд.</a>--}}
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

{{--@push('js')--}}
{{--    <script>--}}
{{--        $(function() {--}}
{{--            $(".delete").on('click', function() {--}}
{{--                let id = $(this).attr('rel');--}}
{{--                if (confirm("Подтверждаете?")) {--}}
{{--                    $.ajax({--}}
{{--                        method: "delete",--}}
{{--                        headers: {--}}
{{--                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),--}}
{{--                            'Content-Type': 'application/json',--}}
{{--                        },--}}
{{--                        url: "/admin/news/" + id,--}}
{{--                        complete: function (response) {--}}
{{--                            alert("Запись с ID" + id + " удалена");--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
