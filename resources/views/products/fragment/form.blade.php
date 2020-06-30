<div class="form-group">
    {!! Form::label('name','Nombre del producto') !!}
    {!! Form::text('name',$value=null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('short','Descripcion breve del producto') !!}
    {!! Form::text('short',$value=null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body','Descripcion del producto') !!}
    {!! Form::textarea('body',$value=null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
</div>