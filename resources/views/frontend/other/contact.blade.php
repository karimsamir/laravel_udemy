@extends("layout.master")

@section("title")
Contact
@endsection

@section("styles")
<link rel="stylesheet" href="{{URL::to('src/css/forms.css')}}">
@endsection

@section("content")
    
    @include("includes.info-box")
    
    <form id="contact_form" method="post">
        
        <div class="input-group">
            <label for="name">Your name</label>
            <input id="name" name="name" type="text" />
        </div>
        
        
        <div class="input-group">
            <label for="email">Your E-mail</label>
            <input id="email" name="email" type="text" />
        </div>
        
        <div class="input-group">
            <label for="subject">Subject</label>
            <input id="subject" name="subject" type="text" />
        </div>
        
        <div class="input-group">
            <label for="message">Your message</label>
            <textarea id="message" name="message" rows="10"></textarea>
        </div>
        
        <button type="submit" class="btn">Submit</button>
        
        <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>
@endsection