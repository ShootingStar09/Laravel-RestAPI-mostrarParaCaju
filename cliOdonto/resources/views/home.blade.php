@extends('base')

@section('content')

    <div class="splash">
        <div class="pure-g-r">
            <div class="pure-uw">
                <div class="l-box splash-text">
                    <h1 class="splash-head">
                        Uma Simples Plataforma para facilitar o intermedio cliente/Dentista
                    </h1>
                    <h2 class="splash-subhead">
                        O CliOdonto visa simplificar o gerenciamento do Consultorio Odontologico, provendo ferramentas objetivas e de fácil uso para melhor performance.
                    </h2>
                    <p>
                        <a href="#" class="pure-button primary-button">Saiba mais</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-2-3">
            <div class="l-box">
                <h4 class="content-subhead">Agendamento online e historico com acompanhamento digital</h4>
                <h3>Venha voce dentista participar  tambem</h3>
                <p>
                    O CliOdonto tem um sistema simples e prático para que o dentista disponibilize orçamentos e diagnosticos digitais como: exames, atendimento emergencial, apoio 24h ...
                </p>
            </div>
        </div>
        <div class="pure-u-1-3">
            <div class="l-box">
                <img src="{{ asset('imgs/dentist-79651_960_720.jpg') }}"
                     alt="Exames e materiais digitais.">
            </div>
        </div>
    </div>
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-1-3">
            <div class="l-box">
                <img src="{{ asset('imgs/dentist-676421_960_720.jpg') }}"
                     alt="Fórum de Dúvidas">
            </div>
        </div>
        <div class="pure-u-2-3">
            <div class="l-box">
                <h4 class="content-subhead">Fórum de Dúvidas</h4>
                <h3>Interaja com seus Clientes</h3>
                <p>
                    No CliOdonto você pode ter seu próprio sistema de fórum para que seus clientes possam interagir com você e com os outros clientes
                </p>
            </div>
        </div>
    </div>
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-2-3">
            <div class="l-box">
                <h4 class="content-subhead">Questionarios</h4>
                <h3>Crie Questionarios para avaliar seus clientes e ter feedback para melhorar o atendimento</h3>
                <p>
                    Você pode criar questionarios para que os clientes possam ser avaliados e todo o controle de exames e resposta dos questionarios é controlado pela plataforma, facilitando sua vida
                </p>
            </div>
        </div>
        <div class="pure-u-1-3">
            <div class="l-box">
                <img src="{{ asset('imgs/dentist-676421_960_720.jpg') }}"
                     alt="Questionarios">
            </div>
        </div>
    </div>
    <div class="pure-g-r content-ribbon">
        <div class="pure-u-1-3">
            <div class="l-box">
                <img  src="{{ asset('imgs/kenya-3009299_960_720.jpg') }}" alt="Mural de Avisos">
            </div>
        </div>
        <div class="pure-u-2-3">
            <div class="l-box">
                <h4 class="content-subhead">Mural de Avisos</h4>
                <h3>Envie anúncios diretamente para os Clientes</h3>
                <p>
                    Organize os avisos da sua ClinOdonto de forma fácil e simples.
                </p>
            </div>
        </div>
    </div>

@endsection
