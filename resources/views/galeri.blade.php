@extends('layouts.main')

@section('content')
    <section id="galeri" class="mt-5">
        <main>
            <div class="album py-3 bg-body-tertiary">
                <div class="container-fluid">
                    <div class="row" id="galleryContainer" style="overflow: hidden">
                        @foreach ($galleries->take(6) as $gallery)
                            <div class="col-md-4" data-aos="slide-up">
                                <div class="card shadow-sm">
                                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="Gambar Galeri">
                                    <div class="card-body">
                                        <p class="card-text">{{ $gallery->name }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="{{ route('gallery.show', $gallery->id) }}"
                                                    class="btn btn-sm btn-danger">Lihat</a>
                                                <a href="{{ route('gallery.download', $gallery->id) }}"
                                                    class="btn btn-sm btn-dark">Unduh</a>
                                            </div>
                                            <small
                                                class="text-body-secondary">{{ $gallery->created_at->diffForHumans(null, true) }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-3" id="loadMoreContainer">
                        @if ($galleries->count() > 6)
                            <button id="loadMoreBtn" class="btn btn-dark">Tampilkan Lebih Banyak</button>
                        @endif
                    </div>
                </div>
            </div>
        </main>
        <img src="{{ asset('img/wave/wave-top.png') }}" class="img-fluid" alt="">

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const galleries = @json($galleries->slice(6)->values());
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            const galleryContainer = document.getElementById('galleryContainer');
            const loadMoreContainer = document.getElementById('loadMoreContainer');

            if (galleries.length === 0) {
                loadMoreContainer.style.display = 'none';
            }

            loadMoreBtn.addEventListener('click', function() {
                galleries.forEach(function(gallery) {
                    const galleryHtml = `
                        <div class="col" data-aos="slide-up">
                            <div class="card shadow-sm">
                                <img src="{{ asset('images/') }}/${gallery.image}" alt="Gambar Galeri">
                                <div class="card-body">
                                    <p class="card-text">${gallery.name}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route('gallery.show', ':id') }}".replace(':id', ${gallery.id})
                                                class="btn btn-sm btn-danger">Lihat</a>
                                            <a href="{{ route('gallery.download', ':id') }}".replace(':id', ${gallery.id})
                                                class="btn btn-sm btn-dark">Unduh</a>
                                        </div>
                                        <small
                                            class="text-body-secondary">${gallery.created_at}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    galleryContainer.innerHTML += galleryHtml;
                });

                loadMoreContainer.style.display = 'none';
            });
        });
    </script>
@endsection
