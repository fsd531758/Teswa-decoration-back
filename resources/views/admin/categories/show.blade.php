@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.show_category'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.categories') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('categories.index') }}" class="text-muted">{{ __('words.show_categories') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.show_category') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">{{ __('words.show_category') }}</h3>
            </div>
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    @foreach (config('translatable.locales') as $key => $locale)
                        <li class="nav-item">
                            <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                href="{{ '#' . $locale }}">{{ __('words.locale-' . $locale) }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body p-10">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                        role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">{{ __('words.title') }}
                                            - {{ __('words.locale-' . $locale) }}:</h5>
                                    </div>
                                    <p class="m-0">{{ $category->translate($locale)->title }}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.activity') }}:</h5>
                            </div>
                            <p class="m-0"><span
                                    class="badge rounded-pill text-white {{ $category->status == 1 ? 'bg-success' : 'bg-danger' }}">{{ $category->getActive() }}</span>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.section') }}:</h5>
                            </div>
                            <p class="m-0">{{ $category->section ? $category->section->title : '' }}</p>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">{{ __('words.image') }}:</h5>
                            </div>
                            <a href="{{ $category->image }}" data-toggle="lightbox" data-title="{{ $category->title }}"
                                data-gallery="gallery">
                                <img src="{{ $category->image }}" class="img-fluid mb-2 image-galley"
                                    onerror="this.src='{{ asset('uploads/default_image.png') }}'" alt="category image" />
                            </a>
                        </div>
                    </div>
                </div>
                <br>
                <br>

            </div>

            @permission('update-categories')
                <div class="card-footer">
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-block btn-outline-info">
                                {{ __('words.edit') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endpermission
        </div>
    </div>
@endsection
