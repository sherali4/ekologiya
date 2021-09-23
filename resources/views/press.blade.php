@extends('layouts.app')
@section('title-blog') Press relizlar @endsection
@section('breadcrumb') Press relizlar @endsection
@section('centertop') <h1 class="text-primary">Press Relizlar</h1> @endsection
@section('content') 

<div id="accordianId" role="tablist" aria-multiselectable="true">
    <div class="card mb-2">
        <div class="card-header" role="tab" id="section1HeaderId">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordianId" href="#section1ContentId" aria-expanded="true" aria-controls="section1ContentId">
          2021 yilda Qishloq, o'rmon va baliqchilik xo'jaligi ko'rsatkichlari
        </a>
            </h5>
        </div>
        <div id="section1ContentId" class="collapse in" role="tabpanel" aria-labelledby="section1HeaderId">
            <div class="card-body">
                Section 1 content
            </div>
        </div>
    </div>
    <div class="card mb-2">
        <div class="card-header" role="tab" id="section2HeaderId">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordianId" href="#section2ContentId" aria-expanded="true" aria-controls="section2ContentId">
          2020 yilda Qishloq, o'rmon va baliqchilik xo'jaligi ko'rsatkichlari
        </a>
            </h5>
        </div>
        <div id="section2ContentId" class="collapse in" role="tabpanel" aria-labelledby="section2HeaderId">
            <div class="card-body">
                Section 2 content
            </div>
        </div>
    </div>
    <div class="card mb-2">
        <div class="card-header" role="tab" id="section2HeaderId">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordianId" href="#section3ContentId" aria-expanded="true" aria-controls="section3ContentId">
          2019 yilda Qishloq, o'rmon va baliqchilik xo'jaligi ko'rsatkichlari
        </a>
            </h5>
        </div>
        <div id="section3ContentId" class="collapse in" role="tabpanel" aria-labelledby="section3HeaderId">
            <div class="card-body">
                Section 2 content
            </div>
        </div>
    </div>
    <div class="card mb-2">
        <div class="card-header" role="tab" id="section4HeaderId">
            <h5 class="mb-0">
                <a data-toggle="collapse" data-parent="#accordianId" href="#section4ContentId" aria-expanded="true" aria-controls="section4ContentId">
          2018 yilda Qishloq, o'rmon va baliqchilik xo'jaligi ko'rsatkichlari
        </a>
            </h5>
        </div>
        <div id="section4ContentId" class="collapse in" role="tabpanel" aria-labelledby="section4HeaderId">
            <div class="card-body">
                Section 2 content
            </div>
        </div>
    </div>
</div>


@endsection

