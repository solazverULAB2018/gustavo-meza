@if(session('message'))
    <div class="alert alert-{{session('message')['alert']}}" role="alert">
        <strong>{{session('message')['text']}}</strong>
    </div>
@endif