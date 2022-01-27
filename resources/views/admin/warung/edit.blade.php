<x-app-layout>
    <x-slot name="title">
        Edit Warung
    </x-slot>

    <div class="row mb-3">

        <div class="col text-right">
            <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.warung.update',[$warung->id]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="InputNama">Nama Warung</label>
                    <input type="text" class="form-control" name="nama_warung" value="{{ $warung->nama_warung }}">
                </div>
                <div class="form-group">
                    <label for="InputAlamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $warung->alamat }}">
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success text-right">Simpan</button>
                </div>
            </form>
        </div>
    </div>
   
    <x-slot name="script">
        <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
    </x-slot>
</x-app-layout>