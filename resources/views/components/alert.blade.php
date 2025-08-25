@props(['type' => 'info']) {{-- espera recibir un atributo llamado type, pero en el caso de que no se lo pase, la variable type tendrá por defecto el valor info --}}

@php
    switch ($type) { #dependiendo de lo que le pase en la variable $type se va a crear una variable llamada $class ymostrará un estilo u otro
        case 'info':
            
            $class='text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';

            break;

        case 'danger':
            
            $class='text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';  

            break;

        case 'success':

            $class='text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';

            break;
            
        case 'warning':

            $class='text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';

            break;   
            
        case 'dark':
            
            $class='text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-400';

            break;              
        
        default:
            # valor por defecto si no se cumple ningun valor:
            $class='text-orange-800 bg-orange-50 dark:bg-gray-800 dark:text-orange-400';
            break;
    }
@endphp

<div class="p-4 mb-4 text-sm rounded-lg {{$class}}" role="alert">
    {{-- componente con contenido variable --}}
    <span class="font-medium"> {{ $alertTitle }} </span> {{ $slot }} 
    {{--
    $alertTitle → atributo que le pasas al componente
    $slot → el contenido que escribes dentro del componente.
    --}}
</div>
