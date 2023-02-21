@extends('admin.layouts.main')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex">
                    <h1 class="m-0 mr-2">{{$post->title}}</h1>
                    <a href="{{route('admin.post.edit', $post->id)}}"><i class="fa fa-pen"></i></a>
                    <form action="{{route('admin.post.delete', $post->id)}}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class ="border-0 bg-white">
                            <!--мусорка-->                              <i class="fa fa-trash text-danger" role="button"></i>
                        </button>
                    </form>св
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->

            <div class="row">
                <div class ="col-6">

                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>

                                <tr>
                                    <td>ID</td>
                                    <td>{{$post->id}}</td>
                                    <td><a href="#"><i class="far fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>{{$post->title}}</td>
                                    <td><a href="#"><i class="far fa-eye"></i></a></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
