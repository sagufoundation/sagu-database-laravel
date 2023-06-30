{!! Form::close() !!}
<div class="row">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">status</th>
                                <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><img src="{{ asset('assets/admin/assets/images/small/img-3.jpg')}}" alt="image"
                                        class="img-fluid img-thumbnail" width="200"></td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <form action="{{ url('app/artikel',1) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><img src="{{ asset('assets/admin/assets/images/small/img-3.jpg')}}" alt="image"
                                        class="img-fluid img-thumbnail" width="200"></td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>
                                    <form action="{{ url('app/artikel',1) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td><img src="{{ asset('assets/admin/assets/images/small/img-3.jpg')}}" alt="image"
                                        class="img-fluid img-thumbnail" width="200"></td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                                <td>
                                    <form action="{{ url('app/artikel',1) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
