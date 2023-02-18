@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" id="skill">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Vaardigheden</h1>
            <h1 class="position-absolute text-uppercase text-success">Mijn vaardigheden</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-4">Programmeertalen en tools:</h3>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Bootstrap</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Laravel</li>
                    <li>Joomla CMS</li>
                    <li>Github</li>
                    <li>Visual Studio Code</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Meest gebruikte programmeertalen:</h3>
                <img src="https://github-readme-stats.vercel.app/api/top-langs?username=nickvanloo&show_icons=true&locale=en&layout=compact"
                    alt="nickvanloo" />
            </div>
        </div>

    </div>
</div>
@endsection