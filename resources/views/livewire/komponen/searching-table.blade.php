<div class="row mb-2 mt-4">
    <div class="col-12 col-md-4 ">
        <select class="form-select form-select-sm" wire:model.live="perPage">
            <option selected value="10">Tampilkan 10 Data</option>
            <option value="20">Tampilkan 20 Data</option>
            <option value="50">Tampilkan 50 Data</option>
            <option value="100">Tampilkan 100 Data</option>
        </select>
    </div>
    <div class="col-12 col-md-4 text-center">
        <span class="fw-bold">Daftar Pengguna</span>
    </div>
    <div class="col-12 col-md-4 text-md-end">
        <input type="search" wire:model.live.debounce.300ms="search" class="form-control form-control-sm"
            placeholder="Cari pengguna...">
    </div>
</div>
