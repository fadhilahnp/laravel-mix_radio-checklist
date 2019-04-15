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
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="row">
                            <h4>Check List Perangkat Radio</h4>
                        </div>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name of Ship/ Ex:</label>
                                        <input type="text" class="form-control" id="shipName">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Call Sign:</label>
                                        <input type="text" class="form-control" id="callSign">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Port Register:</label>
                                        <input type="text" class="form-control" id="portRegister">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Gross Tonnage:</label>
                                        <input type="text" class="form-control" id="grossTonnage">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">IMO Number:</label>
                                        <input type="text" class="form-control" id="imoNumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">MMSI ID Number:</label>
                                        <input type="text" class="form-control" id="mmsiNumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">No Reg Class:</label>
                                        <input type="text" class="form-control" id="noReg">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Radio Area:</label>
                                        <input type="text" class="form-control" id="radioArea">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">No SIKIR:</label>
                                                <input type="text" class="form-control" id="noSikir">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Berlaku Sampai:</label>
                                                <input type="text" class="form-control" id="berlakuSampai">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Cart ORU No #1:</label>
                                        <input type="text" class="form-control" id="cartOru1">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Atas Nama:</label>
                                        <input type="text" class="form-control" id="atasNama1">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Cart ORU No #2:</label>
                                        <input type="text" class="form-control" id="cartOru2">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Atas Nama:</label>
                                        <input type="text" class="form-control" id="atasNama2">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Thn Letak Lunas:</label>
                                        <input type="text" class="form-control" id="thnLetakLunas">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Tempat Pemberitaan:</label>
                                                <input type="text" class="form-control" id="tempatPemberitaan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">Tanggal Pemberitaan:</label>
                                                <input type="text" class="form-control" id="tanggalPemberitaan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Daerah Pelayaran:</label>
                                        <input type="text" class="form-control" id="daerahPelayaran">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /card body -->
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Nama Perangkat</th>
                                <th>Checklist</th>
                                <th>Merk</th>
                                <th>Model/ Type</th>
                                <th>Serial Number</th>
                                <th>Kamer/ Approval</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>blabla</td>
                                <td>
                                    <input type="checkbox" class="form-control" id="checklist">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="merk">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="type">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="serialNumber">
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="approval">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">
                            <a href="/dashboard" class="btn btn-danger">Batal</a>&nbsp;&nbsp;
                            <a href="#" class="btn btn-primary">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>