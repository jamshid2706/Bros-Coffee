@extends('layouts.admin')
@section('content')
  <h2 class="intro-y text-lg font-medium mt-10">Categories</h2>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
               class="btn btn-primary">Add New Category</a>
            <div class="hidden md:block mx-auto text-slate-500"></div>
            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search..." control-id="ControlID-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="search" class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <div class="intro-y col-span-12 lg:col-span-12">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10" placeholder="Search item..." control-id="ControlID-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="search" class="lucide lucide-search w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500" data-lucide="search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5">
                @foreach($categories as $key => $category)

                    <div id="{{$category->id}}"
                         class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in category">
                        <div class="font-medium text-base">{{ $category->title ?? '' }}</div>
                        <div class="text-slate-500">5 Items</div>
                    </div>

                @endforeach
            </div>

{{--            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">--}}
{{--                --}}{{--@if()--}}
{{--                    @foreach($selected->products as $product)--}}

{{--                    @endforeach--}}


{{--                @endif--}}
{{--                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal"--}}
{{--                   class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">--}}
{{--                    <div class="box rounded-md p-3 relative zoom-in">--}}
{{--                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">--}}
{{--                            <div class="absolute top-0 left-0 w-full h-full image-fit">--}}
{{--                                <img alt="Midone - HTML Admin Template" class="rounded-md" src="https://enigma.left4code.com/dist/images/food-beverage-4.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block font-medium text-center truncate mt-3">Root Beer</div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal"--}}
{{--                   class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">--}}
{{--                    <div class="box rounded-md p-3 relative zoom-in">--}}
{{--                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">--}}
{{--                            <div class="absolute top-0 left-0 w-full h-full image-fit">--}}
{{--                                <img alt="Midone - HTML Admin Template" class="rounded-md" src="https://enigma.left4code.com/dist/images/food-beverage-4.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block font-medium text-center truncate mt-3">Root Beer</div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal"--}}
{{--                   class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">--}}
{{--                    <div class="box rounded-md p-3 relative zoom-in">--}}
{{--                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">--}}
{{--                            <div class="absolute top-0 left-0 w-full h-full image-fit">--}}
{{--                                <img alt="Midone - HTML Admin Template" class="rounded-md" src="https://enigma.left4code.com/dist/images/food-beverage-4.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block font-medium text-center truncate mt-3">Root Beer</div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal"--}}
{{--                   class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">--}}
{{--                    <div class="box rounded-md p-3 relative zoom-in">--}}
{{--                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">--}}
{{--                            <div class="absolute top-0 left-0 w-full h-full image-fit">--}}
{{--                                <img alt="Midone - HTML Admin Template" class="rounded-md" src="https://enigma.left4code.com/dist/images/food-beverage-4.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block font-medium text-center truncate mt-3">Root Beer</div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal"--}}
{{--                   class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">--}}
{{--                    <div class="box rounded-md p-3 relative zoom-in">--}}
{{--                        <div class="flex-none relative block before:block before:w-full before:pt-[100%]">--}}
{{--                            <div class="absolute top-0 left-0 w-full h-full image-fit">--}}
{{--                                <img alt="Midone - HTML Admin Template" class="rounded-md" src="https://enigma.left4code.com/dist/images/food-beverage-4.jpg">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="block font-medium text-center truncate mt-3">Root Beer</div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}

        </div>
    </div>
    <div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body px-5 py-10">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Title</label>
                        <input name="title" id="modal-form-1" type="text" class="form-control" placeholder="Title    ">
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label for="modal-form-3" class="form-label">Description</label>
                        <textarea name="description" id="modal-form-3" class="form-control" placeholder="Description"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-primary w-24">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>

        $(".category").click(function () {
            alert("hey");
            $(this).slideUp();
        });
        $(function () {
            c
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('category_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.menu.food-categories.massDestroy') }}",
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
