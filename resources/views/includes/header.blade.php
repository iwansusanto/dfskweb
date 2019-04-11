<nav class="navbar navbar-expand-md navbar-main bg-main">
    <!-- Brand -->
    <a class="navbar-brand" href={{ url('/') }}>
        <div class="logo-box py-4 px-2 d-none d-xl-block">
            <img id="logo" alt="Logo" src={{ asset( 'images/global/logo-dfsk.png') }} width="215" height="185">
        </div>
        <div class="d-none d-md-block">
            <img id="logo" alt="Logo" src={{ asset( 'images/global/logo-dfsk.png') }} width="40" height="30">
        </div>
    </a>

    <!-- Toggler/collapsibe Button -->
    <button 
        class="navbar-toggler" 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarNavCollapse" 
        aria-controls="navbarNavCollapse"
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarNavCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" 
                    data-toggle="collapse" 
                    href="#collapseSupport" 
                    role="button" 
                    aria-expanded="false" 
                    aria-controls="collapseSupport">&nbsp;&nbsp;&nbsp;SUPPORT 
                    <span class="sr-only">(current)</span>
                    &nbsp;&nbsp;&nbsp;0800 1666 999 <i class="fa fa-chevron-down"></i></a>
                <div class="collapse collapseSupport" id="collapseSupport">
                    <div class="card card-body rounded-0 border-0">
                        <div class="collapse-down">
                            &nbsp;SUPPORT  <span class="fa fa-chevron-up"></span>
                        </div>
                        <div class="callsupportCollapse font-weight-bold py-4">
                            0800 1666 999
                        </div>
                    </div>
                </div>    
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src={{ asset( 'images/global/lang-in.png') }} alt="Indonesia">
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                                <img src={{ asset( 'images/global/lang-en.png') }} alt="Indonesia">
                            </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">VEHICLES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">NEWS & EVENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CAREERS</a>
            </li>
        </ul>
    </div>
</nav>

