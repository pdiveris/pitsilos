<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <h1 class="title logo">
            Nikos Pitsilos
        </h1>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        @include('partials.menu_start')

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <button id="js-cycle" class="bd-cycle js-burger" data-theme-toggle>
                        <div class="bd-cycles">
                            <div class="bd-cycle-sun" id="icon_sun">
                              <span class="icon">
                                <i class="fas fa-lg fa-sun" aria-hidden="true"></i>
                              </span>
                            </div>
                            <div class="bd-cycle-moon" id="icon_moon">
                              <span class="icon">
                                <i class="fas fa-lg fa-moon" aria-hidden="true"></i>
                              </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    const button = document.querySelector("[data-theme-toggle]");

    let currentThemeSetting = localStorage.getItem("theme") ?? 'dark';
    document.querySelector("html").setAttribute("class", 'theme-' + currentThemeSetting);

    if (currentThemeSetting === 'dark') {
        document.getElementById('icon_moon').style.display = 'none';
    } else{
        document.getElementById('icon_sun').style.display = 'none';
    }

    button.addEventListener("click", () => {
        const newTheme = currentThemeSetting === "dark" ? "light" : "dark";

        document.getElementById('icon_moon').style.display = newTheme === 'dark' ? 'none' : 'block';
        document.getElementById('icon_sun').style.display = newTheme === 'dark' ? 'block' : 'none';

        // update theme attribute on HTML to switch theme in CSS
        document.querySelector("html").setAttribute("class", 'theme-' + newTheme);

        // update in local storage
        localStorage.setItem("theme", newTheme);

        // update the currentThemeSetting in memory
        currentThemeSetting = newTheme;
    });
</script>
