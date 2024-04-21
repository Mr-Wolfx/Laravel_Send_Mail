<x-layout>
    @if (session('errorEmail'))
    <div class="alert alert-danger">
        {{session('errorEmail')}}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-warning col-md-12">
                <h1>
                    Invia il tuo complaint
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <form method="POST" action="{{route('contact.submit')}}">

                    @csrf

                    <div class="mb-3">
                        <label for="InputEmail" class="form-label text-warning" >Inserisci la e-mail</label>
                        <input name="email" type="email" class="form-control" id="InputEmail" placeholder="mario@aulab.it">
                    </div>
                    <div class="mb-3">
                        <label for="InputName" class="form-label text-warning" >nome</label>
                        <input name="name" type="text" class="form-control" id="InputName" placeholder="Mario Rossi">
                    </div>
                    <div class="container">
                        <div class="row">
                            <label for="InputMessage" class="form-label text-warning">inserisci il tuo messaggio</label>
                                    <textarea name="body" type="text" class="form-control" id="inputMessage" placeholder="Scrivi il tuo messaggio">
                                        
                                    </textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-warning mt-2">Invia Messaggio</button>
                </form>
            </div>
        </div>
    </div>

    <div style="height: 40vh;">
    </div>
</x-layout>