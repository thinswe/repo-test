    <a
        href="{{$url}}"
        class="btn btn-primary btn-hover {{$class ?? ''}}" title="{{ $title ?? ''}}" at="{{ $at ?? '' }}"
    >
        @switch(strtolower($type))
            @case('add')
                <i class="fa-solid fa-circle-plus"></i>
            @break
            @case('edit')
                <i class="fa-solid fa-pen-to-square"></i>
            @break
            @case('delete')
                <i class="fa-solid fa-trash-can"></i>
            @break
            @case('view')
                <i class="fa-solid fa-eye"></i>
            @break
            @case('back')
                <i class="fa-solid fa-circle-left"></i>
            @break
            @case('permission')
                <i class="fa-solid fa-unlock-keyhole"></i>
            @break
            @case('template-choose')
                <i class="far fa-file-code"></i>
            @break
            @case('report-upload')
                <i class="fa-solid fa-file-arrow-up"></i>
            @break

            @case('resume')
                <i class="fa-solid fa-arrow-right"></i>
            @break

            @case('complete')
                <i class="fa-regular fa-circle-check"></i>
            @break

            @case('comment')
                <i class="fa-regular fa-share"></i>
            @break

            @case('template-view')
                <i class="far fa-file-alt"></i>
            @break
            @case('approve')
                <i class="fa-regular fa-thumbs-up"></i>
            @break

            @case('labcheck')
                <i class="fa fa-flask"></i>
            @break
            @case('labresult')
                <i class="fa fa-clipboard-list"></i>
            @break

            @case('LabResultSend')
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
            @break

            @case('print')
                <i class="fa fa-print"></i>
            @break



            @case('approve')
                <i class="fa-regular fa-thumbs-up"></i>
            @break

            @case('non-approve')
                <i class="fa-solid fa-thumbs-down"></i>
            @break

            @case('labcheck')
                <i class="fa fa-flask active"></i>
            @break
            @case('labresult')
                <i class="fa fa-clipboard-list active"></i>
            @break

            @case('LabResultSend')
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
            @break

            @case('print')
                <i class="fa fa-print"></i>
            @break

            @case('pass')
                Pass
            @break

            @case('fail')
                Fail
            @break



            @default
        @endswitch
        {{$name}}
    </a>

