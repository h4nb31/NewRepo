<!DOCTYPE HTML>

<style>
    button{
        color: yellow;
        font: 1.3rem Inconsolata, monospace;
        text-shadow: 0 0 5px #C8C8C8;
        background-color: darkslategray;
        border-color: #1a202c;

    }
    a{
        color: yellow;
        font: 1.3rem Inconsolata, monospace;
        text-shadow: 0 0 5px #C8C8C8;
    }
    input{
        background: transparent;
        border: none;
        color: white;
        font: 1.3rem Inconsolata, monospace;
        text-shadow: 0 0 5px #C8C8C8;
    }
    body{
        background-color: black;
        background-image: radial-gradient(
            rgba(0, 150, 0, 0.75), black 120%
        );
        height: 100vh;
        margin: 0;
        overflow: hidden;
        padding: 2rem;
        color: white;
        font: 1.3rem Inconsolata, monospace;
        text-shadow: 0 0 5px #C8C8C8;
    }
</style>

<html lang="en">
    <head>
        <title>ToDo List</title>
    </head>
    <body>
        <form action="{{route('store')}}" method="POST" autocomplete="off">
            @csrf
            <pre>
                <label>Task:<input type="text" name="task"></label>
                <label>Description:<input type="text" name="description" style="width: 50%"></label>
                <button type="submit">Submit</button>
            </pre>
        </form>
         {{-- if tasks count --}}
      @if(count($tasks))
          @foreach($tasks as $task)
              <form action="{{route('destroy', $task->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button>Delete task</button>
              </form>
          @endforeach
      @endif
     </body>
</html>
