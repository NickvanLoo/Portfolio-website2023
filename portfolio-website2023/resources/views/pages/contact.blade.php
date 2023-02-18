@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" id="contact">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contact</h1>
            <h1 class="position-absolute text-uppercase text-success">Contact</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form text-center">
                    <div id="success"></div>
                    Voor eventueel contact kunt u mij een mailtje sturen door op de button te klikken: <a
                        class="btn btn-success" href="mailto:nick@nickvanloo.nl"><i
                            class="fas fa-envelope"></i></a></br>
                    Of kunt u mij een berichtje sturen via LinkedIn.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection