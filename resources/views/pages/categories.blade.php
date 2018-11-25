<select name="category">
	@foreach($categories as $categories)
    <option value="{{ $categories->name}}">{{ $categories->name}}</option>   
    @endforeach                     
</select>