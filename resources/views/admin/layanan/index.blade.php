@extends('admin.layouts.app')

@section('title', 'Layanan - Admin Desa Digital')

@section('page-title', 'Layanan')

@section('content')
<div class="container-fluid" style="padding-top: 80px;">
    <div class="row">
        <div class="col-12">
            <div class="card animate-on-scroll fadeIn">
                <div class="card-header">
                    <h6 class="mb-0">Layanan Desa</h6>
                    <button class="btn btn-sm btn-soft-primary">
                        <i class="fas fa-plus me-1"></i> Tambah Layanan
                    </button>
                </div>
                <div class="card-body">
                    <p>Halaman ini akan menampilkan layanan-layanan desa yang tersedia untuk masyarakat.</p>
                    
                    <div class="table-responsive mt-4">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Layanan</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Pembuatan KTP</td>
                                    <td>Layanan pembuatan KTP elektronik</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-soft-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Surat Keterangan Domisili</td>
                                    <td>Penerbitan surat keterangan domisili</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-soft-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Surat Keterangan Usaha</td>
                                    <td>Penerbitan surat keterangan usaha</td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-soft-primary"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="btn btn-sm btn-soft-danger"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 