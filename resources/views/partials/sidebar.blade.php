<nav id='sidebar' class="bg-dark navbar-dark">
    <a href="/" class="nav-link text-light">
        <h2 class="p-2"><i class="fa-solid fa-folder-open pe-2"></i>Boolfolio</h2>
    </a>
    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link"  {{Route::currentRouteName() === 'admin.dashboard.index' ? 'active' : ''}} href="{{route('admin.projects.index')}}">
            <i class="fa-solid fa-link pe-2"></i>Link
        </a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  {{Route::currentRouteName() === 'admin.projects.index' ? 'active' : ''}} href="#"><i class="fa-solid fa-diagram-project pe-2"></i>Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
</nav>