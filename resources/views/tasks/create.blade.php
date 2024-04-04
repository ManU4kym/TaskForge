@include('layouts.botsrap')
@include('layouts.header')
@vite('resources/css/index.css')
<link href="{{ asset('resources/css/index.css') }}">

<section class="create">
    <h1>Publish a Post</h1>
    <hr>
    <form method="POST" action="/tasks">
      @csrf
        <div class="form-group" style="margin-bottom:22px ">
          <label for="title">Title</label>
          <input type="title" name="title" class="form-control" id="title" style="width: auto">
        </div>
        
        <div class="form-group">
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            <br>
        <button type="submit" class="btn btn-primary">Publish</button>
      </form>
    </section>
