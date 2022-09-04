<x-app-layout>
    <x-slot name="header">
        <div></div>
        <div class="row">
            <div class="col-lg-8">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    PAINEL DE MENSAGENS RECEBIDAS
                </h2>
            </div>
            <div class="col-lg-4">
                @foreach ($webs as $item)
                <div class="text text-right ">
                    <a href="{{route('admin-edit', [$item->id])}}" class="btn btn btn-secondary"> CONFIGURAÇÕES DO SITE
                        <i class="fa-sharp fa-solid fa-gear"></i> 
                    </a>
            
                    
                </div>
                @endforeach
               
            </div>
        </div>
       
       
    </x-slot>

    <div class="py-12">
       
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

               
                <div class="text text-dark container m-3 ">


                    @foreach ($forms as $form)
                        <div class="card card-body  mb-5">
                            <div class="row ">
                                <div class="col-lg-3">
                                    <p style="font-weight: bold">NOME:</p>
                                    {{ $form->nome }}
                                </div>
                                <div class="col-lg-3 ">
                                    <p style="font-weight: bold">E-MAIL:</p>
                                    {{ $form->email }}
                                </div>
                                <div class="col-lg-3 ">
                                    <p style="font-weight: bold">DATA:</p>
                                    {{ $form->created_at->format('d/m/Y') }}
                                </div>
                                <div class="col-lg-3">
                                    <div class="d-grid gap-2">
                                        <a href="{{route('dashboard-show', ['id' => $form->id])}}" class="btn btn-secondary" type="button">DETALHES</a>
                                       
                                        <form action="{{route('dashboard-destroy', ['id'=>$form->id])}}" class="btn  btn-light" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" > APAGAR</button>
                                        </form>
                                        
                                    </div>
                                    

                                </div>



                            </div>




                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
