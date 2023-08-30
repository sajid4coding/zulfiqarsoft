@extends('layouts.dashboardmaster')
@section('dashboard_header_css')

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/forms/switches.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets') }}/src/plugins/css/dark/tagify/custom-tagify.css">
<link href="../src/plugins/css/dark/filepond/custom-filepond.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/assets/css/light/apps/blog-create.css">
<link rel="stylesheet" href="{{ asset('dashboard_assets') }}/src/assets/css/dark/apps/blog-create.css">
<!--  END CUSTOM STYLE FILE  -->

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

<style>
    p {
    font-size: 12pt;
    color: black;
    }
    canvas {
    height: 175px;
    border-style: solid;
    border-width: 1px;
    border-color: rgb(255, 255, 255);
    }

    input {
    font-family: verdana;
    font-size: 12pt;
    }



    .tags-input-wrapper{
        background: transparent;
        padding: 10px;
        border-radius: 4px;
        max-width: 100%;
        border: 1px solid #ccc
    }
    .tags-input-wrapper input{
        border: none;
        background: transparent;
        outline: none;
        width: 140px;
        margin-left: 8px;
        color: #fff;
    }
    .tags-input-wrapper .tag{
        display: inline-block;
        background-color: #087776;
        color: white;
        border-radius: 40px;
        padding: 0px 3px 0px 7px;
        margin-right: 5px;
        margin-bottom:5px;
        box-shadow: 0 5px 15px -2px rgb(8, 119, 118)
    }
    .tags-input-wrapper .tag a {
        margin: 0 7px 3px;
        display: inline-block;
        cursor: pointer;
    }
</style>

@endsection

