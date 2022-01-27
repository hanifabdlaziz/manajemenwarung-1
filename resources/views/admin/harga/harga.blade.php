<x-app-layout>
    <x-slot name="title">
        Harga
    </x-slot>

    <div class="col text-right">
        <a href="{{ route('admin.pembelian.tambah') }}" class="btn btn-primary">Tambah</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hovered" id="table">
            <thead>
                <tr align="center">
                    <th width="5%">ID</th>
                    <th >Nama Barang</th>
                    <th >Tanggal Beli</th>
                    <th >Harga Ecer</th>
                    <th >Harga Grosir</th>
                    <th >Harga Jual</th>
                    <th >Status</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($harga as $h)
                <tr align="center">
                    <td >{{ $h->id }}</td>
                    <td >{{ $h->nama_barang }}</td>
                    <td >{{ $h->tanggal_beli}}</td>
                    <td >{{ $h->harga_ecer }}</td>
                    <td >{{ $h->harga_grosir }}</td>
                    <td >{{ $h->harga_jual }}</td>
                    <td >{{ $h->status}}</td>

                    <td >
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.harga.edit',[$h->id]) }}" class="btn btn-warning btn-sm">Edit
                                <i class="mdi mdi-tooltip-edit"></i>
                            </a>
                            <a href="{{ route('admin.harga.delete',[$h->id]) }}"
                                onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">Hapus
                                <i class="mdi mdi-delete-forever"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <x-slot name="script">
        <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
    </x-slot>
</x-app-layout>
