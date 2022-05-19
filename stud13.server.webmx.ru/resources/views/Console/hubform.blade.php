<form class="console" action="/console/hubmodification" method="post" enctype="multipart/form-data">
	
	<input required type="text" placeholder="Название" name="Name" value="{{ isset($Hub->Name)? $Hub->Name : '' }}"><p>	
        <label>Content</label>
	<textarea required name="Description">{{ isset($Hub->Description)? $Hub->Description : ''}}</textarea><p>
	<input type="text" placeholder="Изображение" name="ImagePath" value="{{ isset($Hub->Image)? $Hub->Image : '' }}" readonly><p>	
	<input type="file" name="Image" /><p>
        
	<input type="hidden" name="HubId" value="{{ isset($Hub->HubId)? $Hub->HubId : '' }}"><p>	
	<input type="submit" value="{{ isset($Hub)? 'Изменить' : 'Добавить' }}"><p>	
	@csrf
</form>