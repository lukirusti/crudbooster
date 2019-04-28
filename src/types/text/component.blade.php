@extends('types::layout')
@section('content')
        <?php /** @var \crocodicstudio\crudbooster\types\text\TextAreaModel $column */ ?>
        <input type='text'
               title="{{ $column->getLabel() }}"
               placeholder="{{ $column->getPlaceholder() }}"
               {{ $column->getRequired()?'required':''}}
               {{ $column->getReadonly()?'readonly':''}}
               {{ $column->getDisabled()?'disabled':''}}
               {{ $column->getMaxLength()?"maxlength=".$column->getMaxLength():""}}
               class='form-control'
               name="{{ $column->getName() }}"
               id="{{ $column->getName() }}"
               value='{{ $column->getValue() }}'/>
@endsection