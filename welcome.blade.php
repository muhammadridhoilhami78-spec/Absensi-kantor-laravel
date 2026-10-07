<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistem Absensi Pegawai - Dishub</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f3f6fb;
    color:#333;
}

/* ================= SIDEBAR ================= */

.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:260px;
    height:100vh;
    background:linear-gradient(180deg,#102a72,#164da5);
    color:white;
    z-index:1000;
    box-shadow:3px 0 20px rgba(0,0,0,.12);
}

.logo{
    text-align:center;
    padding:25px 15px;
    border-bottom:1px solid rgba(255,255,255,.15);
}

.logo i{
    font-size:42px;
    color:#64b5f6;
    margin-bottom:8px;
}

.logo h2{
    font-size:20px;
}

.logo p{
    font-size:11px;
    opacity:.7;
}

.menu{
    padding:15px 0;
}

.menu-title{
    padding:10px 25px;
    font-size:11px;
    opacity:.5;
    text-transform:uppercase;
}

.menu a{
    display:flex;
    align-items:center;
    gap:13px;
    padding:14px 25px;
    color:rgba(255,255,255,.75);
    text-decoration:none;
    cursor:pointer;
    transition:.3s;
    border-left:3px solid transparent;
}

.menu a i{
    width:20px;
    text-align:center;
}

.menu a:hover,
.menu a.active{
    color:white;
    background:rgba(255,255,255,.1);
    border-left-color:#64b5f6;
}

.badge{
    margin-left:auto;
    background:#ef5350;
    padding:2px 8px;
    border-radius:20px;
    font-size:10px;
}

/* ================= MAIN ================= */

