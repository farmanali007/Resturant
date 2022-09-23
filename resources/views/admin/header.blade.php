<nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form action="{{url('/search_food')}}" method="POST" class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  @csrf
                  <input style="color:green;" type="text" class="form-control" name="search" placeholder="Search For Food Menu">
                  <input type="submit" class="submit ml-5 btn btn-primary" value="Search">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              
             
              <li>
              <x-app-layout>
              </x-app-layout>
              </li>
              </ul>
         
          </div>
        </nav>