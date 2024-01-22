<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="p-3">
        <x-forms.form-tag
            :attrs="[
                'id' => 'create-post',
                'action' => $action
                'method' => $method,
                'formName' => 'create-post',
                'class' => 'create-post',
            ]" >

            <x-forms.text-input 
                :attrs="[
                    'name' => 'name',
                    'id' => 'name',
                    'label' => 'အမည်',
                    'class' => 'class',
                    'value' => '',
                    'required' => 'required',
                    'placeholder' => 'အမည်'
                ]"
            >
            <x-forms.textarea 
                :attrs="[
                    'name' => 'description',
                    'id' => 'description',
                    'label' => 'အမည်',
                    'class' => 'class',
                    'value' => '',
                    'required' => 'required',
                    'placeholder' => 'အမည်'
                ]"
            >
            <x-forms.submit-button 
                :attrs="[
                    'label' => 'Create Post',
                    'name' => 'form-submit-button',
                    'form' => 'create-post',
                    'class' => 'float-right'
                ]"
            >
        
        <x-forms.form-tag />

    </div>
</body>
</html>