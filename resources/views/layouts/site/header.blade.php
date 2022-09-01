<header class="">
    <nav class="navbar navbar-expand-lg bg-white m-3 ">
        <div class="container ">
            <a class="navbar-brand " href="{{ route('home') }}" style="color: #421b9b; font-weight: bold ">AKRONTECH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon  "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link nav-link-2 " href="{{ route('home') }}"> HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2 " href="{{ route('home') }}#service"> SERVIÇOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-2 " href="{{ route('googleads') }}">MARKETING DIGITAL</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-link-2 " href="{{ route('home') }}#contact">CONTATO</a>
                    </li>



                </ul>

            </div>
        </div>
    </nav>
    @if ($errors->any())
        <div class="alert alert-danger container">
            @foreach ($errors->all() as $error)
                <li class="error">
                    {{ $error }}
                </li>
            @endforeach
        </div>

    @endif
</header>
