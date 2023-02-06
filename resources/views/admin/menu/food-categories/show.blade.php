@extends('layouts.admin')
@section('title')
    | Category
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Categories</h2>
    <!-- BEGIN: Modal Toggle -->
    @include('admin.menu.food-categories.create')
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input id="search" type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10" placeholder="Search item...">
                    <i data-lucide="search" class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500"></i>
                </div>
            </div>
            <div id="Content" class="grid grid-cols-12 gap-5 mt-5">
                @foreach($categories as $key => $category)
                    @if($category->id == $selected->id)
                        <div class="col-span-12 sm:col-span-3 2xl:col-span-3 box bg-primary p-5 cursor-pointer zoom-in">
                            <div class="font-medium text-base text-white">{{ $category->title }}</div>
                            <div
                                class="text-white text-opacity-80 dark:text-slate-500">{{ count($category->foods) }} {{ count($category->foods) == 1 ? 'Item' : 'Items'}}</div>
                            <div
                                class="w-10 h-10 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full  font-medium -mt-1 -mr-1">
                               @include('admin.menu.food-categories.edit')
                            </div>
                        </div>
                    @else
                        <a href="{{ route('admin.menu.food-categories.show', $category->id)  }}"
                           class="col-span-12 sm:col-span-3 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                            <div class="font-medium text-base">{{ $category->title }}</div>
                            <div
                                class="text-slate-500">{{ count($category->foods) }} {{ count($category->foods) == 1 ? 'Item' : 'Items'}}</div>
                        </a>
                    @endif
                @endforeach
            </div>
            <div class="grid grid-cols-12 gap-5 overflow-scroll mt-5 pt-5 border-t">
                @foreach($selected->foods as $food)
                    <div class="intro-y col-span-12  md:col-span-6lg:col-span-4 xl:col-span-3 shadow-lg border-black btn-rounded-dark">
                        <div class="box border-b-2 border-l-2 border-opacity-10 border-black">
                            <div class="p-5">
                                <div class="text-slate-600 dark:text-slate-500 mt-5">
                                    <div class="flex items-center my-2">
                                        {{ ucwords($food->title) ?? '' }}
                                    </div>
                                    <div class="flex items-center my-2">
                                        Price: {{ ucwords($food->price) ?? '' }}
                                    </div>
                                    <div class="flex items-center my-2">
                                        Receipt: {{ $food->receipt ?? '' }}
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center lg:justify-end items-center p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <!-- BEGIN: Modal Toggle -->
                                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview-{{ $food->id }}" class="flex items-center text-primary mr-auto">
                                    <i data-lucide="edit" class="mr-1"></i>Edit</a>
                                <!-- END: Modal Toggle -->

                                <!-- BEGIN: Modal Content -->
                                <div id="static-backdrop-modal-preview-{{ $food->id }}" class="modal"
                                     data-tw-backdrop="static" tabindex="-1"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body px-5 py-10">
                                                <form action="{{route('admin.menu.food.edit',$food->id)}}" method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label for="modal-form-1" class="form-label">Title</label>
                                                        <input name="title" id="modal-form-1" type="text" class="form-control" placeholder="Title" value="{{ old('title', $food->title) }}">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label for="modal-form-2" class="form-label">Price</label>
                                                        <input name="price" id="modal-form-2" type="text" class="form-control" placeholder="Price" value="{{ old('price', $food->price) }}">
                                                    </div>
                                                    <label for="category_id" class="form-label mt-3">Category</label>
                                                    <select class="tom-select w-full" id="category_id" name="category_id">
                                                        @foreach($categories as $category)
                                                            <option
                                                                value="{{ $category->id }}" {{ $category->id == $food->category_id ? 'selected' : '' }}>
                                                                {{ $category->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="col-span-12 sm:col-span-6 mt-3">
                                                        <label for="receipt" class="form-label w-full flex flex-col sm:flex-row">Receipt<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 5 characters</span></label>
                                                        <textarea id="receipt" class="form-control" name="receipt" placeholder="Type your comments" minlength="5">{{$food->receipt}}</textarea>
                                                    </div>
                                                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1 mt-4">Cancel</button>
                                                    <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Modal Content -->


                                <!-- BEGIN: Modal Toggle -->
                                <a href="javascript:;" data-tw-toggle="modal"
                                   data-tw-target="#delete-modal-preview-{{$food->id}}"
                                   class="flex items-center mr-auto text-danger">
                                    <i data-lucide="trash-2" class="px-1 text-danger"></i>
                                    Delete</a>
                                <!-- END: Modal Toggle -->
                                <!-- BEGIN: Modal Content -->
                                <div id="delete-modal-preview-{{$food->id}}" class="modal" tabindex="-1" aria-hidden="true">
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
                                                    <form action="{{ route('admin.menu.food.productdelete', $food->id) }}"
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
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $('#vertical-form-1').on('keyup', function(){
           value = $(this).val();

           $.ajax({
               type: 'get',
               url: '{{URL::to('/admin/categories/add')}}',
               data: {'search':value},
               success:function (data){
                   if(data === 'Not Found'){
                       $('#Content2').html('');
                       $('#addbtn').prop("disabled",false);
                   } else {
                       $('#Content2').html('Category with this name is already exists');
                       $('#addbtn').prop("disabled", true);
                   }
               },
           });
        });

        function update() {
            let value = {
                'search': $('#search').val(),
                'sort': $('#sort').val()
            }
            $.ajax({
                type: 'get',
                url: '{{URL::to('/admin/categories/search')}}',
                data: value,
                success: function (data) {
                    console.log(data);
                    $('#Content').html(data);
                },
            });
        }

        $('#search').on('keyup', update);
        $('#sort').on('change', update);

        $(".category").click(function () {
            alert("hey");
            $(this).slideUp();
        });
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('category_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.categories.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [[1, 'desc']],
                pageLength: 25,
            });
            let table = $('.datatable-Category:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })

    </script>
@endsection
