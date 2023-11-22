<div class='text-start'>
  @can('order.edit')
    <a href="{{ route('order.edit',$id) }}" class="btn btn-icon btn-success btn-sm mr-2"><i class="bi bi-pencil fs-4"></i></a>
  @endcan

  @can('order.delete')
   <a href="{{ route('order.delete',$id) }}" class="btn btn-icon btn-danger btn-sm"><i class="bi bi-trash fs-4"></i></a>
  @endcan
</div>
