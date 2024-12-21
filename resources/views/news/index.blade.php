@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Новости ({{ $counter }})</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 text-right">
              <a href="{{ route('news.create') }}" target="_blank" class="btn btn-primary"> Добавить </a>
            </div>
          <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-12">
              @if ($counter > 0)
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th style="width:5%">ID</th>
                      <th style="width:18%">Название</th>
                      <th style="width: 38%">Описание</th>
                      <th style="width: 10%;"> Статус </th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($news as $news)
                      <tr id="news-{{ $news->id }}">
                        <td>{{ $news->id }}</td>
                        <td><a href="{{ route('news.show', $news->id)}}">{{ $news->title }}</a></td>
                        <td>{{ $news->previewText }}</td>
                        <td>{{ $news->statusTitle }}</td>
                        <td><a data-id="{{ $news->id }}" data-url="{{ route('news.edit', $news->id ) }}" class=" btn btn-primary btn-sm update" href="{{ route('news.edit', $news->id ) }}"> <i class="fas fa-pencil-alt"></i> Редактировать</a>
                          <a data-id="{{ $news->id }}" data-url="{{ route('news.delete', $news->id)}}" class="btn btn-danger btn-sm delete" href="javascript:void(0);"><i class="fas fa-trash"> </i> Удалить</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Название</th>
                      <th>Описание</th>
                      <th> Статус </th>
                      <th></th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              @else
                  <div>Пока не добавлено ни одной новости. <a href="{{ route('news.create') }}" target="_blank">Добавить</a> </div>
              @endif
              <!-- /.card -->
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
   
      </div>
      <!-- /.content -->
@endsection