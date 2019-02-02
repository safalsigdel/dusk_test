@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                        <example-component></example-component>
                        <button id="launch" data-toggle="modal" data-target="#open">Launch Model</button>
                       <div id="open" class="modal fade" role="dialog">
                           <div class="modal-dialog">
                               <div class="modal-content">
                                  <div class="modal-header">
                                      Lara
                                  </div>
                                   <div class="modal-body">
                                       <p>This is modal body</p>
                                   </div>
                                   <div class="modal-footer">
                                       <button id="close">Close</button>
                                   </div>
                               </div>
                           </div>
                       </div>
                    <span id="safal"></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('#close').click(function () {
            $('#open').modal('hide');

        });

    });

   setTimeout(()=>{
       // document.location.pathname = '/';
       document.getElementById('safal').innerHTML='ok';
   },3000)
</script>