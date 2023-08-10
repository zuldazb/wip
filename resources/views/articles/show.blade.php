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
                        <div class="card-header">
                            <h3 class="card-title">Article Detail</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="" class="table table-bordered table-hover">
                                {{-- @dd($spk); --}}
                                <thead>
                                    <tr>
                                        <th>Entity</th>
                                        <th>Part Number</th>
                                        <th>Article</th>
                                        <th>Group</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $article->entity }}</td>
                                        <td>{{ $article->partnumber }}</td>
                                        <td>{{ $article->name }}</td>
                                        <td>{{ $article->group }}</td>
                                        <td>{{ $article->category }}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Consumption</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Fabric</th>
                                        <th>Supplier</th>
                                        <th>S</th>
                                        <th>M</th>
                                        <th>L</th>
                                        <th>XL</th>
                                        <th>2XL</th>
                                        <th>3XL</th>
                                        <th>Avg.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consumptions as $consumption)
                                        {{-- @dd($consumption->fabric->name); --}}
                                        <tr>
                                            <td>{{ $consumption->fabric->name }}</td>
                                            <td>{{ $consumption->fabric->supplier }}</td>
                                            <td>{{ number_format((float) $consumption->cons_s, 3) }}</td>
                                            <td>{{ number_format((float) $consumption->cons_m, 3) }}</td>
                                            <td>{{ number_format((float) $consumption->cons_l, 3) }}</td>
                                            <td>{{ number_format((float) $consumption->cons_xl, 3) }}</td>
                                            <td>{{ number_format((float) $consumption->cons_2xl, 3) }}</td>
                                            <td>{{ number_format((float) $consumption->cons_3xl, 3) }}</td>
                                            <td>{{ number_format((float) $consumption->average(), 3) }}</td>
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
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Forecast</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
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
                                        {{-- @dd($consumption->fabric->name); --}}
                                        <tr>
                                            <td>{{ $forecast->date }}</td>
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
