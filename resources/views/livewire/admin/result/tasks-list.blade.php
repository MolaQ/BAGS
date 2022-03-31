<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Wyniki</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Panel administracyjny</a></li>
                        <li class="breadcrumb-item active">Wyniki</li>
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

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-striped">
                                <thead>

                                    <tr>
                                        <th scope="col">L.p.</th>
                                        <th scope="col">Kategoria</th>
                                        <th scope="col">Zadanie</th>
                                        <th scope="col">Stan zadania</th>
                                        <th scope="col">Aktualizuj</th>
                                    </tr>

                                </thead>
                                <tbody>
                                   @foreach($stages as $stage)
                                   <tr>
                                        <td scope="col">{{ $loop->iteration}}</td>
                                        <td scope="col">{{ $stage->category}}</td>
                                        <td scope="col">{{ $stage->title }}<BR><small>{{ $stage->description }}</small> </td>
                                        <td scope="col"><a class="btn btn-light btn-sm disable">{{ $stage->stagestate }}  </a> </td>
                                        <td scope="col"><a href="" class="btn btn-primary" wire:click.prevent="addPoints({{ $stage->id }})")><i class="fa fa-plus-circle mr"></i></a> </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <!-- Paggination -->
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
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <span>
                            Dodawanie punktacji do zadania:
                        </span>
                    </h5>
                    <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form class="row g-3">
                        <div class="mb-3 row">
                        @foreach($teams as $team)

                            <div class="col-sm-7 d-flex justify-content-end">
                            <label for="staticEmail" class="offset-sm-2 col-sm-10 col-form-label">{{ $team->teammembers }}</label>
                            </div>
                            <div class="col-sm-3 d-flex">
                            <input type="text" wire:model.defer="state.title" lass="form-control" name="points" id="inputPassword">
                            </div>

                        @endforeach
            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="fa fa-times mr-1"></i> Anuluj</button>
                    <button type="submit" wire:click.prevent="test" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                        <span>Dodaj punkty</span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
