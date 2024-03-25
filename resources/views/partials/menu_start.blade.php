@if(\App\Models\Site::hasStartMenu())
<div class="navbar-start">
    @foreach(\App\Models\Site::getStartMenuItems() as $menuItem)
    <a class="navbar-item" href="{{ url($menuItem->slug) }}">
        {{ $menuItem->title }}
    </a>
    @endforeach
{{--
    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
            More
        </a>

        <div class="navbar-dropdown">
            <a class="navbar-item">
                About
            </a>
            <a class="navbar-item is-selected">
                Jobs
            </a>
            <a class="navbar-item">
                Contact
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
                Report an issue
            </a>
        </div>
    </div>
--}}
</div>
@endif
