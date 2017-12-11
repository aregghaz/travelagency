@extends('page.app')

@section('title')
Edit Post
@endsection

@section('content')
<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
	tinymce.init({
		selector : "textarea",
		plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
		toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages"
	}); 
</script>

<form method="post" action='{{ url("/update") }}'>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="post_id" value="{{ $posts->id }}{{ old('post_id') }}">
	<div class="form-group">
		<input required="required" placeholder="Enter title in English" type="text" name = "titleEn" class="form-control" value="@if(!old('titleEn')){{$posts->titleEn}}@endif{{ old('titleEn') }}"/>
		<input required="required" placeholder="Enter title in Russian" type="text" name = "titleRu" class="form-control" value="@if(!old('titleRu')){{$posts->titleRu}}@endif{{ old('titleRu') }}"/>
	</div>
	<div class="form-group">
		<img src="http://discoverarmenia.tours/images/turs/{{ $posts->img1 }}" width="290px" height="180px" alt="">
	</div>
	<div class="form-group">
		<select name="" id="">
			<option value="all">All</option>
			<option value="extreme">extreme</option>
			<option value="heal">heal</option>
			<option value="gastronomy">gastronomy</option>
			<option value="culture">culture</option>
			<option value="weekend">weekend</option>
		</select>

	</div>
	<div class="form-group">
		<a href="/images/turs/{{ $posts->linkEn }}">english link</a><br>
		<a href="/images/turs/{{ $posts->linkRu }}">Russian link</a>
	</div>
	@if($posts->active == '1')
	<input type="submit" name='publish' class="btn btn-success" value = "Update"/>
	@else
	<input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
	@endif
	<input type="submit" name='save' class="btn btn-default" value = "Save As Draft" />
	<a href="{{  url('delete/'.$posts->id.'?_token='.csrf_token()) }}" class="btn btn-danger">Delete</a>
</form>
@endsection
