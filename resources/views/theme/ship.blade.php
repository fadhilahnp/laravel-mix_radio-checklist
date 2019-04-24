<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-header bg-secondary text-white">
                        <h2>Pencarian</h2>
                    </div>
                    <div class="card-body">
                        <form action="/search" method="POST" role="search">
                            <input type="text" class="form-control" name="keyword" placeholder="Pencarian Nama Kapal, Call Sign, Port Register, Nama Admin">
                        </form>
                    </div>

                </div>
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="row">
                            <div class="col-md-6 text-white">
                                <h4>Perangkat Radio</h4>
                            </div>
                            <div class="col-md-6 text-right"><a href="{{ url('/create') }}" class="btn btn-light">Tambah Data</a></div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-hover table-sm table-responsive">
                            <tr class="text-nowrap bg-light">
                                <th style="width: 10px">#</th>
                                <th>Name of Ship/ Ex</th>
                                <th>Call Sign</th>
                                <th>Port Register</th>
                                <th>Gross Tonnage</th>
                                <th>IMO Number</th>
                                <th>MMSI ID Number</th>
                                <th>No Reg Class</th>
                                <th>Radio Area</th>
                                <th>Nama Admin</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>
                                    <div class="text-center text-nowrap"><a href="{{ url('/dashboard') }}" class="btn btn-warning">Edit</a>&nbsp;&nbsp;
                                        <a href="#" class="btn btn-danger">Hapus</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>
                                    <div class="text-center text-nowrap"><a href="{{ url('/dashboard') }}" class="btn btn-warning">Edit</a>&nbsp;&nbsp;
                                        <a href="#" class="btn btn-danger">Hapus</a></div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">&laquo; Pref</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next &raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>