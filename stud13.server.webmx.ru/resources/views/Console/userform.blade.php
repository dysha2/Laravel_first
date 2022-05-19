<form class="console" action="/console/usermodification" method="post" enctype="multipart/form-data">
	
	<input required type="text" placeholder="Login" name="Login" value="{{ isset($User->Login)? $User->Login : '' }}"><p>	
	<input required type="text" placeholder="Fullname" name="Fullname" value="{{ isset($User->Fullname)? $User->Fullname : '' }}"><p>
	<input required type="text" placeholder="Address" name="Address" value="{{ isset($User->Address)? $User->Address : '' }}"><p>
	<input required type="text" placeholder="Description" name="Description" value="{{ isset($User->Description)? $User->Description : '' }}"><p>
	<textarea required name="AboutSelf">{{ isset($User->AboutSelf)? $User->AboutSelf : '' }}</textarea><p>
	<select multiple name="Hubs[]" style="width: 500px;">
        @foreach($Hubs as $Hub)
        <option
        @if(isset($User->Hubs))
            @if($User->Hubs->contains($Hub->HubId)) selected
            @endif 
        @endif 
        value="{{$Hub->HubId}}">{{$Hub->Name}}</option>
        @endforeach
    </select><p>
	<input type="text" placeholder="Дата" name="RegDate" value="{{ isset($User->RegDate)? $User->RegDate : '' }}" readonly><p>
	<input type="text" placeholder="Изображение" name="ImagePath" value="{{ isset($User->Image)? $User->Image : '' }}" readonly><p>	
	<input type="file" name="Image" /><p>
        
	<input type="hidden" name="UserId" value="{{ isset($User->UserId)? $User->UserId : '' }}"><p>	
	<input type="submit" value="{{ isset($User)? 'Изменить' : 'Добавить' }}"><p>	
	@csrf
</form>