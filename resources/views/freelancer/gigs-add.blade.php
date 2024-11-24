@extends('theme-layout.layout')

@php
    $title = 'My Gigs';
    $subTitle = 'My Gigs';
@endphp

@section('content')
    <div class="row gy-4 justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add New Gig</h5>
                </div>
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="#0" class="form-control" placeholder="Title">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="editor"  id="example" rows="10" cols="80">
                                This is a CKEditor example.
                            </textarea>

                        </div>
                        <div class="col-12">
                            <label class="form-label">Revisions</label>
                            <input type="email" name="revisions" class="form-control" placeholder="4-7">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Level</label>
                            <input type="text" name="level" class="form-control" placeholder="4-7">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Duration</label>
                            <input type="password" name="duration" class="form-control" placeholder="7 weeks">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary-600">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>
    <script>
        // Replace the textarea #example with SCEditor
        var textarea = document.getElementById('example');
        sceditor.create(textarea, {
            format: 'bbcode',
            style: 'https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/content/default.min.css'
        });
    </script>





@endsection

