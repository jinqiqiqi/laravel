@extends('../app')

@section('content')
    <div class="panel-body">
        @include('../common.errors')
        <form action="/task" method="POST" class="form-horizontal">
            {{ csrf_field()  }}

            <div class="form-group">
                <label class="col-sm-3 control-label" for="task">Task</label>

                <div class="col-sm-6">
                    <input id="task-name" class="form-control" name="name" type="text" value=""/>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button class="btn btn-default" type="submit"><i class="fa fa-plus"></i>Add Task</button>
                </div>
            </div>
        </form>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Current Tasks</div>

        <div class="panel-body">
            <table class="table table-striped task-table">
                <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @if(count($tasks) <= 0)
                        <tr>
                            <td colspan="2">empty tasks.</td>
                        </tr>
                    @endif
                    @foreach($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button>Delete Task</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @Endsection
