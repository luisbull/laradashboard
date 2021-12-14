<header>
  <nav>
    <ul>
      <li><a href="{{ route('home2') }}" class="{{ request()->routeIs('home2') ? 'active' : '' }}">Home2</a></li>
      <li><a href="{{ route('cursos.index') }}" class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a></li>
      <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a></li>
      <li><a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.*') ? 'active' : '' }}">Contact</a></li>
    </ul>
  </nav>
</header>