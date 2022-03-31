<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Zespoły</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Panel administracyjny</a></li>
                        <li class="breadcrumb-item active">Zespoły</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

        @if(session()->has('message'))
                <div class="alert alert-info alert-dismissible fade show" id="alertbar" role="alert">
                <strong> <i class="fa fa-check-circle mr-1"></i> Sukces!</strong> 
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
         @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        <button wire:click.prevent="addNew" class="btn btn-success mb-2"><i
                                class="fa fa-plus-circle mr-2"></i> Dodaj Zespół</button>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">L.p.</th>
                                        <th scope="col">Zespół</th>
                                        <th scope="col">Klasa</th>
                                        <th scope="col">Grupa</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                     <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $team->teammembers }}</td>
                                        <td>{{ $team->classname }}</td>
                                        <td>{{ $team->group }}</td>
                                        <td>
                                            <a href="" class="btn btn-primary" wire:click.prevent="editTeam({{ $team }})"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger" wire:click.prevent="confirmTeamRemoval({{ $team->id }})"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            {{ $teams->links() }}
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
                        @if($showEditForm)    
                        <span>Edycja zespołu</span> 
                        @else
                        <span>Dodawanie nowego zespołu </span>
                        @endif
                    </h5>

                    <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" autocomplete="off" wire:submit.prevent="{{ $showEditForm ? 'updateTeam' : 'createTeam' }}">
                        <div class="col-sm-12 mb-3">
                            <label for="teammembers" class="form-label">Zespół</label>
                            <input type="text" wire:model.defer="state.teammembers" class="form-control @error('teammembers') is-invalid @enderror" id="teammembers" aria-describedby="teammembersHelp" placeholder="Wpisz członków zespołu">
                            @error('teammembers')
                            <div class="invalid-feedback">
                                Musisz podać członków zespołu
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="classname" class="form-label">Wybierz klasę</label>
                            <select class="form-control form-select" wire:model.defer="state.classname" aria-label="Default select example">
                                <option selected>-- Klasa --</option>
                                <option value="3Kg">Klasa 3Kg</option>
                                <option value="3R">Klasa 3R</option>
                                <option value="4I">Klasa 4I</option>
                                <option value="4K">Klasa 4K</option>
                                <option value="4R">Klasa 4R</option>
                            </select>
                            @error('classname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3">

                            <label for="group" class="form-label">Grupa</label>
                            <select class="form-control form-select" wire:model.defer="state.group" aria-label="Default select example">
                                <option selected>-- Klasa --</option>
                                <option value="Grupa I">Grupa I</option>
                                <option value="Grupa II">Grupa II</option>
                            </select>
                            @error('group')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Anuluj</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                    @if($showEditForm)    
                        <span>Zapisz zmiany</span> 
                        @else
                        <span>Zapisz </span>
                    @endif
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="bg-danger modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Usunąć zespół? </h5>
                    <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <span>Na pewno?</span>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i> Anuluj</button>
                <button type="button" wire:click.prevent="deleteTeam" class="btn btn-danger"><i class="fa fa-trash mr-1"></i>Usuń</button>
                    
                </div>
            </div>
        </div>
    </div>

</div>
