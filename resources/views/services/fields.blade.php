<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Contact No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Contact_NO', 'Contact No:') !!}
    {!! Form::text('Contact_NO', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>