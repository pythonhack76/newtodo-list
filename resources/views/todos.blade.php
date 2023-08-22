<div class="text-center">
    <h2>Tutti i Tasks</h2>
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Azione</th>
                </tr>
                </thead>
                <tbody>

                @php $counter=1 @endphp

                @foreach($todos as $todo)
                    <tr>
                        <th>{{$counter}}</th>
                        <td>{{$todo->title}}</td>
                        <td>{{$todo->created_at}}</td>
                        <td>
                            @if($todo->is_completed)
                                <div class="badge bg-success">Completed</div>
                            @else
                                <div class="badge bg-warning">Not Completed</div>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    @php $counter++; @endphp
                    @php @endphp

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>