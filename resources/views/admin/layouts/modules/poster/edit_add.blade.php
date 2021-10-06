<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="name">Poster Name</label>
                                    <div class="input-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            value="{{ $poster->name ?? old('name') }}" placeholder="Poster Name">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="type">Poster Type</label>
                                    <select class="form-control" name="type" id="type">
                                        <option selected>Choose type</option>
                                        <option value="horizontal">Horizontal</option>
                                        <option value="vertical">Vertical</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="image">Poster Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="priority">Poster Priority</label>
                                    <select class="form-control" name="priority" id="priority">
                                        <option selected>Choose priority</option>
                                        <option value="high">High</option>
                                        <option value="meduim">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <x-adminetic-edit-add-button :model="$poster ?? null" name="Poster" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
