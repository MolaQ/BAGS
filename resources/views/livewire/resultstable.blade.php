<div>



    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col" colspan="2"></th>
              <th scope="col"></th>
              <th scope="col" colspan="{{ $ilezadan }}">Punktacja za zadania</th>
              <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col" colspan="2"></th>

                <th scope="col">Zespół</th>

                    @for ($i = 1; $i <= $ilezadan; $i++)
                        <th><img src="{{ asset('img/'.$stageCategory[$i-1]) }}" class="img-fluid mr-2" style="height:30px" alt="logo"></th>
                    @endfor

                <th scope="col">Suma punktów</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($results as $result)
            <tr class="table-{{ $result->rowColor($loop->iteration) }}">
              <th>{{ $loop->iteration }}</th>
              <th scope="row">
                @if($closeStageNumber==1) <span class="col-12 badge bg-{{ $result->promoteColor($positionTable[$closeStageNumber][$result->team_id]-$loop->iteration) }}"><i class="nav-icon fas fa-circle-{{ $result->promoteArrow($positionTable[$closeStageNumber][$result->team_id]-$loop->iteration) }}">&nbsp;{{ $result->promoteLocate($positionTable[$closeStageNumber][$result->team_id]-$loop->iteration) }}</i></span>
                @else <span class="col-12 badge bg-{{ $result->promoteColor($positionTable[$closeStageNumber-1][$result->team_id] - $positionTable[$closeStageNumber][$result->team_id]) }}"><i class="fas fa-circle-{{ $result->promoteArrow($positionTable[$closeStageNumber-1][$result->team_id] - $positionTable[$closeStageNumber][$result->team_id])}}">&nbsp;{{ $result->promoteLocate($positionTable[$closeStageNumber-1][$result->team_id] - $positionTable[$closeStageNumber][$result->team_id]) }}</i></span>

                @endif</th>
              <td><img src="{{ asset('img/'.$result->team->classname.$result->team->group.'.png')}}" class="img-fluid mr-2" style="height:30px" alt="logo"> {{ $result->team->teammembers}}</td>
                @for ($i = 1; $i <= $ilezadan; $i++)
                    <td>
                        @if($closeStageState[$i]==false)

                        @else
                        <button class="disable col-12 btn-{{ $result->color(($punkty[$result->team_id][$i]/100)/$maxStagePts[$i]) }}">
                            {{ $punkty[$result->team_id][$i]/100 }}
                        </button>
                        @endif
                    </td>
                @endfor

              <td><button class="disable col-12 btn-light">{{ $result->sum/100 }}</button></td>
            </tr>
            @endforeach


      </table>

</div>

