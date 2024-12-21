@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Статистика</h1>
            </div><!-- /.col -->
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
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                 
                   <h3>{{ $articlesCounter}}</h3> 
  
                  <p>Новых постов</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="" target="_blank" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
           
         
          </div>
        
              <!-- /.row -->
            </div>
          </div>
          </div>
          </div>
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection