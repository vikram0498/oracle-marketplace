@if(Auth::guard('admin')->check())
<option value="">Select Child 1 Category</option>
@foreach($subcat->childs as $child)
<option data-href="{{ route('admin-subchildcat-load',$child->id) }}" value="{{ $child->id }}">{{ $child->name }}</option>
@endforeach

@else 
<option value="">Select Child 1 Category</option>
@foreach($subcat->childs as $child)
<option data-href="{{ route('vendor-subchildcat-load',$child->id) }}" value="{{ $child->id }}">{{ $child->name }}</option>
@endforeach
@endif