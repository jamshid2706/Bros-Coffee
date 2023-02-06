@extends('layouts.admin')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-5">Events</h2>
    @include('admin.events.create')
    <div id="Content" class="grid grid-cols-12 gap-6 mt-5">
        @foreach($eventss as $key => $events)
            <div
                class="intro-y col-span-12  md:col-span-6lg:col-span-4 xl:col-span-3 shadow-lg border-black btn-rounded-dark">
                <div class="box border-b-2 border-l-2 border-opacity-10 border-black">
                    <div class="p-5">
                        <div
                            class="h-40 2xl:h-56 image-fit rounded-md overflow-hidden before:block before:absolute before:w-full before:h-full before:top-0 before:left-0 before:z-10 before:bg-gradient-to-t before:from-black before:to-black/10">
                            <img alt="Midone - HTML Admin Template" class="rounded-md"
                                 src="{{asset('storage/'.$events->image)}}">
                            <div class="absolute bottom-0 text-white px-5 pb-6 z-10">
                                <a href=""
                                   class="block font-medium text-base">{{ $events->title ?? '' }}</a>
                                <span
                                    class="text-white/90 text-xs mt-3">{{ $events->description ?? '' }}</span>
                            </div>
                        </div>
                        {{--                        <div class="text-slate-600 dark:text-slate-500 mt-5">--}}
                        {{--                            <div class="flex items-center">--}}
                        {{--                                Buy: {{ $events->buy ?? '' }}$--}}
                        {{--                            </div>--}}
                        {{--                            <div class="flex items-center mt-2">--}}
                        {{--                                Sell: {{ $events->sell ?? '' }}$--}}
                        {{--                            </div>--}}
                        {{--                            <div class="flex items-center mt-2">--}}
                        {{--                                Remaining Stock: {{ $events->stock ?? '' }}--}}
                        {{--                            </div>--}}
                        {{--                            <div class="flex items-center mt-2">--}}
                        {{--                                Category: {{$events->category_id ?? ''}}--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div
                        class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                        <!-- BEGIN: Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#static-backdrop-modal-preview-{{ $events->id }}"
                           class="flex items-center text-primary mr-auto">
                            <i data-lucide="edit" class="mr-1"></i>
                            Edit</a>
                        <!-- END: Modal Toggle -->

                        <!-- BEGIN: Modal Content -->
                        <div id="static-backdrop-modal-preview-{{ $events->id }}" class="modal"
                             data-tw-backdrop="static" tabindex="-1"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body px-5 py-10">
                                        <form action="{{route('admin.events.edit',$events->id)}}" method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="flex items-center justify-center w-full">
                                                <label class="flex flex-col w-full h-56 border-4 border-dashed dropzone"
                                                       style="cursor: pointer">
                                                    <div class="flex flex-col items-center justify-center pt-7">
                                                        <img src="{{asset('storage/'.$events->image)}}" alt=""
                                                             id="preview"
                                                             class="w-60 h-40 text-gray-400 group-hover:text-gray-600">
                                                    </div>
                                                    <input type="file" class="opacity-0 fallback"
                                                           name="image" accept="image/*" id="image"/>
                                                </label>
                                            </div>

                                            <div class="mt-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input id="title" type="text" name="title" class="form-control"
                                                       placeholder="Product Title"
                                                       value="{{ old('title', $events->title) }}" required>
                                            </div>
                                            <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                                                <label for="description"
                                                       class="form-label w-full flex flex-col sm:flex-row">
                                                    Description
                                                    <span
                                                        class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 5 characters</span>
                                                </label>
                                                <textarea id="description" class="form-control" name="description"
                                                          placeholder="Type your comments"
                                                          minlength="5">{{$events->description}}</textarea>
                                            </div>
                                            <button type="button" data-tw-dismiss="modal"
                                                    class="btn btn-outline-secondary w-24 mr-1 mt-4">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->


                        <!-- BEGIN: Modal Toggle -->
                        <a href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#delete-modal-preview-{{$events->id}}"
                           class="flex items-center mr-auto text-danger">
                            <i data-lucide="trash-2" class="px-1 text-danger"></i>
                            Delete</a>
                        <!-- END: Modal Toggle -->
                        <!-- BEGIN: Modal Content -->
                        <div id="delete-modal-preview-{{$events->id}}" class="modal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body p-0">
                                        <div class="p-5 text-center">
                                            <i data-lucide="x-circle"
                                               class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                            <div class="text-3xl mt-5">Are you sure?</div>
                                            <div class="text-slate-500 mt-2">Do you really want to delete these
                                                records? <br>This process cannot be undone.
                                            </div>
                                        </div>
                                        <div class="px-5 pb-8 text-center">
                                            <form action="{{ route('admin.events.delete', $events->id) }}"
                                                  method="post">
                                                <button type="button" data-tw-dismiss="modal"
                                                        class="btn btn-outline-secondary w-24 mr-1">Cancel
                                                </button>
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger w-24">Yes
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Modal Content -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('styles')
    <style>
        html * {
            box-sizing: border-box;
        }

        p {
            margin: 0;
        }

        .upload__box {
            padding: 40px;
        }

        .upload__inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__btn {
            display: inline-block;
            font-weight: 600;
            color: #fff;
            text-align: center;
            min-width: 116px;
            padding: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid;
            background-color: #4045ba;
            border-color: #4045ba;
            border-radius: 10px;
            line-height: 26px;
            font-size: 14px;
        }

        .upload__btn:hover {
            background-color: unset;
            color: #4045ba;
            transition: all 0.3s ease;
        }

        .upload__btn-box {
            margin-bottom: 10px;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .upload__img-box {
            width: 200px;
            padding: 0 10px;
            margin-bottom: 12px;
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: '\2716';
            font-size: 14px;
            color: white;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }

    </style>
@endsection
@section('scripts')
    <script>
        jQuery(document).ready(function () {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function () {
                $(this).on('change', function (e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function (f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function (e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script>

@endsection
