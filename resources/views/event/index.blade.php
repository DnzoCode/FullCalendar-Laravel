<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
  </head>
  <body>
    <div class="container">
      <div id='calendar'></div>

    </div>

  

    
  
  <!-- Modal -->
  <div class="modal fade" id="evento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" id="formularioEventos">
                {!! csrf_field() !!}
                  <input type="hidden" name="id" id="id" class="form-control" placeholder="" aria-describedby="helpId">

                <div class="form-group">
                    <label for="title" class="form-label">Titulo</label>
                    <input type="text"class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
                </div>

                <div class="form-group">
                  <label for="start" class="form-label">Start</label>
                  <input type="date" name="start" id="start" class="form-control" placeholder="" aria-describedby="helpId">
                  <small id="helpId" class="text-muted">Help text</small>
                </div>

                <div class="form-group">
                    <label for="end" class="form-label">End</label>
                    <input type="date" name="end" id="end" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                  </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
            <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
            <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.2/index.global.min.js"></script>
    

    <script src="{{asset('js/calendar.js')}}" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js" integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <script type="text/javascript">
        let baseURL = {!! json_encode(url('/')) !!};
    </script>
  </body>
</html>


