<x-app-layout>
    <x-slot name="header">
        <div></div>
        <div class="row">
            <div class="col-lg-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    CRIAR CONFIGURAÇÕES DO SITE
                </h2>
            </div>
            <div class="col-lg-4">
                <div class="text text-right ">
                    {{-- <a href="{{route('admin-edit')}}" class="btn btn btn-secondary">
                        <i class="fa-sharp fa-solid fa-gear"></i> EDITAR CONFIGURAÇÕES DO SITE
                    </a> --}}
                    
                    
                </div>
            </div>
        </div>
        
       
       
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-5">
                    <form action="{{ route('admin-store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Número de Telefone" name="web_phone_number">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Número do whatsapp" name="web_phone_whatsapp">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Link do Whatsapp" name="web_link_whatsapp">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="E-mail do site" name="web_email">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Preço do website" name="plans_price_website">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Preço da landing page" name="plans_price_landingpage">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Preço da loja virtual" name="plans_price_ecommerce">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <input type="text" class="form-control" placeholder="Preço do google ads" name="plans_price_marketing_digital">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <input type="text" class="form-control" placeholder="Link do Facebook" name="link_facebook">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <input type="text" class="form-control" placeholder="Link do Instagram" name="link_instagram">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <input type="text" class="form-control" placeholder="Link do telegram" name="link_telegram">
                                </div>
                            </div>
                            <div class="col-lg-8 mb-"></div>
                            <div class="col-lg-4 text-right">
                                <div class="">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-dark btn-lg" type="button">
                                            CRIAR
                                        </button>
    
    
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                    </form>
                    
                </div>
                
               
               
            </div>
        </div>
    </div>
</x-app-layout>