@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" id="experience">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Ervaring</h1>
            <h1 class="position-absolute text-uppercase text-success">Opleiding en Werkervaring</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h3 class="mb-4">Mijn opleidingen:</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute"
                            style="top: 2px; left: -35px; font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">Medewerker Beheer ICT MBO niveau 3</h5>
                        <p class="mb-2"><strong>Alfa-college</strong> | <small>2017 - 2019</small></p>
                        <p>Opleiding Mederwerker Beheer ICT op het Alfa-college te Groningen.</p>
                    </div>
                    <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute"
                            style="top: 2px; left: -35px;  font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">Applicatie- en mediaontwikelaar MBO niveau 4</h5>
                        <p class="mb-2"><strong>Alfa-college</strong> | <small>2019 - 2022</small></p>
                        <p>Opleiding Applicatie- en mediaontwikelaar MBO niveau 4 op het Alfa-college te Groningen.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Mijn werkervaringen:</h3>
                <div class="border-left border-primary pt-2 pl-4 ml-2">
                    <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute"
                            style="top: 2px;left: -35px;  font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">Stagiair ICT-helpdesk medewerker</h5>
                        <p class="mb-2"><strong>Capgemini</strong> | <small> feb. 2019 - jul. 2019</small></p>
                        <p>Ik heb voor de niveau 3 opleiding een halfjaar stage gelopen bij Capgemini, bij een
                            ICT-servicepunt.</p>
                    </div>
                    <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute"
                            style="top: 2px;left: -35px;  font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">Stagiair Software Developer</h5>
                        <p class="mb-2"><strong>A.A.P. Verzekeringen</strong> | <small> sep. 2020 - feb. 2021</small>
                        </p>
                        <p>Ik heb bij A.A.P. Verzekeringen de 1e stage voor de niveau 4 opleiding gedaan.</p>
                    </div>
                    <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute"
                            style="top: 2px;left: -35px;  font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">Stagiair Software Developer</h5>
                        <p class="mb-2"><strong>Werken met Merken B.V.</strong> | <small>feb. 2022 - jul. 2022</small>
                        </p>
                        <p>Ik heb bij Werken met Merken B.V. de eindstage voor de niveau 4 opleiding gedaan.</p>
                    </div>
                    <!-- <div class="position-relative ex-me mb-4">
                        <i class="far fa-dot-circle text-primary position-absolute"
                            style="top: 2px;left: -35px;  font-size: 22px;"></i>
                        <h5 class="font-weight-bold mb-1">ICT-Helpdeskmedewerker</h5>
                        <p class="mb-2"><strong>Werkpro</strong> | <small>feb. 2023 - heden</small>
                        </p>
                        <p>ICT-Helpdeskmedewerker bij de zorginstelling werkpro.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection