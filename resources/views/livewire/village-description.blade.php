<div class="py-4">
    <x-modal.body>
        <div class="grid grid-cols-6 gap-4">
            <p class="font-bold">Nama Desa</p>
            <p class="col-span-5">: {{ $village->name }}</p>
        </div>
        <div class="grid grid-cols-6 gap-4 mt-4">
            <p class="font-bold">Nama Kecamatan</p>
            <p class="col-span-5">: {{ $village->district_name }}</p>
        </div>
        <div class="flex flex-col mt-4">
            <p class="font-bold">Deskripsi</p>
            <p class="p-2">{{ empty($village->description) ? '-' : $village->description }}</p>
        </div>
    </x-modal.body>
</div>
