
@if($function == 'subcategorys')
<td id="classlist">
	
          <select name="sub_category">
            <option value=""> Select Sub category </option>

            @foreach($subcategory as $subcategorys)
            
            <option value="{{ $subcategorys->category_id }}">{{ $subcategorys->category_name }}</option>

            @endforeach
          </select>
</td>
@endif