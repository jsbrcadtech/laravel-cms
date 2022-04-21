@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Contact</h2>

    <form method="post" action="/console/contacts/edit/{{$contact->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="{{old('email', $contact->email)}}" required>
            
            @if ($errors->first('email'))
                <br>
                <span class="w3-text-red">{{$errors->first('email')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="{{old('phone', $contact->phone)}}" required>
            
            @if ($errors->first('phone'))
                <br>
                <span class="w3-text-red">{{$errors->first('phone')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="{{old('address', $contact->address)}}" required>
            
            @if ($errors->first('address'))
                <br>
                <span class="w3-text-red">{{$errors->first('address')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Contact</button>

    </form>

    <a href="/console/contacts/list">Back to Contact List</a>

</section>

@endsection