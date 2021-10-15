
<tbody id="tbody-act">
    @php
        $i = 1;
    @endphp
    @foreach ($activity as $activit)


        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $activit->title }}</td>
            <td>{!! \Illuminate\Support\Str::limit($activit->description ,  50 , '...') !!}</td>

            <td width="20%" align="center">
                
                <a href="{{ route('activity.edit', $activit->id) }}" title="تعديل"
                    type="button" class="btn btn-primary btn-xs">
                    <span class=" glyphicon glyphicon-edit" aria-hidden="true">
                    </span>
                    تعديل
                </a>
                {{-- <form  style="display: inline" action="{{route('activity.destroy' , $activit->id)}}" method="post">
                    @method('delete')
                    @csrf
                     <button type="submit" class="btn btn-danger btn-xs">حذف</button>
                 </form> --}}
                <button data-id="{{$activit->id}}" title="حذف" type="button"
                    class="btn btn-danger btn-xs delete">
                    <span class=" glyphicon glyphicon-trash" aria-hidden="true">
                    </span>
                    حذف
                </button> 



            </td>
        </tr>
       
  @endforeach



</tbody>
