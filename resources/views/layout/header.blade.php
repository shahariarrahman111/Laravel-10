<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-warning">

    <a href="#" class="navbar-brand">
        <img src="{{asset('images/logo.jpg')}}" alt="" style="height: 60px; width: 60px;" class="pic">
    </a>

    <div class="container-fluid" id="head">
      <!-- Links -->
      <ul class="navbar-nav navbar-collapse justify-content-center" id="unorder">
        <li class="nav-item">
          <a class="nav-link " href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"">Blog</a>
          </li>
      </ul>

      <form class="d-flex">
        <input type="text" placeholder="search" class="form-control me-2" id="search">
        <button class="btn btn-primary " type="submit" id="butto">Search</button>
      </form>
    </div>
  