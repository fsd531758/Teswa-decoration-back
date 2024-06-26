@extends('admin.layouts.master')
@section('title', settings()->website_title . ' | ' . __('words.reply_for_msg'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{ __('words.reply_for_msg') }}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{ route('admin.home') }}" class="text-muted">{{ __('words.home') }}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('contact_requests.index') }}" class="text-muted">{{ __('words.reply_for_msg') }}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{ __('words.reply_for_msg') }}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@extends('admin.components.create-form')
@section('form_action', route('contact_requests.send_mail', $contact_request->id))
@section('form_type', 'POST')

@section('form_content')
    @method('post')
    <div class="card card-custom mb-2">
        <input type="hidden" name="id" value="{{ $contact_request->id }}">
        <div class="card-header card-header-tabs-line">
            <div class="card-title w-100">
                <div class="row w-100">
                    <div class="col-12 col-md-6 col-lg-12 col-xl-6 my-2 text-capitalize">
                            <span  class="card-label">{{ __('words.reply_to') }} : </span>
                            <span class="font-weight-light">{{ $contact_request->fname . ' ' . $contact_request->lname }}</span>
                    </div>
                    <div class='col-12 col-md-6 col-lg-12 col-xl-6 my-2'>
                            <span class="card-label">{{ __('words.email') }} : </span>
                            <span class="font-weight-light">{{ $contact_request->email }}</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body">
            <div class="col form-group">
                <label>{{ __('words.subject') }}<span class="text-danger"></span></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="flaticon-edit"></i></span>
                    </div>
                    <input type="text" name="subject" placeholder="{{ __('words.subject') }}"
                        class="form-control  pl-5 min-h-40px @error('subject') is-invalid @enderror"
                        value="{{ old('subject') }}">
                    @error('[subject]')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $subject }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col form-group">
                <label>{{ __('words.message') }}<span class="text-danger">*</span></label>
                <textarea class="form-control ckeditor @error('message') is-invalid @enderror " type="text" name="message" rows="4">{{ old('message') }} </textarea>
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-outline-success">
                    {{ __('words.send') }}
                </button>
            </div>
        </div>
    </div>

@endsection
