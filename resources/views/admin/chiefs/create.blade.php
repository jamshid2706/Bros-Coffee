<!-- BEGIN: Modal Toggle -->
<div class="my-4">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
       class="btn btn-primary">Add Chiefs</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <div class="text-left">
                    <form action="{{ route('admin.chiefs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="upload__box">
                            <div class="upload__btn-box">
                                <label class="upload__btn"><p>Upload images</p>
                                    <input name="image" type="file" data-max_length="1" class="upload__inputfile">
                                </label>
                            </div>
                            <div class="upload__img-wrap"></div>
                        </div>
                        <div class="mt-3">


                            <!-- BEGIN: Validation Form -->
                            <form class="validate-form">
                                <div class="input-form">
                                    <label for="validation-form-1" class="form-label w-full flex flex-col sm:flex-row">Name <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 2 characters</span></label>
                                    <input id="validation-form-1" type="text" name="name" class="form-control" placeholder="name" minlength="2" required>
                                </div>

                                <div class="input-form mt-3">
                                    <label for="validation-form-2" class="form-label w-full flex flex-col sm:flex-row">Member Info <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, email address format</span></label>
                                    <input id="validation-form-2" type="text" name="name" class="form-control" placeholder="member info" required>
                                </div>

                                <div class="input-form mt-3">
                                    <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">Profile Instagram <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Optional, URL format</span></label>
                                    <input id="validation-form-5" type="url" name="url" class="form-control" placeholder="https://instagram.com">
                                </div>

                                <div class="input-form mt-3">
                                    <label for="validation-form-5" class="form-label w-full flex flex-col sm:flex-row">Profile Facebook <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Optional, URL format</span></label>
                                    <input id="validation-form-5" type="url" name="url" class="form-control" placeholder="https://facebook.com">
                                </div>

                                <div class="input-form mt-3">
                                    <label for="validation-form-6" class="form-label w-full flex flex-col sm:flex-row">Comment <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 10 characters</span></label>
                                    <textarea id="validation-form-6" class="form-control" name="comment" placeholder="Type your comments" minlength="10" required></textarea>
                                </div>
                            </form>

                            <a class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</a>
                            <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END: Modal Content -->
