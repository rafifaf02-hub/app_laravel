@extends('layouts.app') @section('title', 'Data Transaksi') @section('content') <div class="bg-white rounded-lg p-6">
    <h2 class="text-2xl font-bold mb-6"> Data Transaksi Laundry </h2>
    <table class="w-full text-left">
        <thead>
            <tr class="border-b bg-gray-50">
                <th class="p-3">Invoice</th>
                <th class="p-3">Pelanggan</th>
                <th class="p-3">Berat</th>
                <th class="p-3">Total Harga</th>
                <th class="p-3">Status</th>
            </tr>
        </thead>
        <tbody> @forelse ($transactions as $transaction) <tr class="border-b">
                <td class="p-3">{{ $transaction->invoice }}</td>
                <td class="p-3"> {{ $transaction->customer->name }} </td>
                <td class="p-3">{{ $transaction->weight }} Kg</td>
                <td class="p-3"> Rp {{ number_format($transaction->total_price, 0, ',', '.') }} </td>
                <td class="p-3"> {{ ucfirst($transaction->status) }} </td>
            </tr> @empty <tr>
                <td colspan="5" class="p-4 text-center"> Belum ada transaksi laundry. </td>
            </tr> @endforelse </tbody>
    </table>
</div> @endsection