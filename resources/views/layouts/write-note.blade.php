<div class="col-md-12">
    <div class="collapse" id="collapseMenu">
        <div class="card card-block card-stretch">
            <div class="card-body write-card">
                <div class="container-fluid collapse-fluid">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 p-0">
                        <form action="{{route('index.store')}}" method="post" >
                            @csrf
                                <input type="text" class="form-control" placeholder="title" name="title" id="">

                                <div class="card card-transparent card-block card-stretch event-note">
                                    <textarea name="description" id="editor"></textarea>

                                </div>
                            </div>
                            <div class="col-lg-12 p-0 d-flex justify-content-end">
                                <button  class="btn btn-outline-primary" data-extra-toggle="toggle" data-extra-class-show=".show-note-button" data-extra-class-hide=".hide-note-button">Close</button>
                                <button type="submit" class="btn btn-primary ml-2" data-extra-toggle="toggle" data-extra-class-show=".show-note-button" data-extra-class-hide=".hide-note-button">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
