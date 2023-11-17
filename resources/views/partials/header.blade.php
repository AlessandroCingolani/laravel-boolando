@php
    $header_gender = config('menues.header_menu.gender');
    $header_icons = config('menues.header_menu.icons');
@endphp
<header>
    <div class="top-fixed">
        <div class="container header-bar d-flex">

            <div class="gender">
                @foreach ($header_gender as $item)
                    <a href="{{ route($item['href']) }}"
                        class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}">{{ $item['text'] }}</a>
                @endforeach
            </div>

            <div class="logo">
                <a href="#"><img src="/img/boolean-logo.png" alt="logo"></a>
            </div>

            <nav class="top-icons">
                <ul>
                    @foreach ($header_icons as $icon)
                        <li>
                            <a href="#"><i class="{{ $icon['icon'] }}"></i></a>
                        </li>
                    @endforeach
                </ul>
            </nav>

        </div>
    </div>
</header>
