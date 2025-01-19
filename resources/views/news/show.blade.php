@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Просмотр новости «{{ $news->title }}»</h1>
            </div><!-- /.col -->

            <div class="col-sm-6 text-right">
              <a class="btn btn-primary"  href="{{ route('news.edit', $news->id ) }}">Редактировать</a>
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
            <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">{{ $news->title }}</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                      <div class="row">
                        <div class="col-12">
                           @if ($news->img)
                            <img class="img-fluid" src="{{ asset('storage/' . $news->img) }}">
                            @endif
                            <div class="text-secondary mt-3">
                                {{ strip_tags($news->description)}}
                            </div>
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                      <h3 class="text-primary"><i class="fa fa-pencil-square-o"></i> Информация о новости</h3>
                    
                      <br>
                      <div class="text-muted">
                        <p class="text-sm">Дата создания:
                          <b class="d-block"> {{ $news->created_at }}</b>
                        </p>
                        <p class="text-sm">Дата последнего обновления:
                          <b class="d-block">{{ $news->updated_at }}</b>
                        </p>

                        <p class="text-sm">Статус
                            <b class="d-block">{{ $news->statusTitle }}</b>
                          </p>
                          <p class="text-sm">Автор
                            {{-- <b class="d-block">{{ Auth::user()->name }}</b> --}}
                          </p>
                      </div>
                   
                  
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection