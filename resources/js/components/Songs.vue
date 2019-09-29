<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Songs</h3>

            <div class="card-tools">
              <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-music"></i> Add New
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Song Name</th>
                  <th>Artist</th>
                  <th>Album</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                    <span class="tag tag-success">Approved</span>
                  </td>
                  <td>
                    <a href="#">
                      <i class="fa fa-edit"></i>
                    </a> |
                    <a href="#">
                      <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.card -->
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input
                v-model="form.title"
                type="text"
                name="title"
                class="form-control"
                placeholder="Title"
                :class="{ 'is-invalid': form.errors.has('title') }"
              />
              <has-error :form="form" field="title"></has-error>
            </div>

            <div class="form-group">
              <input
                v-model="form.artist"
                type="text"
                name="artist"
                class="form-control"
                placeholder="artist"
                :class="{ 'is-invalid': form.errors.has('artist') }"
              />
              <has-error :form="form" field="artist"></has-error>
            </div>

            <div class="form-group">
              <input
                v-model="form.album"
                type="text"
                name="album"
                class="form-control"
                placeholder="album"
                :class="{ 'is-invalid': form.errors.has('album') }"
              />
              <has-error :form="form" field="album"></has-error>
            </div>

            <div class="form-group">
              <input
                v-model="form.genre"
                type="text"
                name="genre"
                class="form-control"
                placeholder="genre"
                :class="{ 'is-invalid': form.errors.has('genre') }"
              />
              <has-error :form="form" field="genre"></has-error>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Create</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: new Form({
        title: "",
        artist: "",
        album: "",
        genre: ""
      })
    };
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
