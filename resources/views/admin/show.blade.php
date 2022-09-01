<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-3">
            PAINEL DE MENSAGENS RECEBIDAS
        </h2>
       
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('dashboard')}}" class="nav-item nav-link mb-3">
                <h5><i class="fa-solid fa-angles-left"></i> Voltar para painel</h5>
            </a>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

             
                <div class="text text-dark container m-3 ">
                    <div>
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-text mb-4 ">
                                    Mensagem enviada em {{$forms->created_at->format('d/m/Y')}}
                                </h5>
                            </div>
                            <div class="col-md-4 mb-4 text-right">
                                <form action="{{route('dashboard-destroy', ['id'=>$forms->id])}}" class="btn  btn-secondary" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" > APAGAR</button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="card" >
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item"><strong>Nome: </strong>{{$forms->nome}}</li>
                              <li class="list-group-item"><strong>E-mail: </strong> {{$forms->email}}</li>
                              <li class="list-group-item"><strong>Telefone: </strong> {{$forms->telefone}}</li>
                              <li class="list-group-item"><strong>Tipo de serviço: </strong> {{$forms->select_service}}</li>
                            </ul>
                          </div>
                       
                        
                        
                        
                    </div>
                    
                    <div class="card" >
                        <div class="card-header">
                          Mensagem
                        </div>
                        <div class="card-body">
                            {{$forms->mensagem}}
                        </div>
                      </div>
                     
                    

                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>