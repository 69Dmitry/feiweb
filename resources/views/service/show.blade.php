@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Просмотр услуги «{{ $service->title }}»</h1>
            </div><!-- /.col -->

            <div class="col-sm-6 text-right">
              <a class="btn btn-primary"  href="{{ route('article.edit', $article->id ) }}">Редактировать</a>
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
                  <h3 class="card-title">{{ $service->title }}</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                      <div class="row">
                        <div class="col-12">
                         
                            <div class="text-secondary mt-3">
                                {{ strip_tags($service->description)}}
                            </div>
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                      <h3 class="text-primary"><i class="fa fa-pencil-square-o"></i> Информация о статье</h3>
                     
                      <br>
                      <div class="text-muted">
                        <p class="text-sm">Дата создания:
                          <b class="d-block"> {{ $service->created_at }}</b>
                        </p>
                        <p class="text-sm">Дата последнего обновления:
                          <b class="d-block">{{ $service->updated_at }}</b>
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