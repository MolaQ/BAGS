<div>



    <table class="table table-striped table-hover">
        <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col" colspan="{{ $ilezadan }}">Punktacja za zadania</th>
              <th scope="col"></th>
            </tr>
            <tr>
                <th scope="col">Poz</th>
                <th scope="col">Zespół</th>

                    @for ($i = 1; $i <= $ilezadan; $i++)
                        <th>{{ $i }}</th>
                    @endfor

                <th scope="col">Suma punktów</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($results as $result)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $result->team->teammembers}} ({{ $result->team->classname }} - {{ $result->team->group }})</td>
                @for ($i = 1; $i <= $ilezadan; $i++)
                    <th> {{ $punkty[$result->team_id][$i]/100 }}</th>
                @endfor

              <td>{{ $result->sum/100 }}</td>
            </tr>
            @endforeach


      </table>

</div>

