@extends(base)

@section('content')
<form action="{{ route('upload') }}"
method="post"
enctype="multipart/form-data">
@csrf
<input type="file" name="file">
<input type="submit">
</form>
@endsection