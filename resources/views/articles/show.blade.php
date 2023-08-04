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
                                {{-- @dd($spk); --}}
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>No SPK</th>
                                        <th>Article</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($spk_head); --}}
                                    @foreach ($spks as $spk)
                                        <tr>
                                            <td>{{ $spk->id }}</td>
                                            <td>{{ $spk->no_spk }}</td>
                                            <td>{{ $spk->forecast->article->name }}</td>
                                            <td>{{ $spk->date }}</td>
                                        </tr>
                                    @endforeach

                                    {{-- @foreach ($spks_s as $spk) --}}
                                    {{-- @dd($spk); --}}
                                    <tr>
                                        {{-- <td>{{ $spk->forecast->id }}</td> --}}
                                        {{-- <td>{{ $spk->no_spk }}</td>
                                            <td>{{ $spk->makloon->name }}</td>
                                            <td>{{ $spk->forecast->article->name }}</td>
                                            <td>{{ $spk->date }}</td>
                                            <td>{{ $spk->spk_s }}</td>
                                            <td>{{ $spk->spk_m }}</td>
                                            <td>{{ $spk->spk_l }}</td>
                                            <td>{{ $spk->spk_xl }}</td>
                                            <td>{{ $spk->spk_2xl }}</td>
                                            <td>{{ $spk->spk_3xl }}</td> --}}
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
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        {{-- <div class="card-header">
                            <h3 class="card-title">DataTable with minimal features & hover style</h3>
                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Fabric</th>
                                        <th>Cons S</th>
                                        <th>Cons M</th>
                                        <th>Cons L</th>
                                        <th>Cons XL</th>
                                        <th>Cons 2XL</th>
                                        <th>Cons 3XL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consumptions as $consumption)
                                        <tr>
                                            <td>{{ $consumption->id }}</td>
                                            <td>{{ $consumption->fabric->name }}</td>
                                            <td>{{ $consumption->cons_s }}</td>
                                            <td>{{ $consumption->cons_m }}</td>
                                            <td>{{ $consumption->cons_l }}</td>
                                            <td>{{ $consumption->cons_xl }}</td>
                                            <td>{{ $consumption->cons_2xl }}</td>
                                            <td>{{ $consumption->cons_3xl }}</td>
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