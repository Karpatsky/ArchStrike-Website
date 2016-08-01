@set('pkg_count', 1)

@foreach($pkgupdates as $update)
    @if($pkg_count <= 6 && App\Abs::exists($update['pkgname']))
        @set('pkg_count', $pkg_count + 1)

        <div class="sidebar-box-item">
            <a href="/packages/{{ $update['pkgname'] }}">{{ $update['pkgname'] }}</a>
            {{ $update['pkgver'] }}-{{ $update['pkgrel'] }}

            @if($update['info'] == 1)
                <span class="info">(new)</span>
            @elseif($update['info'] == 2)
                <span class="info">(moved)</span>
            @endif

            {{-- <span class="date">{{ $update['date'] }}</span> --}}
        </div>
    @else
        @break
    @endif
@endforeach