.main{
    margin-left:260px;
    padding:25px 30px;
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.topbar h1{
    color:#102a72;
    font-size:25px;
}

.topbar p{
    font-size:13px;
    color:#777;
}

.top-right{
    display:flex;
    gap:12px;
    align-items:center;
}

.clock{
    background:white;
    padding:10px 15px;
    border-radius:10px;
    box-shadow:0 3px 12px rgba(0,0,0,.06);
    font-size:13px;
}

/* ================= STAT ================= */

.stats{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-bottom:25px;
}

.stat{
    background:white;
    padding:22px;
    border-radius:16px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 3px 15px rgba(0,0,0,.06);
}

.stat h4{
    color:#888;
    font-size:12px;
    margin-bottom:5px;
}

.stat .number{
    font-size:28px;
    font-weight:700;
}

.stat-icon{
    width:52px;
    height:52px;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:14px;
    font-size:22px;
}

.blue .number{color:#173d91}
.blue .stat-icon{background:#e5efff;color:#173d91}

.green .number{color:#2e7d32}
.green .stat-icon{background:#e8f5e9;color:#2e7d32}

.orange .number{color:#e65100}
.orange .stat-icon{background:#fff3e0;color:#e65100}

.red .number{color:#c62828}
.red .stat-icon{background:#ffebee;color:#c62828}

/* ================= CARD ================= */

.card{
    background:white;
    border-radius:16px;
    padding:25px;
    box-shadow:0 3px 15px rgba(0,0,0,.06);
    margin-bottom:25px;
}

.card-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.card-header h3{
    color:#102a72;
    font-size:17px;
}

/* ================= BUTTON ================= */

.btn{
    border:none;
    padding:10px 17px;
    border-radius:9px;
    cursor:pointer;
    font-family:'Poppins';
    font-size:13px;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-primary{
    background:#173d91;
    color:white;
}

.btn-success{
    background:#2e7d32;
    color:white;
}

.btn-warning{
    background:#ef6c00;
    color:white;
}

.btn-danger{
    background:#c62828;
    color:white;
}

.btn-info{
    background:#0288d1;
    color:white;
}

.btn-secondary{
    background:#777;
    color:white;
}

/* ================= TABLE ================= */

.table-container{
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
}

thead th{
    background:#f0f4ff;
    color:#173d91;
    padding:13px;
    text-align:left;
    font-size:12px;
}

tbody td{
    padding:13px;
    border-bottom:1px solid #eee;
    font-size:13px;
}

tbody tr:hover{
    background:#f8faff;
}

/* ================= STATUS ================= */

.status{
    display:inline-block;
    padding:5px 12px;
    border-radius:20px;
    font-size:11px;
    font-weight:600;
}

.hadir{
    background:#e8f5e9;
    color:#2e7d32;
}

.izin{
    background:#fff3e0;
    color:#e65100;
}

.sakit{
    background:#e3f2fd;
    color:#0277bd;
}

.alpha{
    background:#ffebee;
    color:#c62828;
}

/* ================= ACTION ================= */

.actions{
    display:flex;
    gap:5px;
}

.btn-small{
    border:none;
    padding:7px 9px;
    border-radius:7px;
    cursor:pointer;
    color:white;
}

/* ================= MODAL ================= */

.modal{
    display:none;
    position:fixed;
    z-index:3000;
    left:0;
    top:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,.55);
    justify-content:center;
    align-items:center;
    padding:20px;
}

.modal.show{
    display:flex;
}

.modal-box{
    background:white;
    width:600px;
    max-width:100%;
    max-height:90vh;
    overflow-y:auto;
    border-radius:18px;
    animation:popup .25s ease;
}

@keyframes popup{
    from{
        transform:scale(.8);
        opacity:0;
    }
    to{
        transform:scale(1);
        opacity:1;
    }
}

.modal-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:20px 25px;
    background:#173d91;
    color:white;
}

.modal-header h3{
    font-size:17px;
}

.close{
    border:none;
    background:none;
    color:white;
    font-size:23px;
    cursor:pointer;
}

.modal-body{
    padding:25px;
}

/* ================= FORM ================= */

.form-group{
    margin-bottom:16px;
}

.form-group label{
    display:block;
    margin-bottom:6px;
    font-size:13px;
    font-weight:600;
}

.form-control,
select{
    width:100%;
    padding:11px 13px;
    border:1px solid #ddd;
    border-radius:9px;
    outline:none;
    font-family:'Poppins';
    background:#fafafa;
}

.form-control:focus,
select:focus{
    border-color:#173d91;
    background:white;
}

.form-row{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;
}

/* ================= REPORT ================= */

.report-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
    margin-bottom:20px;
}

.report-box{
    padding:20px;
    border-radius:12px;
    text-align:center;
}

.report-box h2{
    font-size:28px;
}

.report-box p{
    font-size:12px;
}

/* ================= HELP ================= */

.help-item{
    padding:15px;
    border-bottom:1px solid #eee;
}

.help-item h4{
    color:#173d91;
    margin-bottom:5px;
}

.help-item p{
    font-size:13px;
    color:#666;
}

/* ================= TOAST ================= */

.toast{
    position:fixed;
    right:25px;
    top:25px;
    background:#2e7d32;
    color:white;
    padding:14px 20px;
    border-radius:10px;
    z-index:5000;
    transform:translateX(150%);
    transition:.4s;
}

.toast.show{
    transform:translateX(0);
}

/* ================= RESPONSIVE ================= */

@media(max-width:1000px){

    .stats{
        grid-template-columns:repeat(2,1fr);
    }

    .report-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:700px){

    .sidebar{
        width:70px;
    }

    .logo h2,
    .logo p,
    .menu-title,
    .menu a span,
    .badge{
        display:none;
    }

    .logo{
        padding:20px 5px;
    }

    .main{
        margin-left:70px;
        padding:15px;
    }

    .stats{
        grid-template-columns:1fr;
    }

    .form-row{
        grid-template-columns:1fr;
    }

    .report-grid{
        grid-template-columns:1fr;
    }

    .topbar{
        align-items:flex-start;
        gap:10px;
        flex-direction:column;
    }
}

/* ================= PRINT ================= */

@media print{

    .sidebar,
    .topbar,
    .btn,
    .actions{
        display:none!important;
    }

    .main{
        margin:0;
        padding:0;
    }

    .card{
        box-shadow:none;
    }
}
</style>
</head>

<body>

<!-- ================= SIDEBAR ================= -->

<div class="sidebar">

    <div class="logo">
        <i class="fas fa-bus"></i>
        <h2>DISHUB</h2>
        <p>Sistem Absensi Pegawai</p>
    </div>

    <div class="menu">

        <div class="menu-title">Menu Utama</div>

        <a class="active" onclick="dashboard()">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>

        <a onclick="openModal('pegawaiModal')">
            <i class="fas fa-users"></i>
            <span>Data Pegawai</span>
            <span class="badge" id="badgePegawai">0</span>
        </a>

        <a onclick="openModal('absensiModal')">
            <i class="fas fa-calendar-check"></i>
            <span>Absensi</span>
        </a>

        <a onclick="openLaporan()">
            <i class="fas fa-file-alt"></i>
            <span>Laporan</span>
        </a>

        <div class="menu-title">Lainnya</div>

        <a onclick="openModal('pengaturanModal')">
            <i class="fas fa-cog"></i>
            <span>Pengaturan</span>
        </a>

        <a onclick="openModal('bantuanModal')">
            <i class="fas fa-question-circle"></i>
            <span>Bantuan</span>
        </a>

    </div>

</div>


<!-- ================= MAIN ================= -->

<div class="main">

    <div class="topbar">

        <div>
            <h1>Dashboard Absensi Pegawai</h1>
            <p>
                <i class="fas fa-home"></i>
                Dashboard / Sistem Absensi
            </p>
        </div>

        <div class="top-right">

            <div class="clock">
                <i class="fas fa-clock"></i>
                <span id="jam"></span>
            </div>

            <button class="btn btn-primary"
                    onclick="openModal('absensiModal')">
                <i class="fas fa-plus"></i>
                Absen Sekarang
            </button>

        </div>

    </div>


    <!-- ================= STATISTIK ================= -->

    <div class="stats">

        <div class="stat blue">

            <div>
                <h4>Total Pegawai</h4>
                <div class="number" id="totalPegawai">0</div>
            </div>

            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>

        </div>


        <div class="stat green">

            <div>
                <h4>Hadir</h4>
                <div class="number" id="totalHadir">0</div>
            </div>

            <div class="stat-icon">
                <i class="fas fa-check-circle"></i>
            </div>

        </div>


        <div class="stat orange">

            <div>
                <h4>Izin / Sakit</h4>
                <div class="number" id="totalIzinSakit">0</div>
            </div>

            <div class="stat-icon">
                <i class="fas fa-file-medical"></i>
            </div>

        </div>


        <div class="stat red">

            <div>
                <h4>Alpha</h4>
                <div class="number" id="totalAlpha">0</div>
            </div>

            <div class="stat-icon">
                <i class="fas fa-times-circle"></i>
            </div>

        </div>

    </div>


    <!-- ================= ABSENSI TERBARU ================= -->

    <div class="card">

        <div class="card-header">

            <h3>
                <i class="fas fa-table"></i>
                Absensi Terbaru
            </h3>

            <button class="btn btn-primary"
                    onclick="openModal('absensiModal')">
                <i class="fas fa-plus"></i>
                Tambah Absensi
            </button>

        </div>


        <div class="table-container">

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Jam Pulang</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody id="tabelAbsensi"></tbody>

            </table>

        </div>

    </div>


    <!-- ================= REKAP ================= -->

    <div class="card">

        <div class="card-header">

            <h3>
                <i class="fas fa-chart-pie"></i>
                Rekap Absensi Hari Ini
            </h3>

        </div>

        <div class="report-grid">

            <div class="report-box" style="background:#e8f5e9;">
                <h2 id="rekapHadir">0</h2>
                <p>Hadir</p>
            </div>

            <div class="report-box" style="background:#fff3e0;">
                <h2 id="rekapIzin">0</h2>
                <p>Izin</p>
            </div>

            <div class="report-box" style="background:#e3f2fd;">
                <h2 id="rekapSakit">0</h2>
                <p>Sakit</p>
            </div>

            <div class="report-box" style="background:#ffebee;">
                <h2 id="rekapAlpha">0</h2>
                <p>Alpha</p>
            </div>

        </div>

    </div>

</div>


<!-- ================================================= -->
<!-- POPUP DATA PEGAWAI -->
<!-- ================================================= -->

<div class="modal" id="pegawaiModal">

    <div class="modal-box">

        <div class="modal-header">

            <h3>
                <i class="fas fa-users"></i>
                Data Pegawai
            </h3>

            <button class="close"
                    onclick="closeModal('pegawaiModal')">
                &times;
            </button>

        </div>

        <div class="modal-body">

            <button class="btn btn-primary"
                    onclick="tambahPegawai()"
                    style="margin-bottom:20px;">
                <i class="fas fa-user-plus"></i>
                Tambah Pegawai
            </button>

            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody id="tabelPegawai"></tbody>

                </table>

            </div>

        </div>

    </div>

</div>


<!-- ================================================= -->
<!-- POPUP ABSENSI -->
<!-- ================================================= -->

<div class="modal" id="absensiModal">

    <div class="modal-box">

        <div class="modal-header">

            <h3>
                <i class="fas fa-calendar-check"></i>
                Input Absensi Pegawai
            </h3>

            <button class="close"
                    onclick="closeModal('absensiModal')">
                &times;
            </button>

        </div>

        <div class="modal-body">

            <form id="formAbsensi">

                <div class="form-group">

                    <label>
                        <i class="fas fa-user"></i>
                        Nama Pegawai
                    </label>

                    <select id="namaPegawai" required>
                        <option value="">
                            -- Pilih Pegawai --
                        </option>
                    </select>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>Tanggal</label>

                        <input type="date"
                               id="tanggal"
                               class="form-control"
                               required>

                    </div>


                    <div class="form-group">

                        <label>Status Absensi</label>

                        <select id="status"
                                required>

                            <option value="Hadir">
                                Hadir
                            </option>

                            <option value="Izin">
                                Izin
                            </option>

                            <option value="Sakit">
                                Sakit
                            </option>

                            <option value="Alpha">
                                Alpha
                            </option>

                        </select>

                    </div>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label>Jam Masuk</label>

                        <input type="time"
                               id="jamMasuk"
                               class="form-control">

                    </div>


                    <div class="form-group">

                        <label>Jam Pulang</label>

                        <input type="time"
                               id="jamPulang"
                               class="form-control">

                    </div>

                </div>


                <div class="form-group">

                    <label>Keterangan</label>

                    <textarea id="keterangan"
                              class="form-control"
                              rows="3"
                              placeholder="Keterangan jika diperlukan"></textarea>

                </div>


                <button type="submit"
                        class="btn btn-primary"
                        style="width:100%;">

                    <i class="fas fa-save"></i>
                    Simpan Absensi

                </button>

            </form>

        </div>

    </div>

</div>


<!-- ================================================= -->
<!-- POPUP LAPORAN -->
<!-- ================================================= -->

<div class="modal" id="laporanModal">

    <div class="modal-box"
         style="width:900px;">

        <div class="modal-header">

            <h3>
                <i class="fas fa-file-alt"></i>
                Laporan Absensi
            </h3>

            <button class="close"
                    onclick="closeModal('laporanModal')">
                &times;
            </button>

        </div>

        <div class="modal-body">

            <div class="form-row">

                <div class="form-group">

                    <label>Mulai Tanggal</label>

                    <input type="date"
                           id="filterMulai"
                           class="form-control">

                </div>

                <div class="form-group">

                    <label>Sampai Tanggal</label>

                    <input type="date"
                           id="filterSampai"
                           class="form-control">

                </div>

            </div>


            <div class="actions"
                 style="margin-bottom:20px;">

                <button class="btn btn-primary"
                        onclick="filterLaporan()">

                    <i class="fas fa-filter"></i>
                    Filter

                </button>

                <button class="btn btn-success"
                        onclick="exportCSV()">

                    <i class="fas fa-file-csv"></i>
                    Export CSV

                </button>

                <button class="btn btn-info"
                        onclick="window.print()">

                    <i class="fas fa-print"></i>
                    Print

                </button>

            </div>


            <div class="report-grid">

                <div class="report-box"
                     style="background:#e8f5e9;">

                    <h2 id="lapHadir">0</h2>
                    <p>Hadir</p>

                </div>

                <div class="report-box"
                     style="background:#fff3e0;">

                    <h2 id="lapIzin">0</h2>
                    <p>Izin</p>

                </div>

                <div class="report-box"
                     style="background:#e3f2fd;">

                    <h2 id="lapSakit">0</h2>
                    <p>Sakit</p>

                </div>

                <div class="report-box"
                     style="background:#ffebee;">

                    <h2 id="lapAlpha">0</h2>
                    <p>Alpha</p>

                </div>

            </div>


            <div class="table-container">

                <table>

                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                        </tr>

                    </thead>

                    <tbody id="tabelLaporan"></tbody>

                </table>

            </div>

        </div>

    </div>

</div>


<!-- ================================================= -->
<!-- POPUP PENGATURAN -->
<!-- ================================================= -->

<div class="modal" id="pengaturanModal">

    <div class="modal-box">

        <div class="modal-header">

            <h3>
                <i class="fas fa-cog"></i>
                Pengaturan Sistem
            </h3>

            <button class="close"
                    onclick="closeModal('pengaturanModal')">
                &times;
            </button>

        </div>

        <div class="modal-body">

            <div class="form-group">

                <label>Nama Instansi</label>

                <input type="text"
                       id="namaInstansi"
                       class="form-control"
                       value="Dinas Perhubungan">

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label>Jam Masuk</label>

                    <input type="time"
                           id="settingMasuk"
                           class="form-control"
                           value="08:00">

                </div>

                <div class="form-group">

                    <label>Jam Pulang</label>

                    <input type="time"
                           id="settingPulang"
                           class="form-control"
                           value="16:00">

                </div>

            </div>


            <button class="btn btn-primary"
                    onclick="simpanPengaturan()"
                    style="width:100%;">

                <i class="fas fa-save"></i>
                Simpan Pengaturan

            </button>

        </div>

    </div>

</div>


<!-- ================================================= -->
<!-- POPUP BANTUAN -->
<!-- ================================================= -->

<div class="modal" id="bantuanModal">

    <div class="modal-box">

        <div class="modal-header">

            <h3>
                <i class="fas fa-question-circle"></i>
                Bantuan Sistem
            </h3>

            <button class="close"
                    onclick="closeModal('bantuanModal')">
                &times;
            </button>

        </div>

        <div class="modal-body">

            <div class="help-item">

                <h4>
                    <i class="fas fa-users"></i>
                    Data Pegawai
                </h4>

                <p>
                    Digunakan untuk melihat dan menambahkan
                    data pegawai Dishub.
                </p>

            </div>


            <div class="help-item">

                <h4>
                    <i class="fas fa-calendar-check"></i>
                    Absensi
                </h4>

                <p>
                    Digunakan untuk mencatat status pegawai
                    Hadir, Izin, Sakit, atau Alpha.
                </p>

            </div>


            <div class="help-item">

                <h4>
                    <i class="fas fa-file-alt"></i>
                    Laporan
                </h4>

                <p>
                    Digunakan untuk melihat rekap absensi
                    berdasarkan tanggal.
                </p>

            </div>


            <div class="help-item">

                <h4>
                    <i class="fas fa-cog"></i>
                    Pengaturan
                </h4>

                <p>
                    Digunakan untuk mengatur nama instansi
                    serta jam kerja.
                </p>

            </div>


            <div class="help-item">

                <h4>
                    <i class="fas fa-info-circle"></i>
                    Keterangan Status
                </h4>

                <p>
                    <b>Hadir</b> = pegawai hadir bekerja.<br>
                    <b>Izin</b> = pegawai mendapatkan izin.<br>
                    <b>Sakit</b> = pegawai tidak masuk karena sakit.<br>
                    <b>Alpha</b> = pegawai tidak hadir tanpa keterangan.
                </p>

            </div>

        </div>

    </div>

</div>


<!-- TOAST -->

<div class="toast" id="toast">
    <i class="fas fa-check-circle"></i>
    <span id="toastText">Berhasil!</span>
</div>


<script>

/* =====================================================
   DATA PEGAWAI
===================================================== */

let pegawai = JSON.parse(
    localStorage.getItem("pegawaiDishub")
) || [

    {
        nama:"Ahmad Fauzi",
        nip:"198701012020011001",
        jabatan:"Staff Administrasi"
    },

    {
        nama:"Siti Nurhaliza",
        nip:"198802022021022002",
        jabatan:"Staff Kepegawaian"
    },

    {
        nama:"Budi Santoso",
        nip:"198903032022033003",
        jabatan:"Staff Lalu Lintas"
    },

    {
        nama:"Dewi Lestari",
        nip:"199004042023044004",
        jabatan:"Staff Angkutan"
    },

    {
        nama:"Rudi Hermawan",
        nip:"199105052024055005",
        jabatan:"Staff Perparkiran"
    }

];


/* =====================================================
   DATA ABSENSI
===================================================== */

let absensi = JSON.parse(
    localStorage.getItem("absensiDishub")
) || [

    {
        nama:"Ahmad Fauzi",
        tanggal:"2026-08-27",
        jamMasuk:"07:45",
        jamPulang:"16:00",
        status:"Hadir",
        keterangan:""
    },

    {
        nama:"Siti Nurhaliza",
        tanggal:"2026-08-27",
        jamMasuk:"08:00",
        jamPulang:"16:00",
        status:"Hadir",
        keterangan:""
    },

    {
        nama:"Budi Santoso",
        tanggal:"2026-08-27",
        jamMasuk:"-",
        jamPulang:"-",
        status:"Izin",
        keterangan:"Keperluan keluarga"
    },

    {
        nama:"Dewi Lestari",
        tanggal:"2026-08-27",
        jamMasuk:"-",
        jamPulang:"-",
        status:"Sakit",
        keterangan:"Sakit"
    },

    {
        nama:"Rudi Hermawan",
        tanggal:"2026-08-27",
        jamMasuk:"-",
        jamPulang:"-",
        status:"Alpha",
        keterangan:""
    }

];


/* =====================================================
   LOCAL STORAGE
===================================================== */

function saveData(){

    localStorage.setItem(
        "pegawaiDishub",
        JSON.stringify(pegawai)
    );

    localStorage.setItem(
        "absensiDishub",
        JSON.stringify(absensi)
    );

}


/* =====================================================
   MODAL
===================================================== */

function openModal(id){

    document.getElementById(id)
        .classList.add("show");

}

function closeModal(id){

    document.getElementById(id)
        .classList.remove("show");

}


/* klik luar popup */

window.onclick=function(event){

    if(event.target.classList.contains("modal")){

        event.target.classList.remove("show");

    }

};


/* =====================================================
   JAM REALTIME
===================================================== */

function updateClock(){

    let sekarang=new Date();

    let jam=sekarang.toLocaleTimeString(
        "id-ID",
        {
            hour:"2-digit",
            minute:"2-digit",
            second:"2-digit"
        }
    );

    document.getElementById("jam")
        .textContent=jam;

}

setInterval(updateClock,1000);

updateClock();


/* =====================================================
   TANGGAL DEFAULT
===================================================== */

function tanggalHariIni(){

    let sekarang=new Date();

    let tahun=sekarang.getFullYear();

    let bulan=String(
        sekarang.getMonth()+1
    ).padStart(2,"0");

    let tanggal=String(
        sekarang.getDate()
    ).padStart(2,"0");

    return `${tahun}-${bulan}-${tanggal}`;

}

document.getElementById("tanggal").value=
    tanggalHariIni();


/* =====================================================
   TAMPIL DATA PEGAWAI
===================================================== */

function tampilPegawai(){

    let tbody=
        document.getElementById("tabelPegawai");

    let select=
        document.getElementById("namaPegawai");

    tbody.innerHTML="";
    select.innerHTML=
        `<option value="">
        -- Pilih Pegawai --
        </option>`;

    pegawai.forEach(function(p,index){

        tbody.innerHTML+=`

        <tr>

            <td>${index+1}</td>

            <td>${p.nama}</td>

            <td>${p.nip}</td>

            <td>${p.jabatan}</td>

            <td>

                <button
                    class="btn-small"
                    style="background:#0288d1"
                    onclick="detailPegawai(${index})">

                    <i class="fas fa-eye"></i>

                </button>

                <button
                    class="btn-small"
                    style="background:#c62828"
                    onclick="hapusPegawai(${index})">

                    <i class="fas fa-trash"></i>

                </button>

            </td>

        </tr>

        `;


        select.innerHTML+=`

            <option value="${p.nama}">
                ${p.nama}
            </option>

        `;

    });


    document.getElementById("totalPegawai")
        .textContent=pegawai.length;

    document.getElementById("badgePegawai")
        .textContent=pegawai.length;

}


/* =====================================================
   TAMBAH PEGAWAI
===================================================== */

function tambahPegawai(){

    let nama=prompt("Nama pegawai:");

    if(!nama) return;

    let nip=prompt("NIP pegawai:");

    if(!nip) return;

    let jabatan=prompt("Jabatan:");

    if(!jabatan) return;

    pegawai.push({

        nama:nama,
        nip:nip,
        jabatan:jabatan

    });

    saveData();

    tampilPegawai();

    showToast("Pegawai berhasil ditambahkan");

}


/* =====================================================
   DETAIL PEGAWAI
===================================================== */

function detailPegawai(index){

    let p=pegawai[index];

    alert(

        "DATA PEGAWAI\n\n"+
        "Nama : "+p.nama+"\n"+
        "NIP : "+p.nip+"\n"+
        "Jabatan : "+p.jabatan

    );

}


/* =====================================================
   HAPUS PEGAWAI
===================================================== */

function hapusPegawai(index){

    if(confirm(
        "Hapus data pegawai ini?"
    )){

        pegawai.splice(index,1);

        saveData();

        tampilPegawai();

        showToast(
            "Data pegawai berhasil dihapus"
        );

    }

}


/* =====================================================
   SIMPAN ABSENSI
===================================================== */

document.getElementById(
    "formAbsensi"
).addEventListener(
    "submit",
    function(e){

        e.preventDefault();

        let nama=
            document.getElementById(
                "namaPegawai"
            ).value;

        let tanggal=
            document.getElementById(
                "tanggal"
            ).value;

        let status=
            document.getElementById(
                "status"
            ).value;

        let jamMasuk=
            document.getElementById(
                "jamMasuk"
            ).value;

        let jamPulang=
            document.getElementById(
                "jamPulang"
            ).value;

        let keterangan=
            document.getElementById(
                "keterangan"
            ).value;


        if(
            status==="Izin" ||
            status==="Sakit" ||
            status==="Alpha"
        ){

            jamMasuk="-";
            jamPulang="-";

        }


        absensi.push({

            nama:nama,
            tanggal:tanggal,
            jamMasuk:jamMasuk || "-",
            jamPulang:jamPulang || "-",
            status:status,
            keterangan:keterangan

        });


        saveData();

        tampilAbsensi();

        updateStatistik();

        e.target.reset();

        document.getElementById(
            "tanggal"
        ).value=tanggalHariIni();

        closeModal("absensiModal");

        showToast(
            "Absensi berhasil disimpan"
        );

    }
);


/* =====================================================
   STATUS CLASS
===================================================== */

function statusClass(status){

    if(status==="Hadir") return "hadir";

    if(status==="Izin") return "izin";

    if(status==="Sakit") return "sakit";

    return "alpha";

}


/* =====================================================
   TAMPIL ABSENSI
===================================================== */

function tampilAbsensi(){

    let tbody=
        document.getElementById(
            "tabelAbsensi"
        );

    tbody.innerHTML="";


    let data=
        [...absensi].reverse();


    data.forEach(function(a,index){

        let originalIndex=
            absensi.indexOf(a);

        tbody.innerHTML+=`

        <tr>

            <td>${index+1}</td>

            <td>
                <b>${a.nama}</b>
            </td>

            <td>${formatTanggal(a.tanggal)}</td>

            <td>${a.jamMasuk}</td>

            <td>${a.jamPulang}</td>

            <td>

                <span class="status ${statusClass(a.status)}">

                    ${a.status}

                </span>

            </td>

            <td>

                <div class="actions">

                    <button
                        class="btn-small"
                        style="background:#0288d1"
                        onclick="detailAbsensi(${originalIndex})">

                        <i class="fas fa-eye"></i>

                    </button>

                    <button
                        class="btn-small"
                        style="background:#c62828"
                        onclick="hapusAbsensi(${originalIndex})">

                        <i class="fas fa-trash"></i>

                    </button>

                </div>

            </td>

        </tr>

        `;

    });

}


/* =====================================================
   DETAIL ABSENSI
===================================================== */

function detailAbsensi(index){

    let a=absensi[index];

    alert(

        "DETAIL ABSENSI\n\n"+
        "Nama : "+a.nama+"\n"+
        "Tanggal : "+formatTanggal(a.tanggal)+"\n"+
        "Jam Masuk : "+a.jamMasuk+"\n"+
        "Jam Pulang : "+a.jamPulang+"\n"+
        "Status : "+a.status+"\n"+
        "Keterangan : "+(a.keterangan || "-")

    );

}


/* =====================================================
   HAPUS ABSENSI
===================================================== */

function hapusAbsensi(index){

    if(confirm(
        "Hapus data absensi ini?"
    )){

        absensi.splice(index,1);

        saveData();

        tampilAbsensi();

        updateStatistik();

        showToast(
            "Absensi berhasil dihapus"
        );

    }

}


/* =====================================================
   STATISTIK
===================================================== */

function updateStatistik(){

    let tanggal=tanggalHariIni();

    let data=absensi.filter(
        a=>a.tanggal===tanggal
    );


    let hadir=data.filter(
        a=>a.status==="Hadir"
    ).length;

    let izin=data.filter(
        a=>a.status==="Izin"
    ).length;

    let sakit=data.filter(
        a=>a.status==="Sakit"
    ).length;

    let alpha=data.filter(
        a=>a.status==="Alpha"
    ).length;


    document.getElementById(
        "totalHadir"
    ).textContent=hadir;


    document.getElementById(
        "totalIzinSakit"
    ).textContent=izin+sakit;


    document.getElementById(
        "totalAlpha"
    ).textContent=alpha;


    document.getElementById(
        "rekapHadir"
    ).textContent=hadir;


    document.getElementById(
        "rekapIzin"
    ).textContent=izin;


    document.getElementById(
        "rekapSakit"
    ).textContent=sakit;


    document.getElementById(
        "rekapAlpha"
    ).textContent=alpha;

}


/* =====================================================
   LAPORAN
===================================================== */

function openLaporan(){

    openModal("laporanModal");

    tampilLaporan(absensi);

}


/* =====================================================
   TAMPIL LAPORAN
===================================================== */

function tampilLaporan(data){

    let tbody=
        document.getElementById(
            "tabelLaporan"
        );

    tbody.innerHTML="";


    let hadir=0;
    let izin=0;
    let sakit=0;
    let alpha=0;


    data.forEach(function(a,index){

        if(a.status==="Hadir") hadir++;

        if(a.status==="Izin") izin++;

        if(a.status==="Sakit") sakit++;

        if(a.status==="Alpha") alpha++;


        tbody.innerHTML+=`

        <tr>

            <td>${index+1}</td>

            <td>${a.nama}</td>

            <td>${formatTanggal(a.tanggal)}</td>

            <td>
                <span class="status ${statusClass(a.status)}">
                    ${a.status}
                </span>
            </td>

            <td>${a.jamMasuk}</td>

            <td>${a.jamPulang}</td>

        </tr>

        `;

    });


    document.getElementById(
        "lapHadir"
    ).textContent=hadir;


    document.getElementById(
        "lapIzin"
    ).textContent=izin;


    document.getElementById(
        "lapSakit"
    ).textContent=sakit;


    document.getElementById(
        "lapAlpha"
    ).textContent=alpha;

}


/* =====================================================
   FILTER LAPORAN
===================================================== */

function filterLaporan(){

    let mulai=
        document.getElementById(
            "filterMulai"
        ).value;

    let sampai=
        document.getElementById(
            "filterSampai"
        ).value;


    let hasil=absensi.filter(
        function(a){

            if(
                mulai &&
                a.tanggal < mulai
            ){
                return false;
            }

            if(
                sampai &&
                a.tanggal > sampai
            ){
                return false;
            }

            return true;

        }
    );


    tampilLaporan(hasil);

}


/* =====================================================
   EXPORT CSV
===================================================== */

function exportCSV(){

    let csv=
        "No,Nama Pegawai,Tanggal,Jam Masuk,Jam Pulang,Status,Keterangan\n";


    absensi.forEach(function(a,index){

        csv+=
            `${index+1},`+
            `"${a.nama}",`+
            `${a.tanggal},`+
            `${a.jamMasuk},`+
            `${a.jamPulang},`+
            `${a.status},`+
            `"${a.keterangan || ""}"\n`;

    });


    let blob=new Blob(
        [csv],
        {
            type:"text/csv;charset=utf-8;"
        }
    );


    let url=
        URL.createObjectURL(blob);


    let link=
        document.createElement("a");


    link.href=url;

    link.download=
        "laporan-absensi-dishub.csv";


    link.click();

    URL.revokeObjectURL(url);


    showToast(
        "Laporan berhasil diexport"
    );

}


/* =====================================================
   PENGATURAN
===================================================== */

function simpanPengaturan(){

    let nama=
        document.getElementById(
            "namaInstansi"
        ).value;

    let masuk=
        document.getElementById(
            "settingMasuk"
        ).value;

    let pulang=
        document.getElementById(
            "settingPulang"
        ).value;


    localStorage.setItem(
        "namaInstansi",
        nama
    );

    localStorage.setItem(
        "jamMasukDishub",
        masuk
    );

    localStorage.setItem(
        "jamPulangDishub",
        pulang
    );


    showToast(
        "Pengaturan berhasil disimpan"
    );

    closeModal("pengaturanModal");

}


/* =====================================================
   FORMAT TANGGAL
===================================================== */

function formatTanggal(tanggal){

    if(!tanggal) return "-";

    let bagian=
        tanggal.split("-");

    return bagian[2]+"-"+
           bagian[1]+"-"+
           bagian[0];

}


/* =====================================================
   TOAST
===================================================== */

function showToast(pesan){

    let toast=
        document.getElementById(
            "toast"
        );

    document.getElementById(
        "toastText"
    ).textContent=pesan;


    toast.classList.add("show");


    setTimeout(function(){

        toast.classList.remove("show");

    },3000);

}


/* =====================================================
   DASHBOARD
===================================================== */

function dashboard(){

    closeModal("pegawaiModal");
    closeModal("absensiModal");
    closeModal("laporanModal");
    closeModal("pengaturanModal");
    closeModal("bantuanModal");

}


/* =====================================================
   LOAD DATA SAAT HALAMAN DIBUKA
===================================================== */

tampilPegawai();

tampilAbsensi();

updateStatistik();


/* LOAD PENGATURAN */

let namaInstansi=
    localStorage.getItem(
        "namaInstansi"
    );

let settingMasuk=
    localStorage.getItem(
        "jamMasukDishub"
    );

let settingPulang=
    localStorage.getItem(
        "jamPulangDishub"
    );


if(namaInstansi){

    document.getElementById(
        "namaInstansi"
    ).value=namaInstansi;

}

if(settingMasuk){

    document.getElementById(
        "settingMasuk"
    ).value=settingMasuk;

}

if(settingPulang){

    document.getElementById(
        "settingPulang"
    ).value=settingPulang;

}

</script>

</body>
</html>