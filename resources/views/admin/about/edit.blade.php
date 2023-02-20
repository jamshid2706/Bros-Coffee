@section('scripts')
    <script>


        import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

        $(".about").each(function () {
            const el = this;
            ClassicEditor.create(el).catch((error) => {
                console.error(error);
            });
        });


    </script>
@endsection
