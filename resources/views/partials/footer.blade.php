@php use App\Models\Site; @endphp
<footer class="footer">
    <div class="content has-text-centered">
        <p>
            @if(Site::hasFooterMenu())
                @foreach(Site::getFooterMenuItems() as $menuItem)
                <a class="is-size-7-mobile sofia" href="{{ url($menuItem->slug) }}">
                    {{ $menuItem->translate($locale)->title ?? $menuItem->title }}
                </a> |
                @endforeach
            @endif
            <a href=""><i class="fa-brands fa-pinterest-p"></i></a>&nbsp;
            <a href="https://www.facebook.com/groups/8160377530655543/">
                <i class="fa-brands fa-facebook-f"></i>
            </a>&nbsp;
            <a href=""><i class="fa-brands fa-twitter"></i></a>&nbsp;&nbsp;
            <a href=""><i class="fa-brands fa-instagram"></i></a>&nbsp;
        </p>
        <p class="geist">
            © 2024 by Nikos Pitsilos
        </p>
    </div>
</footer>

