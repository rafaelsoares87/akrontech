<footer>
    <div class="footer " style="background-color: #421b9b ">
        <div class="container m-auto">
            <div class="text-white pt-4 pb-3">
                <div class="row ">
                    <div class="col-md-4 mb-3 ">
                        <div class="card"
                            style="-webkit-box-shadow: 10px 13px 7px -3px #000000; 
                        box-shadow: 10px 13px 7px -3px #000000;">

                            @foreach ($webs as $web)
                                
                                <ul class="">

                                    <li class="list-group-item text-dark mb-3">
                                        <h3>Contato</h3>
                                    </li>

                                    <li class="list-group-item text-dark mb-3">
                                       
                                        <i class="fa-brands fa-whatsapp"></i> {{$web->web_phone_number}} 
                                    </li>
                                    <li class="list-group-item text-dark mb-3">
                                        <i class="fa-solid fa-phone"></i> {{$web->web_phone_whatsapp}}
                                    </li>
                                    <li class="list-group-item text-dark mb-3">
                                        <i class="fa-solid fa-envelope"></i> {{$web->web_email}}

                                    </li>
                                </ul>
                            @endforeach


                        </div>
                    </div>
                    <div class="col-md-4 mb-3  ">
                        <div class="">

                            <ul class="">
                                <li class="list-group-item mb-3">
                                    <h3>Serviços</h3>
                                </li>
                                <li class="list-group-item nav-item mb-3" style="font-weight: bold">
                                    <a href="{{ route('landingpage') }}" class="nav-link"> Landing Pages</a>
                                </li>
                                <li class="list-group-item nav-item mb-3"style="font-weight: bold">
                                    <a href="{{ route('website') }}"class="nav-link"> Sites </a>
                                </li>
                                <li class="list-group-item nav-item mb-3"style="font-weight: bold"> <a
                                        href="{{ route('store') }}"class="nav-link"> Lojas Online</a></li>
                                <li class="list-group-item nav-item mb-3"style="font-weight: bold">
                                    <a href="{{ route('googleads') }}" class="nav-link"> Marketing Digital </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="">

                            <ul class="">
                                <li class="list-group-item">
                                    <h3>Redes Sociais</h3>
                                </li><br>

                                <li class="list-group-item nav-item mb-3">
                                    <a href="https://www.facebook.com/anvi.misturadores" class="nav-link">
                                        <i class="fa-brands fa-facebook fa-2x">

                                        </i>
                                        Facebook
                                    </a>

                                </li>
                                <li class="list-group-item nav-item mb-3">
                                    <a href="http://" class="nav-link">
                                        <i class="fa-brands fa-instagram fa-2x"></i> Instagram
                                    </a>
                                </li>
                                <li class="list-group-item nav-item mb-3"><i class="fa-brands fa-telegram fa-2x"></i>
                                    Telegram
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <hr>
            <div class="container text-white text-center mb-3">
                © 2022 - Todos os direitos reservados Akrontech
            </div>
            <div class="container text-center text-white">


                <ul class="nav justify-content-center">

                    <li class="nav-item">
                        <a class="nav-link" href="https://br.freepik.com/fotos-vetores-gratis/internet">Créditos das
                            imagens: Designed by stories / Freepik</a>
                    </li>


                </ul>


            </div>
        </div>
    </div>
</footer>
