@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{ $title }}</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Article</th>
                                        <th>S</th>
                                        <th>M</th>
                                        <th>L</th>
                                        <th>XL</th>
                                        <th>2XL</th>
                                        <th>3XL</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($forecasts as $forecast)
                                    {{-- @dd($forecast); --}}
                                        <tr>
                                            <td>{{ $forecast->date }}</td>
                                            <td>{{ $forecast->article->name }}</td>
                                            <td>{{ $forecast->fc_s }}</td>
                                            <td>{{ $forecast->fc_m }}</td>
                                            <td>{{ $forecast->fc_l }}</td>
                                            <td>{{ $forecast->fc_xl }}</td>
                                            <td>{{ $forecast->fc_2xl }}</td>
                                            <td>{{ $forecast->fc_3xl }}</td>
                                            <td>{{ $forecast->total() }}</td>
                                            {{-- <td>
                                                <form action="{{ url('fabric/delete', $fabric->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-primary"
                                                        href="{{ url('/fabric/edit', $fabric->id) }}"><i
                                                            class="fas fa-edit"></i></a>
                                                    <button class="btn btn-primary" type="submit"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
