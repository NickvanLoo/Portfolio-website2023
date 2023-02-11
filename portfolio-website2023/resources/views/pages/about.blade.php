@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" id="about">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Over mij</h1>
            <h1 class="position-absolute text-uppercase text-success">Over mij</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 pb-4 pb-lg-0">
                <img style="width: 200px" class="img-fluid rounded" src="img/foto_van_mij.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <h3 class="mb-4">Junior Software Developer</h3>
                <p>Ik heb in juli 2022 de opleiding Applicatie en mediaontwikelaar MBO niveau 4 afgerond aan het
                    Alfa-college.</p>
                <div class="row mb-3">
                    <div class="col-sm-6 py-2">
                        <h6>Naam: <span class="text-secondary">Nick van Loo</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Opleiding: <span class="text-secondary">Applicatie en mediaontwikkelaar Niveau 4</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Ervaring: <span class="text-secondary">Junior</span></h6>
                    </div>
                    <div class="col-sm-6 py-2">
                        <h6>Provincie: <span class="text-secondary">Groningen</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection