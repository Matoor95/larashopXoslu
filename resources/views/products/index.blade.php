@extends('layouts.app')
@section('title', 'Produits')
@section('content')
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-slate-900">
                Produits
            </h1>
            <p class="text-sm text-slate-500">Gestion du catalogue de LaraShop</p>

        </div>

    </div>
    <div class="overflow-hidden  rounded-xl bg-white shadow">
        <table class="min-w-full divide-y divide-slate-200">
            <thead class="bg-slate-950 text-white">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Image</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Produit</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Catégorie</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Prix</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Stock</th>
                    <th class="px-4 py-3 text-left text-sm font-semibold">Actions</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                @forelse ($products as $product )
                <tr class="hover:bg-slate-50">
                    <td class="px-4 py-3">
                        @if ($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->libelle }}" class="h-14 w-14 rounded-lg object-cover">
                        @else
                        <div class="h-14 w-14 rounded-lg bg-slate-200">

                        </div>
                            
                        @endif

                    </td>
                    <td class="px-4 py-3">
                        <div class="font-semibold  text-slate-900">
                            {{ $product->libelle }}

                        </div>

                    </td>

                </tr>
                    
                @empty
                    
                @endforelse

            </tbody>

        </table>

    </div>
@endsection
