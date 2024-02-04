<h1>Upload Data</h1>
<form action="uploadedfile" method="POST" enctype="multipart/form-data">

    @csrf
    <input type="file" name="file"> <br> <br>
    <button type="submit">Upload File</button>
</form>