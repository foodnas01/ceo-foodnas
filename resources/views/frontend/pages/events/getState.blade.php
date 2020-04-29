
    <option>State</option>
    @foreach($states as $eachState)
    <option @if(isset($stateid) && ($stateid == $eachState->id)) selected @endif value="{{$eachState->id}}">{{$eachState->name}}</option>
    @endforeach
