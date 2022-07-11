@if(Auth::guard('admin')->check())
<option value="">Select Child 2 Category</option>
@foreach($childcat->subchilds as $subchild)
<option data-href="{{ route('admin-childchildcat-load',$subchild->id) }}" value="{{ $subchild->id }}">{{ $subchild->name }}</option>
@endforeach

@else 
<option value="">Select Child 2 Category</option>
@foreach($childcat->subchilds as $subchild)
<option data-href="{{ route('vendor-childchildcat-load',$subchild->id) }}" value="{{ $subchild->id }}">{{ $subchild->name }}</option>
@endforeach
@endif