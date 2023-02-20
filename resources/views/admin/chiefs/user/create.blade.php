<!-- BEGIN: Modal Toggle -->
<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#header-footer-modal-preview" class="intro-y btn btn-primary my-5">Add Food</a>
<!-- END: Modal Toggle -->
<!-- BEGIN: Modal Content -->
<div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- BEGIN: Modal Header -->
            <div class="modal-header">
                <h2 class="font-medium text-base mr-auto">Add User</h2>
            </div>
            <!-- END: Modal Header -->
            <!-- BEGIN: Modal Body -->
            <form action="{{ route('admin.chiefs.store') }}" method="POST">
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    @csrf
                    <div class="col-span-12 sm:col-span-6">
                        <label for="modal-form-1" class="form-label">Title</label>
                        <input name="title" id="modal-form-1" type="text" class="form-control" placeholder="Title    ">
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label for="category_id" class="form-label mt-3">Category</label>
                        <select class="tom-select w-full" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-12 sm:col-span-12">
                        <label for="modal-form-3" class="form-label">Receipt</label>
                        <textarea name="receipt" id="modal-form-3" class="form-control" placeholder="Description"></textarea>
                    </div>

                </div>
                <!-- END: Modal Body -->
                <!-- BEGIN: Modal Footer -->
                <div class="modal-footer">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                    <button type="submit" class="btn btn-primary w-20">Submit</button>
                </div>
            </form>

            <!-- END: Modal Footer -->
        </div>
    </div>
</div>
<!-- END: Modal Content -->
