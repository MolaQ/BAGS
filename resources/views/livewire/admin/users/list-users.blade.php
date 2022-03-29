<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Użytkownicy</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Panel administracyjny</a></li>
                        <li class="breadcrumb-item active">Użytkownicy</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        <button wire:click.prevent="addNew" class="btn btn-success mb-2"><i
                                class="fa fa-plus-circle mr-2"></i> Dodaj
                            użytkownika</button>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">L.p.</th>
                                        <th scope="col">Użytkownicy</th>
                                        <th scope="col">Klasa</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>
                                            <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Modal -->
    <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dodawanie nowego zespołu</h5>
                    <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">x</button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="createUser">
                        <div class="mb-3">
                            <label for="name" class="form-label">Zespół</label>
                            <input type="name" wire:model.defer="state.name" class="form-control" id="name" aria-describedby="nameHelp">
                        </div>
                        <div class="mb-3">
                            <label for="classname" class="form-label">Klasa</label>
                            <input type="classname" wire:model.defer="state.classname" class="form-control" id="classname"
                                aria-describedby="classnameHelp">
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
                </form>
            </div>
        </div>
    </div>


</div>
