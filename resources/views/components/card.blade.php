<div class="card">
    <img src="{{ $image }}" alt="{{ $title }}" class="card-image">
    <div class="card-content">
        <h3 class="card-title">{{ $title }}</h3>
        <p class="card-description">{{ $description }}</p>
    </div>
    <div class="card-socials">
        @foreach ($socials as $platform => $link)
            <a href="{{ $link }}" class="social-link">
                <div class="social-icon">
                    <img src="{{ asset('images/circle.png') }}" alt="Circle" class="circle">
                    <img src="{{ asset('images/' . $platform . '.png') }}" alt="{{ ucfirst($platform) }}" class="icon">
                </div>
            </a>
        @endforeach
    </div>
</div>
