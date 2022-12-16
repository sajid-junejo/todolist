<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link {{ (Request::is('/')) ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item {{ (Request::is('todos/create')) ? 'active' : '' }}">
          <a class="nav-link" href="todos/create">Create</a>
        </li>
       
        {{-- <li class="nav-item {{ (Request::is('todos/{id}')) ? 'active' : '' }}">
          <a class="nav-link" href="todos/show/{id}">Show</a>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>