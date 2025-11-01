<x-app-layout>
    <div class="max-w-2x1 max-auto bg-white p-6 rounded-lg shadow mt-8">
        <h2 class="text-x1 font-semibold nb-4">
            step 4 Alamat Domisili & Referensi Pendaftaran
        </h2>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('ekyc.step4.store') }}">
            @csrf

            {{-- Alamat Domisili Lengkap --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Alamat Domisili Lengkap</label>
                <textarea name="alamatDomisili" rows="2"
                            class="mt-1 block w-full border-gray-300 rounded-md">{{ old('alamatDomisili', $data->alamatDomisili) }}</textarea>
            </div>

            {{-- Provinsi --}}
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Provinsi</label>
                <select name="provinsi" id="provinsi" class="mt-1 block w-full border-gray-300 rounded-md">
                    <option value="">-- Pilih Provinsi --</option>
                    @foreach($provinsiList as $prov)
                </select>
            </div>
        </form>
    </div>
</x-app-layout>