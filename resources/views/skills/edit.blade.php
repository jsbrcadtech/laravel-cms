@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Skill</h2>

    <form method="post" action="/console/skills/edit/{{$skill->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{old('name', $skill->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="icon">Icon:</label>
            <input type="text" name="icon" id="icon" value="{{old('icon', $skill->icon)}}" required>

            @if ($errors->first('icon'))
                <br>
                <span class="w3-text-red">{{$errors->first('icon')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="favourite">Favourite:</label>
            <input type="number" name="favourite" id="favourite" value="{{old('favourite', $skill->favourite)}}" required>

            @if ($errors->first('favourite'))
                <br>
                <span class="w3-text-red">{{$errors->first('favourite')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Skill</button>

    </form>

    <a href="/console/skills/list">Back to Skill List</a>

</section>

@endsection
