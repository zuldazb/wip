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
                                        <th>No SPK</th>
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
                                    {{-- @dd($spk_head); --}}
                                    @foreach ($spks as $spk)
                                        <tr>
                                            <td>{{ $spk->no_spk }}</td>
                                            <td>{{ $spk->date }}</td>
                                            <td>{{ $spk->forecast->article->name }}</td>
                                            <td>{{ $spk->spk_s }}</td>
                                            <td>{{ $spk->spk_m }}</td>
                                            <td>{{ $spk->spk_l }}</td>
                                            <td>{{ $spk->spk_xl }}</td>
                                            <td>{{ $spk->spk_2xl }}</td>
                                            <td>{{ $spk->spk_3xl }}</td>
                                            <td>{{ $spk->total() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Forecast</h3>
                        </div>
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
                                    {{-- @dd($spk_head); --}}
                                    @foreach ($spks as $spk)
                                        <tr>
                                            <td>{{ $spk->forecast->date }}</td>
                                            <td>{{ $spk->forecast->article->name }}</td>
                                            <td>{{ $spk->forecast->fc_s }}</td>
                                            <td>{{ $spk->forecast->fc_m }}</td>
                                            <td>{{ $spk->forecast->fc_l }}</td>
                                            <td>{{ $spk->forecast->fc_xl }}</td>
                                            <td>{{ $spk->forecast->fc_2xl }}</td>
                                            <td>{{ $spk->forecast->fc_3xl }}</td>
                                            <td>{{ $spk->forecast->total() }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Fabric</h3>
                        </div>
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
                                        <th>Avg.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consumptions as $consumption)
                                        <tr>
                                            <td>{{ $consumption->id }}</td>
                                            <td>{{ $consumption->fabric->name }}</td>
                                            <td>{{ number_format($consumption->cons_s, 3, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->cons_m, 3, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->cons_l, 3, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->cons_xl, 3, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->cons_2xl, 3, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->cons_3xl, 3, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->average(), 3, ',', '.') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
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
                                        <th>Avg.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consumptions as $consumption)
                                        <tr>
                                            <td>{{ $consumption->id }}</td>
                                            <td>{{ $consumption->fabric->name }}</td>
                                            <td>{{ number_format($consumption->total_s, 2, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->total_m, 2, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->total_l, 2, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->total_xl, 2, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->total_2xl, 2, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->total_2xl, 2, ',', '.') }}</td>
                                            <td>{{ number_format($consumption->average(), 2, ',', '.') }}</td>
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
