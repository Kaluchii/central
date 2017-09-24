@section('stageObj')
    <script type="text/javascript">
        var stageObj = {
            @foreach($stages->dom_stages_group as $stage)
                @if($stage->show_field == 1)
{{$stage->id_field}}: {
                        text: '{{$stage->text_field}}',
                        images: [
                        @foreach($stage->stage_images_group as $stage_img)
                            {
                                src: '{{$stage_img->stage_photo_field->link}}?{{$stage_img->stage_photo_field->cache_index}}'
                            },
                        @endforeach
                        ]
                    },
                @endif
            @endforeach
        }
    </script>
@endsection