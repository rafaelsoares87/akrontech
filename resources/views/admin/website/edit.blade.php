<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            PAINEL DE CONFIGURAÇÕES
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('dashboard') }}" class="nav-item nav-link mb-3">
                <h5><i class="fa-solid fa-angles-left"></i> Voltar para painel</h5>
            </a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                
                <div class="container m-4">
                    <div class="">
                        <form action="{{ route('admin-update', $webs->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="row">
                                
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Número de telefone</label>
                                        <input class="form-control mb-3" type="text" name="web_phone_number" value="{{ $webs->web_phone_number }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Whatsapp</label>
                                        <input class="form-control mb-3" type="text" name="web_phone_whatsapp" value="{{ $webs->web_phone_whatsapp }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Link Whatsapp</label>
                                        <input class="form-control mb-3" type="text" name="web_link_whatsapp" value="{{ $webs->web_link_whatsapp }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">E-mail</label>
                                        <input class="form-control mb-3" type="text" name="web_email" value="{{$webs->web_email }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Preço site</label>
                                        <input class="form-control mb-3" type="text" name="plans_price_website" value="{{ $webs->plans_price_website }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Preço landing page</label>
                                        <input class="form-control mb-3" type="text" name="plans_price_landingpage"
                                            value="{{ $webs->plans_price_landingpage }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Preço loja virtual</label>
                                        <input class="form-control mb-3" type="text" name="plans_price_ecommerce" value="{{ $webs->plans_price_ecommerce }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Preço Google Ads</label>
                                        <input class="form-control mb-3" type="text" name="plans_price_marketing_digital"
                                            value="{{ $webs->plans_price_marketing_digital }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Link  do Facebook</label>
                                        <input class="form-control mb-3" type="text" name="link_facebook"
                                            value="{{ $webs->link_facebook }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Link do Instagram</label>
                                        <input class="form-control mb-3" type="text" name="link_instagram"
                                            value="{{ $webs->link_instagram }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="">Link do Telegram</label>
                                        <input class="form-control mb-3" type="text" name="link_telegram"
                                            value="{{ $webs->link_telegram }}">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="btn btn-secondary btn-lg m-3">Atualizar</button>
                                </div>
                            </div>

        
                        </form>
                    </div>
                </div>

                {{-- <form action="{{route('admin-update', $webs->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="row">
                        <div class="col-lg-4 card border-white">
                            <div class="card-header text-center m-3 bg-light">
                                <h4>Contato</h4>
                            </div>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Editar Telefone do site
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div>
                                            
                                                <div class="mb-3">
                                                    <input class="form-control mb-3" type="text" class="div-control"
                                                        placeholder="Número do celular" name="web_phone_nunber"
                                                        value="{{ $webs->web_phone_number }}">
                                                </div>
    
                                                
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Editar link do Whatsapp
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div action="" method="post">
                                                @csrf
                                                <input class="form-control mb-3" type="text" class="div-control" placeholder="Número whatsapp"
                                                    name="web_link_whatsapp" value="{{ $webs->web_link_whatsapp }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Editar Email
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div action="">
                                                <input class="form-control mb-3" type="email" class="div-control" placeholder="e-mail">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4 card border-white">
                            <div class="card-header text-center m-3 bg-light">
                                <h4>Preços</h4>
                            </div>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                            Editar preço de Site
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
    
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFive" aria-expanded="false"
                                            aria-controls="flush-collapseFive">
                                            Editar Preço de Landing Pages
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
    
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            Editar Preço de Loja virtual
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque adipisci
                                            voluptatem aliquid dolores ut quia natus odit numquam magnam architecto.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 card border-white">
                            <div class="card-header text-center m-3 bg-light">
                                <h4>Marketing Digital</h4>
                            </div>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven"
                                            aria-expanded="false" aria-controls="flush-collapseSeven">
                                            Editar Preço de Google Ads
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, dolore.
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-secondary me-md-2" type="button">Atualizar</button>
                           
                        </div>
    
                    </div>
                </form> --}}





            </div>
        </div>
    </div>
</x-app-layout>
