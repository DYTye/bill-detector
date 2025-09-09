@extends('layout.components.app')

@section('content')
    <section class="title">
        <h2>Select media to Upload</h2>

        <div class="container">
            <form action="#" method="POST" enctype="multipart/form-data">
                <input type="file" name="recipt" accept="image/*" required>
                <button type="submit">Upload</button>
            </form>
        </div>
    </section>
@endsection

