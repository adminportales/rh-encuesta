<table>
    <thead>
    <tr>
        <th class="fw-bold">No. Pregunta</th>
        <th class="fw-bold" >Respuesta</th>
        <th class="fw-bold">Empresa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($Answers as $answer)
        <tr>
            <td>{{ $answer->question_id }}</td>
            <td>{{ $answer->answer }}</td>
            <td>{{$answer->company}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
