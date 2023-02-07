@extends('admin.layouts.master')
@section('title',settings()->website_title .' | '. __('words.edit_news_letter'))
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('words.news_letters')}}</h5>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin.home')}}" class="text-muted">{{__('words.home')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('news-letters.index')}}" class="text-muted">{{__('words.show_news_letters')}}</a>
            </li>
            <li class="breadcrumb-item">
                <span class="text-muted">{{__('words.edit_news_letter')}}</span>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@extends('admin.components.create-form')
@section('form_action',route('news-letters.update',$newsLetter->id))
@section('form_type', 'POST')

@section('form_content')
    @method('put')
    <input type="hidden" name="id" value="{{$newsLetter->id}}">

    <div class="card card-custom">
        <div class="card-body">
            <div class="form-group row">
                <div class="col form-group">
                    <label>{{__('words.message')}}<span
                            class="text-danger">*</span></label>
                    <textarea
                        class="form-control ckeditor @error('message') is-invalid @enderror "
                        type="text"
                        name="message"
                        rows="4">{{ old('message',$newsLetter->message) }} </textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>

        </div>

    </div>


    <div class="card-footer">
        <div class="row">
            <div class="col-4">
                <button type="submit" class="btn btn-block btn-outline-success">
                    {{__('words.update')}}
                </button>
            </div>
        </div>
    </div>


@endsection
