@extends('layouts.app')
@section('title', 'Blog Post')
@section('meta_decription', 'Blog Post')
@section('meta_keyword', 'Blog Post')
@section('content')


    <div class="bg-danger py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel category-carousel owl-theme">
                        @foreach ($all_categories as $all_cate_item)
                            <div class="item">
                                <a href="{{ url('tutorial/' . $all_cate_item->slug) }}" class="text-decoration-none">
                                    <div class="card">
                                        <img src="{{ asset('uploads/category/' . $all_cate_item->image) }}" alt="Image">
                                        <div class="card-body text-center">
                                            <h5>
                                                {{ $all_cate_item->name }}
                                            </h5>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1 bg-light">
        <div class="container">
            <div class="border text-center p-3">
                <h3>
                    Advertise here
                </h3>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        Funda of Web IT
                    </h4>
                    <div class="underline"></div>
                    <p>
                        Lorum ipsum,dolor sit amet consectetur adipisicing elit. Voluptas modi beatae
                        Lorum ipsum,dolor sit amet consectetur adipisicing elit. Voluptas modi beatae

                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="py-5 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        All categories List
                    </h4>
                    <div class="underline"></div>
                </div>

                @foreach ($all_categories as $all_cateitem)
                    <div class="col-md-3">
                        <div class="card card-body mb-3">
                            <a href="{{ url('tutorial/' . $all_cateitem->slug) }}" class="text-decoration-none">
                                <h5 class="text-dark mb-0">
                                    {{ $all_cateitem->name }}
                                </h5>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        Latest Posts
                    </h4>
                    <div class="underline"></div>
                </div>
                <div class="col-md-8">
                    @foreach ($latest_posts as $latest_post_item)
                        <div class="card card-body bg-gray shadow mb-3">
                            <a href="{{ url('tutorial/' . $latest_post_item->category->slug . '/' . $latest_post_item->slug) }}"
                                class="text-decoration-none">
                                <h5 class="text-dark mb-0">
                                    {{ $latest_post_item->name }}
                                </h5>
                            </a>
                            <h6>
                                Posted On: {{ $latest_post_item->created_at->format('d-m-Y') }}
                            </h6>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4">
                    <div class="border text-center p-3">
                        <h3>
                            Advertise here
                        </h3>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
