@php
    $footer_menu_info = config('menues.footer_menu.info');
    $footer_menu_social = config('menues.footer_menu.social');
@endphp

<footer>
    <div class="container">
        <div class="foot-box d-flex">

            <div class="information-footer">
                <h4>Booleando s.r.l</h4>
                @foreach ($footer_menu_info as $item)
                    <a href="#"><span>{{ $item['text'] }}</span></a>
                @endforeach
            </div>

            <nav class="footer-icons">
                <h5>Trovaci anche su</h5>
                <ul>
                    @foreach ($footer_menu_social as $icon)
                        <li>
                            <a href="#"><i class="{{ $icon['icon'] }}"></i></a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</footer>
