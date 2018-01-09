@extends('page.app')

@section('title')
Edit Post
@endsection

@section('content')

<form method="post" action='{{ url("/update") }}'  enctype="multipart/form-data">
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
		<select name="role" id="">
			<option value="{{ $posts->role }}">{{ $posts->role }}</option>
			<option value="all">All</option>
			<option value="extreme">extreme</option>
			<option value="heal">heal</option>
			<option value="gastronomy">gastronomy</option>
			<option value="culture">culture</option>
			<option value="weekend">weekend</option>
		</select>

	</div>
	<div class="form-group">
		<a href="/images/turs/{{ $posts->linkEn }}">english link</a>
		<br>
		<div class="form-group">
			<label for="fileEn">upload PDF file in English</label>
			<input type="file" multiple="multiple" placeholder="pdf file in ENglish" id="fileEn" name="fileEn" class="form-control">
		</div>
		<hr>
		<a href="/images/turs/{{ $posts->linkRu }}">Russian link</a>
		<br>
		<div class="form-group">
			<label for="fileRu">upload PDF file in Russian</label>
			<input type="file" id="fileRu" multiple="multiple" placeholder="pdf file in Russian" name="fileRu" class="form-control">
		</div>
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
