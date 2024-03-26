<footer class="footer">
    <div class="content has-text-centered">
        <p>
            @if(\App\Models\Site::hasFooterMenu())
                @foreach(\App\Models\Site::getFooterMenuItems() as $menuItem)
                    <a class="neso" href="{{ url($menuItem->slug) }}">
                        {{ $menuItem->title }}
                    </a> |
                @endforeach
            @endif

            <a href=""><i class="fa-brands fa-pinterest-p"></i></a>&nbsp;
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>&nbsp;&nbsp;
            <a href=""><i class="fa-brands fa-twitter"></i></a>&nbsp;&nbsp;
            <a href=""><i class="fa-brands fa-instagram"></i></a>&nbsp;
        </p>
        <p class="neso">
            © 2024 by Nikos Pitsilos
        </p>
    </div>
</footer>

