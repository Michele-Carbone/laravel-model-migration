<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('pages.home') }}">Travel Go</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('home') ? 'active' : '' }} " aria-current="page" href="{{ route('pages.home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('travels') ? 'active' : '' }}" href="{{ route('travels.index') }}">Travel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('contacts') ? 'active' : '' }}" href="{{ route('pages.contacts') }}">Contact</a>
          </li>
                  
        </ul>
      </div>
    </div>
    
</nav>

<nav class="navbar-expand-lg  navbar navbar-dark bg-primary">
  <div class="container">
    <div class="collapse navbar-collapse d-flex justify-content-around " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item me-5 ms-5 ">
          <a class="nav-link text-white {{request()->routeIs('home') ? 'active' : '' }} " aria-current="page" href="{{ route('pages.home') }}">Vacanze</a>
        </li>
        <li class="nav-item me-5 ms-5">
          <a class="nav-link text-white {{request()->routeIs('travels') ? 'active' : '' }}" href="{{ route('travels.index') }}">Destinazione</a>
        </li>
        <li class="nav-item me-5 ms-5">
          <a class="nav-link text-white {{request()->routeIs('contacts') ? 'active' : '' }}" href="{{ route('pages.contacts') }}">Offerte</a>
        </li>
        <li class="nav-item me-5 ms-5">
          <a class="nav-link text-white {{request()->routeIs('home') ? 'active' : '' }} " aria-current="page" href="{{ route('pages.home') }}">Pacchetti</a>
        </li>
        <li class="nav-item me-5 ms-5">
          <a class="nav-link text-white {{request()->routeIs('travels') ? 'active' : '' }}" href="{{ route('travels.index') }}">Hotel</a>
        </li>
        <li class="nav-item me-5 ms-5">
          <a class="nav-link text-white {{request()->routeIs('contacts') ? 'active' : '' }}" href="{{ route('pages.contacts') }}">Crociera</a>
        </li>
                
      </ul>
    </div>
  </div>
  
</nav>
