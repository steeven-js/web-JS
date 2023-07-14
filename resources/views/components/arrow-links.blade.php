@if ($previousNewbie && $previousNewbie->is_visible)
    <a href="{{ route('newbie.show', $previousNewbie->slug) }}" class="arrow-link left-link">
        <svg class="arrow-svg" viewBox="0 0 24 24">
            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
        </svg>
    </a>
@endif

@if ($nextNewbie && $nextNewbie->is_visible)
    <a href="{{ route('newbie.show', $nextNewbie->slug) }}" class="arrow-link right-link">
        <svg class="arrow-svg" viewBox="0 0 24 24">
            <path d="M8.59 16.59L10 18l6-6-6-6-1.41 1.41L13.17 12z" />
        </svg>
    </a>
@endif
