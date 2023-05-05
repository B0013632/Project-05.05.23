<div class="table-responsive">
    <table class="table" id="customersFromTables-table">
        <thead>
        <tr>
            
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customersFromTables as $customersFromTable)
            <tr>
                
                <td width="120">
                    {!! Form::open(['route' => ['customersFromTables.destroy', $customersFromTable->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('customersFromTables.show', [$customersFromTable->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('customersFromTables.edit', [$customersFromTable->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
