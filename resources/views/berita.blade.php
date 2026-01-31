@extends('layouts.frontend')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Semua Berita</h1>
            <p class="text-xl text-blue-100">Informasi terkini seputar perumahan dan komunitas</p>
        </div>
    </div>
</section>

<!-- Berita Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-6">
        
        <!-- Search Bar -->
        <div class="mb-8">
            <form action="{{ route('berita') }}" method="GET" class="relative max-w-2xl mx-auto">
                <input 
                    type="text" 
                    name="search" 
                    value="{{ $search ?? '' }}"
                    placeholder="Cari berita berdasarkan judul atau konten..." 
                    class="w-full px-6 py-4 pr-14 rounded-full border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition shadow-sm"
                >
                <button type="submit" class="absolute right-4 top-1/2 transform -translate-y-1/2 text-blue-600 hover:text-blue-700">
                    <i class="fas fa-search text-xl"></i>
                </button>
            </form>
            
            @if($search)
            <div class="text-center mt-4">
                <p class="text-gray-600">
                    Hasil pencarian untuk: <strong class="text-gray-900">"{{ $search }}"</strong>
                    <a href="{{ route('berita') }}" class="ml-2 text-blue-600 hover:underline">
                        <i class="fas fa-times-circle"></i> Hapus pencarian
                    </a>
                </p>
            </div>
            @endif
        </div>

        <!-- Berita Grid -->
        @if($beritas->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
            @foreach($beritas as $berita)
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow overflow-hidden flex flex-col h-full">
                @if($berita->image)
                    <img src="{{ Storage::url($berita->image) }}" alt="{{ $berita->title }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                        <i class="fas fa-newspaper text-white text-4xl"></i>
                    </div>
                @endif
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $berita->title }}</h3>
                    <p class="text-gray-600 mb-4 flex-grow">{{ $berita->excerpt ?? Str::limit(strip_tags($berita->content), 150) }}</p>
                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500">
                            <i class="far fa-calendar mr-1"></i>{{ $berita->published_at->format('d M Y') }}
                        </span>
                        <a href="#" class="text-blue-600 font-semibold hover:underline whitespace-nowrap">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="flex justify-center">
            {{ $beritas->links() }}
        </div>

        @else
        <!-- Empty State -->
        <div class="text-center py-20">
            <i class="fas fa-search text-gray-300 text-6xl mb-4"></i>
            <h3 class="text-2xl font-bold text-gray-700 mb-2">Tidak ada berita ditemukan</h3>
            <p class="text-gray-500 mb-6">
                @if($search)
                    Coba gunakan kata kunci yang berbeda
                @else
                    Belum ada berita yang dipublikasikan
                @endif
            </p>
            @if($search)
            <a href="{{ route('berita') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                <i class="fas fa-arrow-left"></i>
                <span>Lihat Semua Berita</span>
            </a>
            @endif
        </div>
        @endif

        <!-- Back to Home -->
        <div class="text-center mt-12">
            <a href="{{ route('home') }}#berita" class="inline-flex items-center gap-2 text-blue-600 font-semibold hover:underline">
                <i class="fas fa-arrow-left"></i>
                <span>Kembali ke Beranda</span>
            </a>
        </div>

    </div>
</section>
@endsection
