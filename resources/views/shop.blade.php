@extends('layouts.show')
@section('content')
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:shopFilter :category_id="$category_id" >
@endsection

@section('style')
    <style>
        body{
        }
    .select-items{
        border: #0a3622;
    }
    </style>
    @endsection

