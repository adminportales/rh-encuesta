<table>
    <thead>
    <tr>
        <th>No. Pregunta</th>
        <th >Respuesta</th>
        <th>Empresa</th>
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
