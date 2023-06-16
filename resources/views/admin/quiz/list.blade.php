<x-app-layout>
    <x-slot name="header">
        Quizler
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{ route('quizzes.create') }}" class="btn btn-sm btn-primary float-end"><i class="fa fa-plus"></i>  Quiz Oluştur</a>
            </h5>
            <br>
            <br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Status</th>
                    <th scope="col">Finished at</th>
                    <th scope="col">Operations</th>
                </tr>
                </thead>
                <tbody>
                @foreach($quizzes as $quiz)
                <tr>
                    <th>{{ $quiz->title }}</th>
                    <td>{{ $quiz->status }}</td>
                    <td>{{ $quiz->finished_at }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            {{ $quizzes->links() }}
        </div>
    </div>

</x-app-layout>
