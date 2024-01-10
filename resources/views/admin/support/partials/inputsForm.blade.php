@csrf
<input
type="text"
placeholder="subject"
name="subject"
value="{{$supportFound->subject ?? old('subject')}}"
>

<textarea name="body" cols="30" rows="10">{{$supportFound->body ?? old('body')}}</textarea>
