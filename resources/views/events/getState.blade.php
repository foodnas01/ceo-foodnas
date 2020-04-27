
    <option>Select State</option>
    @foreach($states as $eachState)
    <option value="{{$eachState->id}}">{{$eachState->name}}</option>
    @endforeach
