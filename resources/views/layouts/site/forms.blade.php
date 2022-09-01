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
                        <a href="http://" class="btn btn-dark btn-lg mb-3" style="font-weight: bold"> <i
                                class="fa-solid fa-phone"></i>
                            LIGAR
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('home') }}" method="post">
                    @csrf
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="mb-2">
                                    
                                    <input type="text"
                                        class="form-control  @if ($errors->has('nome')) is-invalid @endif"
                                        name="nome" placeholder="Nome" value="{{ old('nome') }}" > 
                                    

                                    @if ($errors->has('nome'))
                                        <div class="invalid-feedback">
                                            @foreach ($errors->get('nome') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>
                                    @endif

                                </div>
                            </div>
                            <div class="">
                                <div class="mb-2">
                                    <input type="email"
                                        class="form-control @if ($errors->has('email')) is-invalid @endif"
                                        name="email" placeholder="E-mail" value="{{ old('email') }}">
                                    @if ($errors->has('email'))

                                        <div class="invalid-feedback">
                                            @foreach ($errors->get('email') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>


                                    @endif
                                </div>


                            </div>
                            <div class="">
                                <div class="mb-2">
                                    <input type="tel"
                                        class="form-control @if ($errors->has('telefone')) is-invalid @endif"
                                        name="telefone" id="telefone" onkeyup="mascaraFone(event)"
                                        placeholder="Celular: (xx) xxxxx-xxxx" value="{{ old('telefone') }}">

                                    @if ($errors->has('telefone'))

                                        <div class="invalid-feedback">
                                            @foreach ($errors->get('telefone') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>


                                    @endif
                                </div>

                            </div>

                            <div class="">
                                <select class="form-select mb-2" aria-label="Default select example"
                                    name="select_service">
                                    <option selected>Escolha um serviço</option>
                                    <option value="Site Institucional">Site Institucional</option>
                                    <option value="Landing Page">Landing pages</option>
                                    <option value="Loja Online">Loja Online</option>
                                    <option value="Marketing Digital">Marketing Digital</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>


                            <div class="">
                                <div class="mb-2">
                                    <textarea name="mensagem" class="form-control @if ($errors->has('mensagem')) is-invalid @endif" id=""
                                        value="{{ old('mensagem') }}"></textarea>
                                    @if ($errors->has('mensagem'))

                                        <div class="invalid-feedback">
                                            @foreach ($errors->get('mensagem') as $error)
                                                {{ $error }}
                                            @endforeach
                                        </div>


                                    @endif

                                </div>
                            </div>
                            <div class="">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-violet btn-lg" type="button">ENVIAR
                                        MENSAGEM</button>


                                </div>
                            </div>



                        </div>
                    </div>
                </form>


            </div>
        </div>

    </div>

</section>
