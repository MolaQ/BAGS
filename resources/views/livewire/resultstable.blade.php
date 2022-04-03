<div>
    @foreach ($results as $result)
   {{ $result->team->teammembers}} |

   @for ($i = 1; $i <= $ilezadan; $i++)
   Zad.{{ $i }}: {{ $punkty[$result->team_id][$i]/100 }} |
@endfor

{{ $result->sum/100 }}  <br>
    @endforeach
</div>

