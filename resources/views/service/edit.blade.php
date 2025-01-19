  
  @extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <h1 class="m-0">Редактирование услуги «{{ $service->title }}»</h1>
            </div><!-- /.col -->
          <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h4><i class="icon fa fa-check"></i>{{ \Session::get('success') }}</h4>
      </div>
      @endif
          <div class="row">
             <div class="col-md-6">
              <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                  <label class="text-secondary">Наименование </label>
                  <input type="text" name="title" placeholder="Наименование" value="{{ $service->title }}" class="form-control">
                </div>
                <div class="form-group">
                  <label class="text-secondary">Активность </label>
                  <input type="checkbox" name="active" {{ $service->active == 1 ? 'checked' : ''}} >
                
                  
                </div>
               
                  <label class="text-secondary">Описание </label>
                <div class="form-group">
                    <textarea rows="15" col="10" name="description" placeholder="Текст" class="form-control">{{ $service->description }}</textarea>
                  </div>
      
    
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                  </div>
              </form>
             </div>
          </div>
          <!-- /.row -->
       
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
@endsection