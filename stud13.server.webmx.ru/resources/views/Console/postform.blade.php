<form class="console" action="/console/postmodification" method="post" enctype="multipart/form-data">
	<input required type="text" placeholder="Название" name="Title" value="{{ isset($Post->Title)? $Post->Title : '' }}"><p>	
        <label>Content</label><p>
	<textarea required name="Content">{{ isset($Post->Content)? $Post->Content : '<div class="article-formatted-body article-formatted-body article-formatted-body_version-2"></div>' }}</textarea><p>
    <label>ShortContent</label><p>
    <textarea required name="ShortContent">{{ isset($Post->ShortContent)? $Post->ShortContent : '<div class="article-formatted-body article-formatted-body article-formatted-body_version-2"></div>' }}</textarea><p>
    <select required name="User">
        @foreach($Users as $User)
        <option
        @if(isset($Post->User))
            @if($User==$Post->User) selected
            @endif 
        @endif 
        value="{{$User->UserId}}">{{$User->Login}}</option>
        @endforeach
    </select><p>
    <label for="news">Новости?<label>
    <input id="news" type="checkbox" name="IsNews" value="{{ isset($Post->IsNews)? $Post->IsNews : '' }}"
    @if(isset($Post->IsNews))
        @if($Post->IsNews==true)checked
        @else unchecked
        @endif
    @endif
    ><p>
    <select multiple name="Hubs[]" style="width: 500px;">
        @foreach($Hubs as $Hub)
        <option
        @if(isset($Post->Hubs))
            @if($Post->Hubs->contains($Hub->HubId)) selected
            @endif 
        @endif 
        value="{{$Hub->HubId}}">{{$Hub->Name}}</option>
        @endforeach
    </select><p>
	<input type="text" placeholder="Дата" name="Date" value="{{ isset($Post->Date)? $Post->Date : '' }}" readonly><p>
	<input type="text" placeholder="Изображение" name="ImagePath" value="{{ isset($Post->Image)? $Post->Image : '' }}" readonly><p>	
	<input type="file" name="Image" /><p>
        
	<input type="hidden" name="PostId" value="{{ isset($Post->PostId)? $Post->PostId : '' }}"><p>	
	<input type="submit" value="{{ isset($Post)? 'Изменить' : 'Добавить' }}"><p>	
	@csrf
</form>