@extends('templates.template-principal')
@section('content')
<div class="container" style="margin-top: 3rem; margin-bottom: 8rem;">
    <div class="form-row justify-content-center" style="text-align: center;">
        <div class="col-md-12">
            <img src="{{ asset('img/logo_ufape_concursos.png') }}" alt="Orientação" width="30%"> 
        </div>
        <div class="col-md-8" style="margin-top: 20px;">
            <h6 style="color: #909090;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </h6>
        </div>
        
        <div class="col-md-12" style="text-align: left; margin-top: 1.5rem;margin-bottom: -1.1rem;">
            <h6 style="color: #6C6C6C; font-size: 40px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">Lorem Ipsum</h6>
        </div>
        <div class="col-md-12"><hr style="border-width: 5px; border-color: #6C6C6C;"></div>
        <div class="col-md-12">
            <div class="form-row justify-content-left">
                @foreach ($concursos as $concurso)
                    <div class="card style_card">
                        <a type="button" onclick ="location.href='{{ route('info.concurso', ['concurso' => $concurso->id]) }}'" style="text-decoration: none">
                            <div class="card-body">
                                <div class="d-flex justify-content-left" style="margin-bottom: -20px;">
                                    <div style="margin-right: 5px;">
                                        <img src="{{ asset('img/img_default.png') }}" alt="Imagem default" width="70px"> 
                                    </div>
                                    <div class="form-group" style="text-align: left;">
                                        <h6 class="style_card_titulo">{{ $concurso->titulo }}</h6>
                                        <h6 class="style_card_subtitulo">UFAPE</h6>
                                        <hr>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-left" style="text-align: left;">
                                    <div>
                                        <h6 class="style_card_data">{{ date_format(date_create($concurso->data_inicio_inscricao), 'd/m/Y') }}</h6>
                                    </div>
                                    <div class="style_card_maior_que"><img src="img/icon_maior_que.svg" width="8px"> </div>
                                    <div>
                                        <h6 class="style_card_data">{{ date_format(date_create($concurso->data_fim_inscricao), 'd/m/Y') }}</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-left">
                                    <h6 class="style_card_detalhe">{{ $concurso->descricao }}</h6>
                                </div>
                                <div style="text-align: left;">
                                    <hr class="style_card_linha">
                                    <h6 class="style_card_tipo">Lorem Ipsum</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection