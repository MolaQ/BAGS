<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Zadania konkursowe</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Panel administracyjny</a></li>
                        <li class="breadcrumb-item active">Zadania</li>
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
                                class="fa fa-plus-circle mr-2"></i> Dodaj zadanie</button>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">L.p.</th>
                                        <th scope="col">Kategoria</th>
                                        <th scope="col">Zadanie</th>
                                        <th scope="col">Opis</th>
                                        <th scope="col">Ilość punktów</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Akcja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stages as $stage)
                                    <tr>
                                        <td scope="col">{{ $loop->iteration }}</td>
                                        <td scope="col">{{ $stage->category }}</td>
                                        <td scope="col">{{ $stage->title }}</td>
                                        <td scope="col">{{ $stage->description }}</td>
                                        <td scope="col">{{ $stage->maxpoints }}</td>
                                        <td scope="col">{{ $stage->stagestate }}</td>
                                        <td scope="col">
                                            <a href="" class="btn btn-primary" wire:click.prevent="editStage({{ $stage }})"><i class="fa fa-edit"></i></a>
                                            <a href="" class="btn btn-danger" wire:click.prevent="confirmStageRemoval({{ $stage->id }})"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            {{-- Pagination links --}}
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
                        <span>Edycja zadania </span>
                        @else
                        <span>Dodawanie nowego zadania </span>
                        @endif
                    </h5>

                    <button id='closeModal' type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" wire:submit.prevent="{{ $showEditForm ? 'updateStage' : 'createStage' }}">
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategoria</label>
                            <input type="text" wire:model.defer="state.category"
                                class="form-control @error('category') is-invalid @enderror" id="category"
                                aria-describedby="categoryHelp" placeholder="Wybierz kategorię">
                            @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="title" class="form-label">Zadanie</label>
                            <input type="text" wire:model.defer="state.title"
                                class="form-control @error('title') is-invalid @enderror" id="title"
                                aria-describedby="titleHelp" placeholder="Podaj tyuł zadania">
                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Opis zadania</label>
                            <input type="text" wire:model.defer="state.description"
                                class="form-control @error('description') is-invalid @enderror" id="description"
                                aria-describedby="descriptionHelp" placeholder="Podaj opis zadania">
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="maxpoints" class="form-label">Maksymalna ilość punktów</label>
                            <input type="text" wire:model.defer="state.maxpoints"
                                class="form-control  @error('maxpoints') is-invalid @enderror" id="maxpoints"
                                aria-describedby="maxpointsHelp" placeholder="Określ maksymalną ilość punktów za zadanie">
                            @error('maxpoints')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="stagestate" class="form-label">Stan zadania</label>
                            <input type="text" wire:model.defer="state.stagestate"
                                class="form-control  @error('stagestate') is-invalid @enderror" id="stagestate"
                                aria-describedby="stagestateHelp" placeholder="Stan zadania">
                            @error('stagestate')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="fa fa-times mr-1"></i> Anuluj</button>
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
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" wire:ignore.self>
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="fa fa-times mr-1"></i> Anuluj</button>
                    <button type="button" wire:click.prevent="deleteTeam" class="btn btn-danger"><i
                            class="fa fa-trash mr-1"></i>Usuń</button>

                </div>
            </div>
        </div>
    </div>

</div>
