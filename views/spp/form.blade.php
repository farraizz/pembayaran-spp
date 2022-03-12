        <label for="form-control">Tahun</label>
        <div class="mb-3">
            <input type="text" class="form-control" name="tahun" value="{{$model->tahun}}">
        </div>
        <label for="form-control">Nominal</label>
        <div class="mb-3">
            <input type="text" class="form-control" name="nominal" value="{{$model->nominal}}">
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <button type="submit" class="btn btn-primary">Tambah</button>