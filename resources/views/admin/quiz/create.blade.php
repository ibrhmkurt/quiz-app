<x-app-layout>
    <x-slot name="header">Create Quiz</x-slot>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('quizzes.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                </div>
                <br>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" rows="4">{{ old('description') }}</textarea>
                </div>
                <br>
                <div class="form-group">
                    <input type="checkbox" @if(old('finished_at')) checked @endif id="isFinished">
                    <label>Do you want finished time?</label>
                </div>
                <br>
                <div id="finishedInput" @if(!old('finished_at')) style="display: none" @endif class="form-group">
                    <label>Finished at</label>
                    <input id="dt" type="datetime-local" name="finished_at" class="form-control" value="{{ old('finished_at') }}">
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-success btn-sm block float-end" type="submit">Create Quiz</button>
                </div>
            </form>
        </div>
    </div>

    <x-slot name="js">
        <script>
            $('#isFinished').change(function(){
                if($('#isFinished').is(':checked')){
                    $('#finishedInput').show();
                } else {
                    $('#finishedInput').hide();
                }
            })

            var now = new Date();
            now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
            document.getElementById('dt').value = now.toISOString().slice(0,16);
        </script>
    </x-slot>
</x-app-layout>