@section('dashboard_content')
<div class="layout-px-spacing">

    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.analytics') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            <div class="row mb-4 layout-spacing layout-top-spacing">
                @csrf

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="widget-content widget-content-area blog-create-section">

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input name="blogTitle" type="text" class="form-control" id="post-title" placeholder="blog title">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <label>Description</label>
                                {{-- <div id="blog-description"></div> --}}
                                <textarea id="summernote" class="form-control" name="blogDescription" cols="30" rows="10" placeholder="Portfolio Description"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="widget-content widget-content-area blog-create-section mt-4">

                        <h5 class="mb-4">SEO Settings</h5>

                        <div class="row mb-4">
                            <div class="col-xxl-12 mb-4">
                                <input name="blogMetaTitle" type="text" class="form-control" id="post-meta-title" placeholder="blog meta title">
                            </div>
                            <div class="col-xxl-12">
                                <label for="post-meta-description">Meta Description</label>
                                <textarea name="blogMetaDescription" class="form-control" id="post-meta-description" cols="10" rows="5" placeholder="blog meta description"></textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area blog-create-section">
                        <div class="row">
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input name="blogStatus" class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                                    <label class="switch-label" for="showPublicly">Publish</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input name="blogComment" class="switch-input" type="checkbox" role="switch" id="enableComment" checked>
                                    <label class="switch-label" for="enableComment">Enable Comments</label>
                                </div>
                            </div>

                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="tags">Tags</label>
                                <input class="form-control" type="text" id="tag-input1" name="blogTag">
                                {{-- <input class="form-control" name="blogTag" id="tags" class="blog-tags"> --}}
                            </div>

                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="category">Service Category</label>
                                <select class="form-control" name="serviceCategory" id="category">
                                    @foreach ($serviceCategories as $serviceCategory)
                                        <option value="{{ $serviceCategory->id }}">{{ $serviceCategory->service_category_title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-xxl-12 col-md-12 mb-4">

                                <label for="product-images">Blog Thumbnail</label>
                                <div class="col-xxl-12 col-md-12 mb-4">
                                    <canvas id="blogThumbnail"></canvas>
                                    <p>
                                    Filename:
                                    <input name="blogThumbnail" type="file" multiple="false" accept="image/*" id="blogThumbnail_finput" onchange="upload()">
                                    </p>
                                </div>

                            </div>

                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                <button type="submit" class="btn btn-success w-100">Create Blog</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>

</div>
@endsection
@section('dashboard_footer_script')
<script>
    // TAGS SCRPIT

    (function(){

    "use strict"


    // Plugin Constructor
    var TagsInput = function(opts){
    this.options = Object.assign(TagsInput.defaults , opts);
    this.init();
    }

    // Initialize the plugin
    TagsInput.prototype.init = function(opts){
    this.options = opts ? Object.assign(this.options, opts) : this.options;

    if(this.initialized)
        this.destroy();

    if(!(this.orignal_input = document.getElementById(this.options.selector)) ){
        console.error("tags-input couldn't find an element with the specified ID");
        return this;
    }

    this.arr = [];
    this.wrapper = document.createElement('div');
    this.input = document.createElement('input');
    init(this);
    initEvents(this);

    this.initialized =  true;
    return this;
    }

    // Add Tags
    TagsInput.prototype.addTag = function(string){

    if(this.anyErrors(string))
        return ;

    this.arr.push(string);
    var tagInput = this;

    var tag = document.createElement('span');
    tag.className = this.options.tagClass;
    tag.innerText = string;

    var closeIcon = document.createElement('a');
    closeIcon.innerHTML = '&times;';

    // delete the tag when icon is clicked
    closeIcon.addEventListener('click' , function(e){
        e.preventDefault();
        var tag = this.parentNode;

        for(var i =0 ;i < tagInput.wrapper.childNodes.length ; i++){
            if(tagInput.wrapper.childNodes[i] == tag)
                tagInput.deleteTag(tag , i);
        }
    })


    tag.appendChild(closeIcon);
    this.wrapper.insertBefore(tag , this.input);
    this.orignal_input.value = this.arr.join(',');

    return this;
    }

    // Delete Tags
    TagsInput.prototype.deleteTag = function(tag , i){
    tag.remove();
    this.arr.splice( i , 1);
    this.orignal_input.value =  this.arr.join(',');
    return this;
    }

    // Make sure input string have no error with the plugin
    TagsInput.prototype.anyErrors = function(string){
    if( this.options.max != null && this.arr.length >= this.options.max ){
        console.log('max tags limit reached');
        return true;
    }

    if(!this.options.duplicate && this.arr.indexOf(string) != -1 ){
        console.log('duplicate found " '+string+' " ')
        return true;
    }

    return false;
    }

    // Add tags programmatically
    TagsInput.prototype.addData = function(array){
    var plugin = this;

    array.forEach(function(string){
        plugin.addTag(string);
    })
    return this;
    }

    // Get the Input String
    TagsInput.prototype.getInputString = function(){
    return this.arr.join(',');
    }


    // destroy the plugin
    TagsInput.prototype.destroy = function(){
    this.orignal_input.removeAttribute('hidden');

    delete this.orignal_input;
    var self = this;

    Object.keys(this).forEach(function(key){
        if(self[key] instanceof HTMLElement)
            self[key].remove();

        if(key != 'options')
            delete self[key];
    });

    this.initialized = false;
    }

    // Private function to initialize the tag input plugin
    function init(tags){
    tags.wrapper.append(tags.input);
    tags.wrapper.classList.add(tags.options.wrapperClass);
    tags.orignal_input.setAttribute('hidden' , 'true');
    tags.orignal_input.parentNode.insertBefore(tags.wrapper , tags.orignal_input);
    }

    // initialize the Events
    function initEvents(tags){
    tags.wrapper.addEventListener('click' ,function(){
        tags.input.focus();
    });


    tags.input.addEventListener('keydown' , function(e){
        var str = tags.input.value.trim();

        if( !!(~[9 , 13 , 188].indexOf( e.keyCode ))  )
        {
            e.preventDefault();
            tags.input.value = "";
            if(str != "")
                tags.addTag(str);
        }

    });
    }


    // Set All the Default Values
    TagsInput.defaults = {
    selector : '',
    wrapperClass : 'tags-input-wrapper',
    tagClass : 'tag',
    max : null,
    duplicate: false
    }

    window.TagsInput = TagsInput;

    })();

    var tagInput1 = new TagsInput({
        selector: 'tag-input1',
        duplicate : false,
        max : 10
    });
    tagInput1.addData([])

</script>


    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'type description...',
                height: 300,
            });
        });
    </script>

    <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>

    <script>
        function upload() {
        var imgcanvas = document.getElementById("blogThumbnail");
        var fileinput = document.getElementById("blogThumbnail_finput");
        var image = new SimpleImage(fileinput);
        image.drawTo(imgcanvas);
        }
    </script>
@endsection
