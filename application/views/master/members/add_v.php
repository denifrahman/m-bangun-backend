 <!-- Modal -->
 <div class="modal fade" id="modal_tambah_user" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <form id="formMaster" method="">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="title_modal_tambah_user">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group m-form__group row">
                                <div class="col-6">
                                    <label for="example-text-input" class="control-label">Nama</label>
                                    <div class="input-group m-input-group">
                                        <input name="nama" id="nama" type="text" class="form-control m-input" required>
                                        <input type="hidden" name="id" id="id" value="undefined">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="example-text-input" class="control-label">Username</label>
                                    <div class="input-group m-input-group">
                                        <input name="username" id="username" type="text" class="form-control m-input"
                                            required>
                                    </div>
                                    <div id="errorMessageUsername" style="color: red;"></div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-6">
                                    <label for="example-text-input" class="control-label">Password</label>
                                    <div class="input-group m-input-group">
                                        <input name="password" id="password" type="password"
                                            class="form-control m-input" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="example-text-input" class="control-label">Jenis Kelamin</label>
                                    <div class="input-group m-input-group">
                                        <select required class="form-control" id="select_3" style="width:100%"
                                            name="jenis_kelamin">
                                            <option value="0">Silahkan pilih Jenis Kelamin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-6">
                                    <label for="example-text-input" class="control-label">No telepon</label>
                                    <div class="input-group m-input-group">
                                        <input name="no_telp" id="no_telp" type="number" class="form-control m-input"
                                            required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="example-text-input" class="control-label">Hak Akses</label>
                                    <div class="input-group m-input-group">
                                        <select required class="form-control" id="select_4" style="width:100%"
                                            name="role">
                                            <option value="0">Silahkan pilih hak akses</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-12">
                                    <label for="example-text-input" class="control-label">Alamat Asli</label>
                                    <div class="input-group m-input-group">
                                        <textarea name="alamat" id="alamat" type="text"
                                            class="form-control m-input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" id="btn-simpan"
                                onclick="simpan()">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>