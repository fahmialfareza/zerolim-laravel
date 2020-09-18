<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zerolim - Jual minyak jelantahmu sekarang juga</title>
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

</head>
<body>
    @include('navbar')

    <section id="profile">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="proftpic">
                        <img src="img/logo bg sunkiss.png" alt="">
                        </div>
                        <div class="text-center mt-5">
                        <h5 class="font-italic">Fawwaz Daffa Muhammad</h5>
                        <h5>Seven Chicken</h5>
                        </div>

                </div>
                <div class="col-md-8 mt-5">
                    <button class="addformbtn">
                    <i class="fas fa-plus"></i>  Tambah penjemputan
                    </button>
                    <div class="addform" style="display:none">
                        <div class="row">
                            <div class="col-md-4">
                            <label for="berat" class="font-weight-bold">estimasi berat jelantah</label>
                            <input type="text" id="berat" name="nama" class="inputsignup">
                            </div>
                            <div class="col-md-4">
                            <label for="alamat" class="font-weight-bold">alamat penjemputan</label>
                            <input type="text" id="alamat"  name="nama" class="inputsignup">
                            </div>
                            <div class="col-md-2">
                                <button class="addformbtn">
                                <i class="fas fa-paper-plane"></i>  Kirim
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="proftraction">
                        <div class="row">
                            <div class="col-md-6">
                            <h2 class="font-weight-bold">500KG</h2>

                            <p>Jelantah terkumpulkan</p>
                            </div>
                            <div class="col-md-6">
                            <h2 class="font-weight-bold">Rp.1.000.000</h2>

                            <p>Telah kamu terima</p>
                            </div>
                        </div>
                    </div>

                    <div class="proftable">
                    <table id="proftable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor Transaksi</th>
                                    <th>Berat jelantah</th>
                                    <th>Nominal</th>
                                    <th>Tanggal Penjemputan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>TR_12</td>
                                    <td>50KG</td>
                                    <td>Rp. 100.000</td>
                                    <td>28 Maret 2019</td>
                                    <td>Masuk antrian</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>TR_13</td>
                                    <td>50KG</td>
                                    <td>Rp. 100.000</td>
                                    <td>28 Maret 2019</td>
                                    <td>Proses</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>TR_14</td>
                                    <td>50KG</td>
                                    <td>Rp. 100.000</td>
                                    <td>28 Maret 2019</td>
                                    <td>Selesai</td>
                                </tr>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    @include('footer')
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/zeroprof.js"></script>
</body>
</html>
