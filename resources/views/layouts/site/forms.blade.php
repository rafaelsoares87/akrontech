<section id="contact"
    style="background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(236, 233, 236, 0.989) 0%, rgb(228, 225, 228) 100%);">

    <div class="container">
        <div class="row p-5">
            <div class="col-md-6">
                <div class="m-auto pt-4">
                    <h2 class="text-dark mb-4 " style="font-size: 2.rem; font-weight:bold">
                        CONFIRA MAIS DOS NOSSOS SERVIÇOS ATRAVÉS DO CONTATO:


                    </h2>
                  <div class="mb-3">
                    <a href="http://" class="btn btn-violet btn-lg mb-3"> <i class="fa-brands fa-whatsapp"></i>
                        WHATSAPP
                    </a>
                    <a href="http://" class="btn btn-dark btn-lg mb-3" style="font-weight: bold"> <i class="fa-solid fa-phone"></i>
                        LIGAR
                    </a>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{route('home')}}" method="post">
                    @csrf
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="mb-2">
                                    <input type="text" class="form-control" name="name" placeholder="Nome">
                                </div>
                            </div>
                            <div class="">
                                <div class="mb-2">
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="">
                                <div class="mb-2">
                                    <input type="tel" class="form-control" name="telefone" placeholder="Telefone">
                                </div>
                            </div>
    
                            <div class="">
                                <div class="mb-2">
                                    <textarea name="text" class="form-control" id="" ></textarea>
                                    
                                </div>
                            </div>
                            <div class="">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-violet btn-lg" type="button">ENVIAR MENSAGEM</button>
    
                                </div>
                            </div>
                            @if ($errors->any())
                                @foreach ($errors -> all() as $error )
                                    <li class="error">
                                        {{$error}}
                                    </li>
                                    
                                @endforeach
                            @endif
    
    
                        </div>
                    </div>
                </form>
                

            </div>
        </div>

    </div>

</section>