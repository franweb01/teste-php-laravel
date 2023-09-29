
<form action="{{ route('import.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="file" name="file" />

    <button type="submit">Importar</button>
</form>
