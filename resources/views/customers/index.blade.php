@extends('layouts.app') @section('title', 'Data Pelanggan') @section('content') <div class="bg-white rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6">Data Pelanggan</h2>
    <table class="w-full text-left">
        <thead>
            <tr class="border-b bg-gray-50">
                <th class="p-3">No</th>
                <th class="p-3">Nama</th>
                <th class="p-3">Nomor HP</th>
                <th class="p-3">Alamat</th>
            </tr>
        </thead>
        <tbody> @forelse ($customers as $customer) <tr class="border-b">
                <td class="p-3">{{ $loop->iteration }}</td>
                <td class="p-3">{{ $customer->name }}</td>
                <td class="p-3">{{ $customer->phone }}</td>
                <td class="p-3">{{ $customer->address ?? '-' }}</td>
            </tr> @empty <tr>
                <td colspan="4" class="p-4 text-center"> Belum ada data pelanggan. </td>
            </tr> @endforelse </tbody>
    </table>
</div> @endsection