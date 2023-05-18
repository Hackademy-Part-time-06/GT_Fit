<x-main>

    <div class="my-5"> </div>
    <div class="container py-4">
        <form action="{{ route('send') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Inserisci il tuo nome"
                    value="{{ old('nome') }}" />
            </div>

            <!--  -->
            <div class="mb-3">
                <label class="form-label">Telefono</label>
                <input class="form-control" type="text" name="telefono" placeholder="Inserisci il tuo telefono"
                    value="{{ old('telefono') }}" />
            </div>
            <!--  -->
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" type="email"name="email" placeholder="Inserisci la tua Email"
                    value="{{ old('email') }}" />
            </div>
            <!-- -->
            <div class="mb-3">
                <label class="form-label">Messaggio</label>
                <textarea class="form-control" type="text" name="messaggio" placeholder="Messaggio" style="height: 10rem;">{{ old('messaggio') }}</textarea>
            </div>
            <!--  -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="submit">Invia</button>
        </form>
        <!-- in caso di errore-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</x-main>
