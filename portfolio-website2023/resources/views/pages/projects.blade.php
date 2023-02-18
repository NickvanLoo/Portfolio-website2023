@extends('layouts.app')

@section('content')
<div class="container-fluid py-5" id="projecten">
    <div class="container">
        <div class="position-relative d-flex align-items-center justify-content-center">
            <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Projecten</h1>
            <h1 class="position-absolute text-uppercase text-success">Projecten</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center">
                    <h3>Github Repositories API:</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered table-wrapper-scroll-y my-custom-scrollbar">
                            <thead style="position: sticky;top: 0">
                                <tr class="table-info">
                                    <th scope="col">Naam</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Programmeertaal</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection